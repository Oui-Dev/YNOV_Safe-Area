<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Complain;

class ComplainsController extends Controller
{

    public function create() {
        return inertia('My/Complains/Create');
    }


    public function store() {
        $data = request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:1000'],
            'screen_url' => ['string', 'max:255'],
            'is_anonymous' => ['bool']
        ]);

        $complain = Complain::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'screen_url' => $data['screen_url'],
            'is_anonymous' => $data['is_anonymous']
        ]);

        return redirect()->route('my.auth.complains')->with('toast', [
            'type' => 'success', 
            'message' => 'Votre plainte a bien été envoyé.'
        ]);
    }


    public function list() {
        $complains = Complain::with('user')->with('assignedUser')->paginate(20);
        return inertia('My/Complains/List', [
            'complains' => $complains,
        ]);
    }

    


    






}
