<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBaggingDataRequest;
use App\Http\Requests\UpdateBaggingDataRequest;
use App\Models\BaggingData;

class BaggingDataController extends Controller
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
     * @param  \App\Http\Requests\StoreBaggingDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBaggingDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaggingData  $baggingData
     * @return \Illuminate\Http\Response
     */
    public function show(BaggingData $baggingData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaggingData  $baggingData
     * @return \Illuminate\Http\Response
     */
    public function edit(BaggingData $baggingData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBaggingDataRequest  $request
     * @param  \App\Models\BaggingData  $baggingData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBaggingDataRequest $request, BaggingData $baggingData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaggingData  $baggingData
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaggingData $baggingData)
    {
        //
    }

    public function scan_qr(Request $request)
    {
        //
    }   
    
    public function generate_qr(Request $request)
    {
        //
    }    

    public function upload_gambar(Request $request)
    {
        //
    }  
    
    public function hantar_borang(Request $request)
    {
        //
    }     


}
