<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\HelpDeskSupport;
use Illuminate\Support\Str;

class HelpDeskController extends Controller
{
    public function helpDesk() {
        return Inertia::render('My/HelpDesk', [
            'pageName' => 'HelpDesk',
            'user' => auth()->user(),
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
        'title' => 'required|string|max:255',
        'message' => 'required|string|max:500',
        'fileUpload' => 'file|nullable',
        'type' => 'boolean',

    ]);

    $user = auth()->user();

    /**
     * @var \App\Models\HelpDeskSupport $ticket
     * */
    $ticket = HelpDeskSupport::create([
        'reference' => Str::uuid(),
        'user_id' => $user->id,
        'title' => $data['title'],
        'description' => $data['message'],
        'type' => $data['type'] ? 'incident' : 'demande' ,
        'emergency' => 3,
        // 'file' => $data['fileUpload'],
    ]);
    $ticket->save();
 }
}
