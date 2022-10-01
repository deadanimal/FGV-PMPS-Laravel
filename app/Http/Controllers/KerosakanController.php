<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerosakan;

class KerosakanController extends Controller
{

    public function senarai_kerosakan(Request $request)
    {
        $kerosakans = Kerosakan::all();
        return view('kerosakan.senarai', compact('kerosakans'));
    }

    public function butir_kerosakan($id)
    {
        $kerosakan = Kerosakan::find($id);
        return view('kerosakan.butir', compact('kerosakan'));
    }   

    public function cipta_kerosakan(Request $request)
    {
        $user_id = $request->user()->id;

        $kerosakan = New kerosakan;

        $kerosakan->nama = $request->nama;
        $kerosakan->jenis = $request->jenis;
        $kerosakan->tandan_id = $request->tandan_id;
                
        // $table->foreignId('tugasan_id'

        $kerosakan->save();
        $url = '/kerosakan/'.$kerosakan->id;
        return Redirect($url);
    }  
    
    public function ubah_kerosakan($id, Request $request)
    {
        $user_id = $request->user()->id;

        $kerosakan = Kerosakan::find($id);

        $kerosakan->nama = $request->nama;
        $kerosakan->jenis = $request->jenis;
        $kerosakan->tandan_id = $request->tandan_id;

        $kerosakan->save();        
        return view('kerosakan.butir', compact('kerosakan'));        
    }   
}
