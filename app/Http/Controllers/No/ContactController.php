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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
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
