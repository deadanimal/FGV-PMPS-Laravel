<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMotherControlledPollinationRequest;
use App\Http\Requests\UpdateMotherControlledPollinationRequest;
use App\Models\MotherControlledPollination;

class MotherControlledPollinationController extends Controller
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
     * @param  \App\Http\Requests\StoreMotherControlledPollinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMotherControlledPollinationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MotherControlledPollination  $motherControlledPollination
     * @return \Illuminate\Http\Response
     */
    public function show(MotherControlledPollination $motherControlledPollination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MotherControlledPollination  $motherControlledPollination
     * @return \Illuminate\Http\Response
     */
    public function edit(MotherControlledPollination $motherControlledPollination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMotherControlledPollinationRequest  $request
     * @param  \App\Models\MotherControlledPollination  $motherControlledPollination
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMotherControlledPollinationRequest $request, MotherControlledPollination $motherControlledPollination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MotherControlledPollination  $motherControlledPollination
     * @return \Illuminate\Http\Response
     */
    public function destroy(MotherControlledPollination $motherControlledPollination)
    {
        //
    }
}
