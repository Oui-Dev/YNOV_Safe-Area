<?php

namespace App\Http\Controllers\No;

use App\Http\Controllers\Controller;
use App\Mail\ContactForm;
use App\Models\User;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StaticViewController extends Controller
{
    // Homepage
    public function homepage()
    {
        return view('pages/No/homepage');
    }

    public function prices()
    {
        return view('pages/No/prices');
    }

    public function error404()
    {
        return view('errors/404');
    }

    public function error401()
    {
        return view('errors/401');
    }

    public function error405()
    {
        return view('errors/405');
    }

    public function features()
    {
        return view('pages/No/features');
    }

    public function contact()
    {
        return view('pages/No/contact');
    }

    public function maintenance() {
        return view('errors/maintenance');
    }

    // Changelog
    public function changelog()
    {
        $versions = Version::get();
        return view('pages/No/changelog', ['versions' => $versions]);
    }

    public function sendMailForm(Request $request)
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

    public function showLegal()
    {
        return view('pages/No/legal');
    }
}
