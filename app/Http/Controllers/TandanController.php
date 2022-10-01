<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTandanRequest;
use App\Http\Requests\UpdateTandanRequest;
use App\Models\Tandan;

class TandanController extends Controller
{

    public function senarai_tandan(Request $request)
    {
        $tandans = Tandan::all();
        return view('tandan.senarai', compact('tandans'));
    }

    public function butir_tandan($id)
    {
        $tandan = Tandan::find($id);
        return view('tandan.butir', compact('tandan'));
    }   

    public function cipta_tandan(Request $request)
    {
        $user_id = $request->user()->id;

        $tandan = New Tandan;    

        $tandan->no_daftar = $request->no_daftar;
        $tandan->tandan_id = $request->tandan_id;
        
        $tandan->kitaran = $request->kitaran;
        $tandan->deskripsi_kitaran = $request->deskripsi_kitaran;
        $tandan->status_tandan = $request->status_tandan;
        $tandan->catatan = $request->catatan;
        $tandan->umur = $request->umur;

        $tandan->save();
        $url = '/tandan/'.$tandan->id;
        return Redirect($url);
    }  

    public function buang_tandan($id)
    {
        $tandan = Tandan::find($id);
        return view('tandan.butir', compact('tandan'));
    }  
    
    public function sah_buang_tandan($id)
    {
        $tandan = Tandan::find($id);
        return view('tandan.butir', compact('tandan'));
    }      
         
}
