<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QualityControl;

class QualityControlController extends Controller
{
    public function senarai_qc(Request $request)
    {
        $qcs = QualityControl::all();
        return view('qc.senarai', compact('qcs'));
    }

    public function butir_qc($id)
    {
        $qc = QualityControl::find($id);
        return view('qc.butir', compact('qc'));
    }   

    public function cipta_qc(Request $request)
    {
        $user_id = $request->user()->id;

        $qc = New QualityControl;

        $qc->jenis = $request->jenis;
        $qc->no_qc = $request->no_qc;
        $qc->pokok_id = $request->pokok_id;
        $qc->tandan_id = $request->tandan_id;
        $qc->catatan_qc = $request->catatan_qc;

        $qc->status_bunga = $request->status_bunga;
        $qc->status_qc = $request->status_qc;
        $qc->jumlah_bagging = $request->jumlah_bagging;
        $qc->jumlah_bagging_lulus = $request->jumlah_bagging_lulus;
        $qc->jumlah_bagging_rosak = $request->jumlah_bagging_rosak;
        $qc->peratus_rosak = $request->peratus_rosak;
        
        $qc->tugasan_id = $request->tugasan_id;
                
        // $table->foreignId('tugasan_id'

        $qc->save();
        $url = '/qc/'.$qc->id;
        return Redirect($url);
    }  
    
    public function ubah_qc($id, Request $request)
    {
        $user_id = $request->user()->id;

        $qc = QualityControl::find($id);
        
        $qc->jenis = $request->jenis;
        $qc->no_qc = $request->no_qc;
        $qc->pokok_id = $request->pokok_id;
        $qc->tandan_id = $request->tandan_id;
        $qc->catatan_qc = $request->catatan_qc;

        $qc->status_bunga = $request->status_bunga;
        $qc->status_qc = $request->status_qc;
        $qc->jumlah_bagging = $request->jumlah_bagging;
        $qc->jumlah_bagging_lulus = $request->jumlah_bagging_lulus;
        $qc->jumlah_bagging_rosak = $request->jumlah_bagging_rosak;
        $qc->peratus_rosak = $request->peratus_rosak;
        
        $qc->tugasan_id = $request->tugasan_id;

        $qc->save();        
        return view('qc.butir', compact('qc'));        
    }   
}
