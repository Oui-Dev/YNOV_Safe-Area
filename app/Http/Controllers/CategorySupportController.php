<?php

namespace App\Http\Controllers;

use App\Models\CategorySupport;
use App\Http\Requests\StoreCategorySupportRequest;
use App\Http\Requests\UpdateCategorySupportRequest;

class CategorySupportController extends Controller
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
     * @param  \App\Http\Requests\StoreCategorySupportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorySupportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorySupport  $categorySupport
     * @return \Illuminate\Http\Response
     */
    public function show(CategorySupport $categorySupport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorySupport  $categorySupport
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorySupport $categorySupport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorySupportRequest  $request
     * @param  \App\Models\CategorySupport  $categorySupport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorySupportRequest $request, CategorySupport $categorySupport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorySupport  $categorySupport
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorySupport $categorySupport)
    {
        //
    }
}
