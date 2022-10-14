<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokok;

class PokokController extends Controller
{

    public function senarai_pokok(Request $request)
    {
        $pokoks = Pokok::all();
        return view('pokok.senarai', compact('pokoks'));
    }

    public function butir_pokok(Request $request)
    {
        $id = (int)$request->route('id'); 
        $pokok = Pokok::find($id);
        return view('pokok.butir', compact('pokok'));
    }   

    public function cipta_pokok(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $pokok = New Pokok;

        $pokok->no_pokok = $request->no_pokok;
        $pokok->jantina = $request->jantina;
        $pokok->baka = $request->baka;
        $pokok->progeny = $request->progeny;
        $pokok->blok = $request->blok;
        $pokok->trial = $request->trial;
        $pokok->status_pokok = $request->status_pokok;

        $pokok->save();
        
        return back();
    }  
    
    public function ubah_pokok(Request $request) {

        $id = (int)$request->route('id'); 
        $pokok = Pokok::find($id);
        
        $pokok->no_pokok = $request->no_pokok;
        $pokok->jantina = $request->jantina;
        $pokok->baka = $request->baka;
        $pokok->progeny = $request->progeny;
        $pokok->blok = $request->blok;
        $pokok->trial = $request->trial;
        $pokok->status_pokok = $request->status_pokok;

        $pokok->save();        
        return back();
    }      
   
}
