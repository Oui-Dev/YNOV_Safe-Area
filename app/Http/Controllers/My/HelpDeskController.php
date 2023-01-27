<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\HelpDeskSupport;
use App\Models\User;
// use Illuminate\Support\Facades\Storage;

class HelpDeskController extends Controller
{

    public function list()
    {
        return Inertia::render(
            'My/HelpDeskList',
            [
                'users' => User::all(),
                'tickets' => HelpDeskSupport::with('user')->paginate(9),
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
        $data = request()->validate([
            'title' => ['required','string','max:255'],
            'message' => ['required','string','max:500'],
            'file_url' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'type' => ['boolean'],
        ]);

        $user = auth()->user();

        $firstPart = base_convert(mt_rand(0, 46656), 10, 36);
        $secondPart = base_convert(mt_rand(0, 46656), 10, 36);
        $firstPart = sprintf("%03s", $firstPart);
        $secondPart = sprintf("%03s", $secondPart);
        $ticketRef = $firstPart . $secondPart;
        // $fileName = $ticketRef . '.' . $data['file']->extension();
        // $filePath = Storage::disk('s3')->put('helpdesk/', $data['file'], $fileName, 'private');

        /**
         * @var \App\Models\HelpDeskSupport $ticket
         * */
        HelpDeskSupport::create([
            'reference' => $ticketRef,
            'user_id' => $user->id,
            'firstname' => $user->firstName,
            'lastname' => $user->lastName,
            'professional_email' => $user->professional_email,
            'phone' => $user->phone,
            'title' => $data['title'],
            'description' => $data['message'],
            'type' => $data['type'] ? 'incident' : 'demande',
            'emergency' => 3,
            'file' => null // $data['$filePath'], //
        ]);
        return redirect()->route('my.auth.helpDesk.list')->with('toast', [
            'type' => 'success', 
            'message' => 'Votre ticket a bien été envoyé'
        ]);
    }
}