<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use App\Models\ComplainType;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class ComplainsController extends Controller
{
    public function create() {
        $complainsTypes = ComplainType::all();
        return inertia('My/Complains/Create', [
            'complainsTypes' => $complainsTypes
        ]);
    }
    

    public function store() {
        $data = request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:1000'],
            //'screen_url' => ['string', 'max:1000'],
            'is_anonymous' => ['boolean'],
            'complain_type_id' => ['required', 'int']
        ]);

        Complain::create([
            'user_id' => auth()->user()->id,
            'user_reference' => auth()->user()->reference,
            'title' => $data['title'],
            'content' => $data['content'],
            //'screen_url' => $data['screen_url'],
            'screen_url' => 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png',
            'is_anonymous' => $data['is_anonymous'],
            'complain_type_id' => $data['complain_type_id'],
            'assigned_to' => null
        ]);


        return redirect()->route('my.auth.complains.list')->with('toast', [
            'type' => 'success', 
            'message' => 'Votre plainte a bien été envoyé.'
        ]);
    }
    public function list() {
        $user = auth()->user();
        $complains = $user->hasrole("admin")
            ? Complain::select('*')
            : $user->complains();
        
        $complains = $complains->with('assignedUser')->with('status')->where('deleted_at', NULL)->get();
        $complains = $complains->map(function($complain) {
            if(!$complain->is_anonymous) {
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

    public function delete(Complain $complain) {
        $complain->deleted_at=now();
        $complain->save();
        return redirect()->route('my.auth.complains.list')->with('toast', [
            'type' => 'success',
            'message' => "Plainte supprimée avec succès",
        ]);
    }

    public function edit(Complain $complain) {
        $complain = $complain->load('user','complainType','status');
        $admins = User::role('admin')->get();
        $complainType = DB::table('complain_types')->get();

        return inertia('My/Complains/Edit', [
            'complain' => $complain,
            'admins' => $admins,
            'complainType' => $complainType
        ]);
    }

    public function update(Complain $complain){
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

        return redirect()->route('my.auth.complains.edit', $complain->id)->with('toast', [
            'type' => 'success',
            'message' => "La plainte a bien été modifiée.",
        ]);
    }
}
