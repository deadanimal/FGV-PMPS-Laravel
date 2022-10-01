<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Pokok;

class PokokController extends Controller
{

    public function senarai_pokok(Request $request)
    {
        $pokoks = Pokok::all();
        return view('pokok.senarai', compact('pokoks'));
    }

    public function butir_pokok($id)
    {
        $pokok = Pokok::find($id);
        return view('pokok.butir', compact('pokok'));
    }   

    public function cipta_pokok(Request $request)
    {
        $user_id = $request->user()->id;

        $pokok = New Pokok;

        $pokok->no_pokok = $request->no_pokok;
        $pokok->jantina = $request->jantina;
        $pokok->baka = $request->baka;
        $pokok->progeny = $request->progeny;
        $pokok->blok = $request->blok;
        $pokok->trial = $request->trial;
        $pokok->status_pokok = $request->status_pokok;

        $pokok->save();
        $url = '/pokok/'.$pokok->id;
        return Redirect($url);
    }  
    
    public function ubah_pokok($id, Request $request)
    {
        $user_id = $request->user()->id;

        $pokok = Pokok::find($id);
        $pokok->no_pokok = $request->no_pokok;
        $pokok->jantina = $request->jantina;
        $pokok->baka = $request->baka;
        $pokok->progeny = $request->progeny;
        $pokok->blok = $request->blok;
        $pokok->trial = $request->trial;
        $pokok->status_pokok = $request->status_pokok;

        $pokok->save();        
        return view('pokok.butir', compact('pokok'));        
    }      
   
}
