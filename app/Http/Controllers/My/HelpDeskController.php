<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\HelpDeskSupport;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HelpDeskController extends Controller
{

    public function list()
    {
        return Inertia::render(
            'My/HelpDeskList',
            [
                'users' => User::all(),
                'tickets' => HelpDeskSupport::paginate(9),
            ]
        );
    }

    public function create()
    {
        return Inertia::render(
            'My/HelpDesk',
        );
    }

    public function show(HelpdeskSupport $ticket)
    {
        return inertia('My/HelpDeskShow', [
            'ticket' => $ticket,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // TODO: response, handle error
        $data = request()->validate([
            'reference' => ['required','string','max:6'],
            'title' => ['required','string','max:255'],
            'message' => ['required','string','max:500'],
            'file' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'type' => ['boolean'],
        ]);

        //$ticketRef = Str::uuid();
        // $fileName = $ticketRef . '.' . $data['file']->extension();
        // $filePath = Storage::disk('s3')->put('helpdesk/', $data['file'], $fileName, 'private');

        $user = auth()->user();

        /**
         * @var \App\Models\HelpDeskSupport $ticket
         * */
        $ticket = HelpDeskSupport::create([
            'reference' => $data['reference'],
            'user_id' => $user->id,
            'title' => $data['title'],
            'description' => $data['message'],
            'type' => $data['type'] ? 'incident' : 'demande',
            'emergency' => 3,
            'file' => null // $data['$filePath'], //
        ]);
        $ticket->save();
        return redirect()->route('my.auth.helpDesk.list')->with('toast', [
            'type' => 'success', 
            'message' => 'Votre ticket a bien été envoyé'
        ]);
    }
}
