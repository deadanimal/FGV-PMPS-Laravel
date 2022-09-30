<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePelbagaiRequest;
use App\Http\Requests\UpdatePelbagaiRequest;
use App\Models\Pelbagai;

class PelbagaiController extends Controller
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
     * @param  \App\Http\Requests\StorePelbagaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePelbagaiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelbagai  $pelbagai
     * @return \Illuminate\Http\Response
     */
    public function show(Pelbagai $pelbagai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelbagai  $pelbagai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelbagai $pelbagai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelbagaiRequest  $request
     * @param  \App\Models\Pelbagai  $pelbagai
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePelbagaiRequest $request, Pelbagai $pelbagai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelbagai  $pelbagai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelbagai $pelbagai)
    {
        //
    }

    public function show_dashboard()
    {
        //
    }       

    public function show_report()
    {
        //
    }   
    
    public function download_report()
    {
        //
    }    
}
