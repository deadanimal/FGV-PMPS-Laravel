<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tandan;

class TandanController extends Controller
{

    public function senarai_tandan(Request $request)
    {
        $tandans = Tandan::all();
        return view('tandan.senarai', compact('tandans'));
    }

    public function butir_tandan(Request $request)
    {
        $id = (int)$request->route('id'); 
        $tandan = Tandan::find($id);
        return view('tandan.butir', compact('tandan'));
    }   

    public function cipta_tandan(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $tandan = New Tandan;    

        $tandan->no_daftar = $request->no_daftar;
        $tandan->pokok_id = $request->pokok_id;
        
        $tandan->kitaran = $request->kitaran;
        $tandan->deskripsi_kitaran = $request->deskripsi_kitaran;
        $tandan->status_tandan = $request->status_tandan;
        $tandan->catatan = $request->catatan;
        $tandan->umur = $request->umur;

        $tandan->save();
        return back();
    }  

    public function buang_tandan(Request $request)
    {
        $tandan = Tandan::find($id);
        return view('tandan.butir', compact('tandan'));
    }  
    
    public function sah_buang_tandan(Request $request)
    {
        $tandan = Tandan::find($id);
        return view('tandan.butir', compact('tandan'));
    }      
         
}
