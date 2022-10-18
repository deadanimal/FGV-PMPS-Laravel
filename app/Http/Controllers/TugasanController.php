<?php

namespace App\Http\Controllers;

use DataTables;
use DateTime;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Tugasan;

class TugasanController extends Controller
{

    public function senarai_tugasan(Request $request)
    {    
        $user = $request->user();
        $user_id = $user->id;
        $tugasans = Tugasan::all();
        if($request->ajax()) {
            return Datatables::collection($tugasans)
            ->addIndexColumn() 
            ->addColumn('link', function (Tugasan $tugasan) {
                $url = '/tugasan/'.$tugasan->id;
                $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';
                return $html_button;
            })            
            ->rawColumns(['link'])               
            ->make(true);                  
        }        

        return view('tugasan.senarai', compact('tugasans'));
    } 

    public function satu_tugasan($id)
    {
        $tugasan = Tugasan::findOrFail($id);
        return view('tugasan.satu', compact('tugasan'));
    }   
    
    public function cipta_tugasan(Request $request)
    {        
        $user = $request->user();
        $user_id = $user->id;

        $tugasan = New Tugasan;

        $tugasan->no_tugasan = $request->no_tugasan;
        $tugasan->nama_tugasan = $request->nama_tugasan;
        $tugasan->assignee_id = $request->assignee_id;
        $tugasan->pengesah_id = $request->pengesah_id;
        $tugasan->tarikh_kerja_mula = $request->tarikh_kerja_mula;
        $tugasan->jenis = $request->jenis;

        $tugasan->assignee_id = $user_id;
        $tugasan->tandan_id = $request->tandan_id;
        $tugasan->save();        

        return back();
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
        
  
}
