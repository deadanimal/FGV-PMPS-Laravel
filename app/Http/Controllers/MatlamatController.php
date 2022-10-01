<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMatlamatRequest;
use App\Http\Requests\UpdateMatlamatRequest;
use App\Models\Matlamat;

class MatlamatController extends Controller
{

    public function senarai_matlamat(Request $request)
    {
        $matlamats = matlamat::all();
        return view('matlamat.senarai', compact('matlamats'));
    }

    public function butir_matlamat($id)
    {
        $matlamat = matlamat::find($id);
        return view('matlamat.butir', compact('matlamat'));
    }   

    public function cipta_matlamat(Request $request)
    {
        $user_id = $request->user()->id;

        $matlamat = New matlamat;

        $matlamat->proses = $request->proses;
        $matlamat->tahun = $request->tahun;
        $matlamat->matlamat_tahunan = $request->matlamat_tahunan;
        $matlamat->bulan = $request->bulan;
        $matlamat->matlamat_bulanan = $request->matlamat_bulanan;
                
        // $table->foreignId('tugasan_id'

        $matlamat->save();
        $url = '/matlamat/'.$matlamat->id;
        return Redirect($url);
    }  
    
    public function ubah_matlamat($id, Request $request)
    {
        $user_id = $request->user()->id;

        $matlamat = Matlamat::find($id);
        
        $matlamat->proses = $request->proses;
        $matlamat->tahun = $request->tahun;
        $matlamat->matlamat_tahunan = $request->matlamat_tahunan;
        $matlamat->bulan = $request->bulan;
        $matlamat->matlamat_bulanan = $request->matlamat_bulanan;

        $matlamat->save();        
        return view('matlamat.butir', compact('matlamat'));        
    }   

}
