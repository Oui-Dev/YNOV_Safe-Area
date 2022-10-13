<?php

namespace App\Http\Controllers;

use App\Models\FeedbackSupport;
use App\Http\Requests\StoreFeedbackSupportRequest;
use App\Http\Requests\UpdateFeedbackSupportRequest;

class FeedbackSupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeedbackSupportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedbackSupportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedbackSupport  $feedbackSupport
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackSupport $feedbackSupport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedbackSupport  $feedbackSupport
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackSupport $feedbackSupport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedbackSupportRequest  $request
     * @param  \App\Models\FeedbackSupport  $feedbackSupport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedbackSupportRequest $request, FeedbackSupport $feedbackSupport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedbackSupport  $feedbackSupport
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackSupport $feedbackSupport)
    {
        //
    }
}
