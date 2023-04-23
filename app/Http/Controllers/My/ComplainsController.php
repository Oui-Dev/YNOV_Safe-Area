<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\IdentityRequestMail;
use App\Models\ComplainType;
use App\Models\Complain;
use App\Models\ComplainChat;
use App\Models\Token;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ComplainsController extends Controller
{
    public function list()
    {
        $user = auth()->user();
        $complains = $user->hasrole("admin")
            ? Complain::select('*')
            : $user->complains();

        $complains = $complains->with('assignedUser')->with('status')->where('deleted_at', NULL)->get();
        $complains = $complains->map(function ($complain) {
            if (!$complain->is_anonymous) {
                $complain->load('user');
            } else {
                $complain->user_id = null;
            }
            return $complain;
        });

        $page = request()->get('page', 1);
        $complains = $complains->toArray();
        $complains = new \Illuminate\Pagination\LengthAwarePaginator(
            array_slice($complains, ($page - 1) * 10, 10),
            count($complains),
            10,
            $page,
            [
                'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
                'pageName' => 'page',
            ]
        );

        return inertia('My/Complains/List', [
            'complains' => $complains,
        ]);
    }

    public function create()
    {
        $complainsTypes = ComplainType::all();
        return inertia('My/Complains/Add', [
            'complainsTypes' => $complainsTypes
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:1000'],
            'file_url' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'is_anonymous' => ['boolean'],
            'complain_type_id' => ['required', 'int']
        ]);

        $firstPart = sprintf("%03s", base_convert(mt_rand(0, 46656), 10, 36));
        $secondPart = sprintf("%03s", base_convert(mt_rand(0, 46656), 10, 36));
        $complainRef = $firstPart . $secondPart;

        if (request()->hasFile('file_url')) {
            $file = request()->file('file_url');
            $fileName = $file->getClientOriginalName();
            $filePath = Storage::disk('local')->putFileAs('complains', $file, $fileName);
        }

        Complain::create([
            'user_id' => auth()->user()->id,
            'user_reference' => auth()->user()->reference,
            'reference' => $complainRef,
            'title' => $data['title'],
            'content' => $data['content'],
            'status_id' => 1,
            'file_url' => $filePath ?? null,
            'is_anonymous' => $data['is_anonymous'],
            'complain_type_id' => $data['complain_type_id'],
            'assigned_to' => null
        ]);

        return redirect()->route('my.auth.complains.list')->with('toast', [
            'type' => 'success',
            'message' => 'Votre plainte a bien été envoyé.'
        ]);
    }

    public function edit(Complain $complain)
    {
        $complain = $complain->load('complainType', 'status');

        if (!$complain->is_anonymous) {
            $complain->load('user');
        } else {
            $complain->user_id = null;
        }

        $admins = User::role('admin')->get();
        $complainTypes = ComplainType::all();
        return inertia('My/Complains/Edit', [
            'complain' => $complain,
            'admins' => $admins,
            'complainTypes' => $complainTypes
        ]);
    }

    public function update(Complain $complain)
    {
        $data = request()->validate([
            'is_urgent' => ["boolean"],
            'assigned_to' => ["nullable", "integer"],
            'complain_type_id' => ["nullable", "integer"]
        ]);

        $complain->update([
            'is_urgent' => $data['is_urgent'],
            'assigned_to' => $data['assigned_to'],
            'complain_type_id' => $data['complain_type_id']
        ]);

        return redirect()->route('my.auth.complains.edit', $complain->reference)->with('toast', [
            'type' => 'success',
            'message' => "La plainte a bien été modifiée.",
        ]);
    }

    public function chat (Complain $complain) {
        $chats = $complain->complainChats;
        $complain->load('status');

        if(!$complain->is_anonymous || $complain->user_id == auth()->user()->id) {
            $complain->load('user');
            $chats = $chats->map(function($chat) {
                $chat->load('user');
                return $chat;
            });
        } else {
            $chats = $chats->map(function($chat) use ($complain) {
                if($chat->user_id == $complain->user_id) {
                    $chat->user_id = null;
                } else {
                    $chat->load('user');
                }
                return $chat;
            });
            $complain->user_id = null;
        }

        return inertia('My/Complains/Chat', [
            'complain' => $complain,
            'chats' => $chats
        ]);
    }

    public function sendChat(Complain $complain) {
        $data = request()->validate([
            'content' => ['required', 'string', 'max:1000'],
        ]);

        $complainChat = ComplainChat::create([
            'complain_id' => $complain->id,
            'user_id' => auth()->user()->id,
            'content' => $data['content']
        ]);

        return redirect()->route('my.auth.complains.chat', $complain->reference)->with('toast', [
            'type' => 'success',
            'message' => "Votre message a bien été envoyé.",
        ]);
    }

    public function delete(Complain $complain)
    {
        $complain->deleted_at = now();
        $complain->save();
        return redirect()->route('my.auth.complains.list')->with('toast', [
            'type' => 'success',
            'message' => "Plainte supprimée avec succès",
        ]);
    }

    public function download(Complain $complain)
    {
        return Storage::download($complain->file_url);
    }

    public function showAnonym(Complain $complain)
    {
        if ($complain->is_anonymous == 1 && $complain->identity_request == 0) {
            $complain->identity_request = 1;
        }

        if ($complain->save()) {

            $token = Token::create([
                'email' => $complain->user->professional_email,
                'token' => Str::uuid() . '--' . $complain->reference,
            ]);

            Mail::to($complain->user->professional_email)->send(new IdentityRequestMail($complain, $token->token));

            return redirect()->route('my.auth.complains.edit', $complain->reference)->with('toast', [
                'type' => 'success',
                'message' => "La demande pour lever l'anonymat a bien été effectué",
            ]);
        }
    }

    public function confirmAnonym(Token $token)
    {
        if (time() - strtotime($token->created_at) < (48 * 3600)) {
            return inertia('My/Complains/Confirm', [
                'token' => $token
            ]);
        } else {
            Token::where('token', $token->token)->delete();
            $reference = substr($token->token, strpos($token->token, "--") + 2);
            $complain = Complain::where('reference', $reference)->first();
            $complain->identity_request = 0;
            if ($complain->save()) {
                return redirect()->route('my.auth.complains.list')->with('toast', [
                    'type' => 'error',
                    'message' => "Le token a expiré.",
                ]);
            }
        }
    }

    public function updateAnonym(Token $token)
    {
        $data = request()->validate([
            'answer' => ['required', Rule::in(['accept', 'reject'])],
            'is_anonymous' => ['boolean'],
        ]);

        $reference = substr($token->token, strpos($token->token, "--") + 2);
        $complain = Complain::where('reference', $reference)->first();
        if ((time() - strtotime($token->created_at)) < (48 * 3600)) {
            if ($data['is_anonymous'] == false && $data['answer'] == 'accept') {
                throw ValidationException::withMessages([
                    'is_anonymous' => 'Vous devez accepter la condition pour pouvoir lever l\'anonymat.',
                ]);
            } else if ($data['is_anonymous'] == true && $data['answer'] == 'accept') {
                $complain->is_anonymous = 0;

                Token::where('token', $token->token)->delete();
                if ($complain->save()) {
                    return redirect()->route('my.auth.complains.list')->with('toast', [
                        'type' => 'success',
                        'message' => "La plainte n'est plus anonyme",
                    ]);
                }
            }
            else {
                $complain->identity_request = 0;
                Token::where('token', $token->token)->delete();
                if ($complain->save()) {
                    return redirect()->route('my.auth.complains.list')->with('toast', [
                        'type' => 'success',
                        'message' => "La plainte reste anonyme.",
                    ]);
                }
            }
        } else {
            Token::where('token', $token->token)->delete();
            $complain->identity_request = 0;
            return redirect()->route('my.auth.complains.list')->with('toast', [
                'type' => 'error',
                'message' => "Le token a expiré.",
            ]);
        }
    }
}
