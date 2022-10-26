<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HelpDeskController extends Controller
{
    public function helpDesk() {
        return Inertia::render('My/HelpDesk', [
            'pageName' => 'HelpDesk',
        ]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
public function store(Request $request)
{
    // TODO: post request, response
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'fileUpload' => 'file',

    ]);
 }
}
