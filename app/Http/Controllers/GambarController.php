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

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        $image_name = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $image_name);

        $gambar = New Gambar;

        $gambar->nama = $request->nama;
        $gambar->user_id = $request->user_id;
        $gambar->uploadable_id = $request->uploadable_id;
        $gambar->uploadable_type = $request->uploadable_type;   
        $gambar->jalan = $image_name;   
        $gambar->save();

        activity()
        ->causedBy($user)
        ->performedOn($gambar)
        ->log('Ubah');        

        return back()
            ->with('success','You have successfully upload image.');
    }  
}
