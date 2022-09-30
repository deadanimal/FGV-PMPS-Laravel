<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTugasanRequest;
use App\Http\Requests\UpdateTugasanRequest;
use App\Models\Tugasan;

class TugasanController extends Controller
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
     * @param  \App\Http\Requests\StoreTugasanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTugasanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function show(Tugasan $tugasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugasan $tugasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTugasanRequest  $request
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTugasanRequest $request, Tugasan $tugasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugasan $tugasan)
    {
        //
    }

    public function sah_tugasan(Request $request)
    {
        //
    }    
}
