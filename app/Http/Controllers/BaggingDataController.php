<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaggingData;
use App\Models\Gambar;

class BaggingDataController extends Controller
{
    public function senarai_bagging(Request $request)
    {
        $baggings = BaggingData::all();
        return view('bagging.senarai', compact('baggings'));
    }

    public function butir_bagging($id)
    {
        $bagging = BaggingData::find($id);
        return view('bagging.butir', compact('bagging'));
    }   

    public function cipta_bagging(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $bagging = New bagging;

        $bagging->jenis = $request->jenis;
        $bagging->no_bagging = $request->no_bagging;
        $bagging->pokok_id = $request->pokok_id;
        $bagging->tandan_id = $request->tandan_id;
        $bagging->catatan_bagging = $request->catatan_bagging;

        $bagging->save();

        activity()
        ->causedBy($user)
        ->performedOn($bagging)
        ->log('Cipta');
                
        $url = '/bagging/'.$bagging->id;
        return Redirect($url);
    }  
    
    public function ubah_bagging($id, Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $bagging = BaggingData::find($id);
        $bagging->jenis = $request->jenis;
        $bagging->no_bagging = $request->no_bagging;
        $bagging->pokok_id = $request->pokok_id;
        $bagging->tandan_id = $request->tandan_id;
        $bagging->catatan_bagging = $request->catatan_bagging;
        $bagging->tugasan_id = $request->tugasan_id;

        $bagging->save();  
        
        activity()
        ->causedBy($user)
        ->performedOn($bagging)
        ->log('Ubah');

        return view('bagging.butir', compact('bagging'));        
    }    
        


}
