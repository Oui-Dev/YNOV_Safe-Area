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

    public function helpDeskList()
    {
        return Inertia::render(
            'My/HelpDeskList',
            [
                'users' => User::all(),
                'tickets' => HelpDeskSupport::all(),
            ]
        );
    }


    public function helpDesk()
    {
        return Inertia::render(
            'My/HelpDesk',
        );
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
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'boolean',
        ]);

        $ticketRef = Str::uuid();
        // $fileName = $ticketRef . '.' . $data['file']->extension();
        // $filePath = Storage::disk('s3')->put('helpdesk/', $data['file'], $fileName, 'private');

        $user = auth()->user();

        /**
         * @var \App\Models\HelpDeskSupport $ticket
         * */
        $ticket = HelpDeskSupport::create([
            'reference' => $ticketRef,
            'user_id' => $user->id,
            'title' => $data['title'],
            'description' => $data['message'],
            'type' => $data['type'] ? 'incident' : 'demande',
            'emergency' => 3,
            'file' => null // $data['$filePath'], //
        ]);
        $ticket->save();
    }
}
