<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTandanRequest;
use App\Http\Requests\UpdateTandanRequest;
use App\Models\Tandan;

class TandanController extends Controller
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
     * @param  \App\Http\Requests\StoreTandanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTandanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tandan  $tandan
     * @return \Illuminate\Http\Response
     */
    public function show(Tandan $tandan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tandan  $tandan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tandan $tandan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTandanRequest  $request
     * @param  \App\Models\Tandan  $tandan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTandanRequest $request, Tandan $tandan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tandan  $tandan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tandan $tandan)
    {
        //
    }

    public function generate_qr(Tandan $tandan)
    {
        //
    }    

    public function scan_qr(Tandan $tandan)
    {
        //
    }  
    
    public function show_form(Tandan $tandan)
    {
        //
    }  
    
    public function submit_form(Tandan $tandan)
    {
        //
    }          
}
