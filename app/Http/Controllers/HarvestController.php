<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHarvestRequest;
use App\Http\Requests\UpdateHarvestRequest;
use App\Models\Harvest;

class HarvestController extends Controller
{
    
    public function senarai_harvest(Request $request)
    {
        $harvests = Harvest::all();
        return view('harvest.senarai', compact('harvests'));
    }

    public function butir_harvest($id)
    {
        $harvest = Harvest::find($id);
        return view('harvest.butir', compact('harvest'));
    }   

    public function cipta_harvest(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $harvest = New harvest;

        $harvest->jenis = $request->jenis;
        $harvest->no_harvest = $request->no_harvest;
        $harvest->pokok_id = $request->pokok_id;
        $harvest->tandan_id = $request->tandan_id;
        $harvest->catatan_harvest = $request->catatan_harvest;

        $harvest->berat_tandan = $request->berat_tandan;
        $harvest->jumlah_tandan = $request->jumlah_tandan;
                
        // $table->foreignId('tugasan_id'

        $harvest->save();

        activity()
        ->causedBy($user)
        ->performedOn($harvest)
        ->log('Cipta');

        $url = '/harvest/'.$harvest->id;
        return Redirect($url);
    }  
    
    public function ubah_harvest($id, Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $harvest = Harvest::find($id);
        $harvest->jenis = $request->jenis;
        $harvest->no_harvest = $request->no_harvest;
        $harvest->pokok_id = $request->pokok_id;
        $harvest->tandan_id = $request->tandan_id;
        $harvest->catatan_harvest = $request->catatan_harvest;

        $harvest->berat_tandan = $request->berat_tandan;
        $harvest->jumlah_tandan = $request->jumlah_tandan;

        $harvest->save();     
        
        activity()
        ->causedBy($user)
        ->performedOn($harvest)
        ->log('Ubah');

        return view('harvest.butir', compact('harvest'));        
    }         
}
