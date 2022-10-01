<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pollen;

class PollenController extends Controller
{
    public function senarai_pollen(Request $request)
    {
        $pollens = Pollen::all();
        return view('pollen.senarai', compact('pollens'));
    }

    public function butir_pollen($id)
    {
        $pollen = Pollen::find($id);
        return view('pollen.butir', compact('pollen'));
    }   

    public function cipta_pollen(Request $request)
    {
        $user_id = $request->user()->id;

        $pollen = New pollen;

        $pollen->pokok_id = $request->pokok_id;
        $pollen->tandan_id = $request->tandan_id;

        $pollen->catatan_pollen = $request->catatan_pollen;
        $pollen->status_pollen = $request->status_pollen;
        $pollen->viabiliti_pollen = $request->viabiliti_pollen;
        $pollen->masa_masuk_pertama = $request->masa_masuk_pertama;
        $pollen->masa_masuk_kedua = $request->masa_masuk_kedua;
        $pollen->masa_keluar_pertama = $request->masa_keluar_pertama;
        $pollen->masa_keluar_kedua = $request->masa_keluar_kedua;
        $pollen->tarikh_ayak = $request->tarikh_ayak;
        $pollen->tarikh_uji = $request->tarikh_uji;
        $pollen->bil_uji = $request->bil_uji;
        
        $pollen->quality_control_id = $request->quality_control_id;
                
        // $table->foreignId('tugasan_id'

        $pollen->save();
        $url = '/pollen/'.$pollen->id;
        return Redirect($url);
    }  
    
    public function ubah_pollen($id, Request $request)
    {
        $user_id = $request->user()->id;

        $pollen = pollen::find($id);
        
        $pollen->pokok_id = $request->pokok_id;
        $pollen->tandan_id = $request->tandan_id;

        $pollen->catatan_pollen = $request->catatan_pollen;
        $pollen->status_pollen = $request->status_pollen;
        $pollen->viabiliti_pollen = $request->viabiliti_pollen;
        $pollen->masa_masuk_pertama = $request->masa_masuk_pertama;
        $pollen->masa_masuk_kedua = $request->masa_masuk_kedua;
        $pollen->masa_keluar_pertama = $request->masa_keluar_pertama;
        $pollen->masa_keluar_kedua = $request->masa_keluar_kedua;
        $pollen->tarikh_ayak = $request->tarikh_ayak;
        $pollen->tarikh_uji = $request->tarikh_uji;
        $pollen->bil_uji = $request->bil_uji;
        
        $pollen->quality_control_id = $request->quality_control_id;

        $pollen->save();        
        return view('pollen.butir', compact('pollen'));        
    }   
    
    public function guna_pollen(Request $request)
    {
        //
    }         
}
