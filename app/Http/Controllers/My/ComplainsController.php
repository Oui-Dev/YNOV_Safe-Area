<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use http\Client\Curl\User;
use App\Models\ComplainType;

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
        
        $complains = $tmpComplains->with('user')->with('assignedUser')->where('deleted_at', NULL)->paginate(10);

        return inertia('My/Complains/List', [
            'complains' => $complains,
        ]);
    }
    // public function list() {
    //     $complains = Complain::with('user')->with('assignedUser')->where('deleted_at', NULL)->paginate(20);
    //     return inertia('My/Complains/List', [
    //         'complains' => $complains,
    //     ]);
    // }

    public function delete(Complain $complain) {
        $complain->deleted_at=now();
        $complain->save();
        return redirect()->route('my.auth.complains.list')->with('toast', [
            'type' => 'success',
            'message' => "Plainte supprimée avec succès",
        ]);
    }


}
