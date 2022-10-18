<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;

class GambarController extends Controller
{

    public function upload_gambar(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $path = $request->file('upload')->store('fgv-pmps/images');

        $gambar = New Gambar;

        $gambar->nama = $request->nama;
        $gambar->user_id = $request->user_id;
        $gambar->uploadable_id = $request->uploadable_id;
        $gambar->uploadable_type = $request->uploadable_type;   
        $gambar->jalan = $path;   
        $gambar->save();

        activity()
        ->causedBy($user)
        ->performedOn($gambar)
        ->log('Upload gambar');        

        return back();
    }  
}
