<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKerosakanRequest;
use App\Http\Requests\UpdateKerosakanRequest;
use App\Models\Kerosakan;

class KerosakanController extends Controller
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
     * @param  \App\Http\Requests\StoreKerosakanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKerosakanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kerosakan  $kerosakan
     * @return \Illuminate\Http\Response
     */
    public function show(Kerosakan $kerosakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kerosakan  $kerosakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerosakan $kerosakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKerosakanRequest  $request
     * @param  \App\Models\Kerosakan  $kerosakan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKerosakanRequest $request, Kerosakan $kerosakan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kerosakan  $kerosakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerosakan $kerosakan)
    {
        //
    }
}
