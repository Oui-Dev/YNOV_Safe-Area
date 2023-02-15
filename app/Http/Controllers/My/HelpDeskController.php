<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Storage;
use App\Models\HelpDeskSupport;
use App\Models\User;

class HelpDeskController extends Controller
{
    public function list() {
        return inertia('My/HelpDesk/List', [
            'tickets' => HelpDeskSupport::with('user')->paginate(10),
        ]);
    }

    public function create() {
        return inertia('My/HelpDesk/Add');
    }

    public function show(HelpdeskSupport $ticket) {
        return inertia('My/HelpDesk/Show', [
            'ticket' => $ticket::with('user')->find($ticket->id),
        ]);
    }

    public function store() {
        $user = auth()->user();
        $data = request()->validate([
            'title' => ['required','string','max:255'],
            'message' => ['required','string','max:500'],
            'file_url' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'type' => ['boolean'],
        ]);

        $firstPart = sprintf("%03s", base_convert(mt_rand(0, 46656), 10, 36));
        $secondPart = sprintf("%03s", base_convert(mt_rand(0, 46656), 10, 36));
        $ticketRef = $firstPart . $secondPart;
        // $fileName = $ticketRef . '.' . $data['file']->extension();
        // $filePath = Storage::disk('s3')->put('helpdesk/', $data['file'], $fileName, 'private');

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