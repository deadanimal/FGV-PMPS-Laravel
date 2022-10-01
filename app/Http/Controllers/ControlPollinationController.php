<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ControlPollination;

class ControlPollinationController extends Controller
{

    public function senarai_control(Request $request)
    {
        $controls = ControlPollination::all();
        return view('control.senarai', compact('controls'));
    }

    public function butir_control($id)
    {
        $control = ControlPollination::find($id);
        return view('control.butir', compact('control'));
    }   

    public function cipta_control(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $control = New ControlPollination;

        $control->jenis = $request->jenis;
        $control->no_cp = $request->no_cp;
        $control->pokok_id = $request->pokok_id;
        $control->tandan_id = $request->tandan_id;
        $control->catatan_cp = $request->catatan_cp;

        $control->bil_pemeriksaan = $request->bil_pemeriksaan;
        $control->tambahan_hari = $request->tambahan_hari;
        $control->no_pollen = $request->no_pollen;
        $control->peratus_pollen = $request->peratus_pollen;
                
        // $table->foreignId('tugasan_id'

        $control->save();

        activity()
        ->causedBy($user)
        ->performedOn($control)
        ->log('Cipta');


        $url = '/control/'.$control->id;
        return Redirect($url);
    }  
    
    public function ubah_control($id, Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $control = ControlPollination::find($id);
        $control->jenis = $request->jenis;
        $control->no_cp = $request->no_cp;
        $control->pokok_id = $request->pokok_id;
        $control->tandan_id = $request->tandan_id;
        $control->catatan_cp = $request->catatan_cp;

        $control->bil_pemeriksaan = $request->bil_pemeriksaan;
        $control->tambahan_hari = $request->tambahan_hari;
        $control->no_pollen = $request->no_pollen;
        $control->peratus_pollen = $request->peratus_pollen;

        $control->save(); 
        
        activity()
        ->causedBy($user)
        ->performedOn($control)
        ->log('Ubah');

        return view('control.butir', compact('control'));        
    }    
          
}
