<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFatherHarvestRequest;
use App\Http\Requests\UpdateFatherHarvestRequest;
use App\Models\FatherHarvest;

class FatherHarvestController extends Controller
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
     * @param  \App\Http\Requests\StoreFatherHarvestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFatherHarvestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FatherHarvest  $fatherHarvest
     * @return \Illuminate\Http\Response
     */
    public function show(FatherHarvest $fatherHarvest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FatherHarvest  $fatherHarvest
     * @return \Illuminate\Http\Response
     */
    public function edit(FatherHarvest $fatherHarvest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFatherHarvestRequest  $request
     * @param  \App\Models\FatherHarvest  $fatherHarvest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFatherHarvestRequest $request, FatherHarvest $fatherHarvest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FatherHarvest  $fatherHarvest
     * @return \Illuminate\Http\Response
     */
    public function destroy(FatherHarvest $fatherHarvest)
    {
        //
    }
}
