<?php

namespace App\Http\Controllers\No;

use App\Http\Controllers\Controller;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages/No/contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'phone' => ['bail','required','max:20','min:10','regex:/^([0-9\s\-\+\(\)]*)$/'],
            'email' => ['required','email:rfc,dns,spoof','max:255'],
            'subject' => ['required','string','max:255'],
            'message' => ['required','string','max:1000'],
        ]);

        try {
            Mail::to('safearea.app@gmail.com')->send(new ContactForm(
                $request->firstname,
                $request->lastname,
                $request->email,
                $request->phone,
                $request->subject,
                $request->message,
            ));
            return redirect()->back()->with(['contactform.success'=>"Votre demande de contact à bien été envoyée"]);
        } catch(\Exception $ex)
        {
            return redirect()->back()->with(['contactform.error'=>"une erreur à été rencontrée lors de l'envoie de votre formulaire."]);
        }
    }
}
