<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsletterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);
        try {
            Newsletter::firstOrCreate(['email'=>$request->email], ['email'=>$request->email]);
            return redirect()->back()->with(['newsletter.success'=>"Votre email à bien été enregistré dans la liste des newsletters"]);
        } catch (\Exception $ex)
        {
            return redirect()->back()->with(['newsletter.success'=>"Votre adresse email à déjà été enregistrée"]);
        }
    }
}
