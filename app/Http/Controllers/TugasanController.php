<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugasan;

class TugasanController extends Controller
{

    public function senarai_tugasan(Request $request)
    {    
        $user_id = $request->user()->id;
        if($user->hasRole('worker')) {
            $tugasans = Tugasan::where('assignee_id', $user_id)->get();
        } else {
            $tugasans = Tugasan::where('assigner_id', $user_id)->get();
        }

        return view('tugasan.senarai', compact('tugasans'));
    } 

    public function butir_tugasan($id)
    {
        $tugasan = Tugasan::findOrFail($id);

        return view('tugasan.butir', compact('tugasan'));
    }   
    
    public function cipta_tugasan(Request $request)
    {
        $user_id = $request->user()->id;

        $validatedData = $request->validate([
            'fiat_amount' => ['required', 'gte:20.00', 'lte:50000.00'],
        ]);   

        $tugasan = New Tugasan;

        $tugasan->no_tugasan = $request->no_tugasan;
        $tugasan->nama_tugasan = $request->nama_tugasan;

        $tugasan->assigner_id = $user_id;
        
        $tugasan->tarikh_kerja_mula = $request->tarikh_kerja_mula;
        //$tugasan->tarikh_kerja_habis = $request->tarikh_kerja_habis;

        //$tugasan->siap_kerja = $request->siap_kerja;
        //$tugasan->catatan_siap_kerja = $request->catatan_siap_kerja;

        //$tugasan->sah = $request->sah;
        //$tugasan->pengesah_id = $request->pengesah_id;
        //$tugasan->catatan_pengesah = $request->catatan_pengesah;
        
        $tugasan->save();
        
        $url = '/tugasan/'.$tugasan->id;
        return Redirect($url);
    }    
    
    public function ubah_tugasan($id, Request $request)
    {
        $user_id = $request->user()->id;

        $tugasan = Tugasan::find($id);

        $tugasan->no_tugasan = $request->no_tugasan;
        $tugasan->nama_tugasan = $request->nama_tugasan;

        $tugasan->assignee_id = $request->assignee_id;
        $tugasan->assigner_id = $request->assigner_id;
        
        $tugasan->tarikh_kerja_mula = $request->tarikh_kerja_mula;
        $tugasan->tarikh_kerja_habis = $request->tarikh_kerja_habis;

        $tugasan->siap_kerja = $request->siap_kerja;
        $tugasan->catatan_siap_kerja = $request->catatan_siap_kerja;

        $tugasan->sah = $request->sah;
        $tugasan->pengesah_id = $request->pengesah_id;
        $tugasan->catatan_pengesah = $request->catatan_pengesah;
        
        $tugasan->save();

        $url = '/tugasan/'.$tugasan->id;
        return Redirect($url);        
    }     
    
    public function siap_tugasan(Request $request)
    {
        $user_id = $request->user()->id;
        $url = '/tugasan/'.$tugasan->id;
        return Redirect($url);        
    }      
    

    public function sah_tugasan(Request $request)
    {
        $user_id = $request->user()->id;
        $url = '/tugasan/'.$tugasan->id;
        return Redirect($url);        
    }    
}
