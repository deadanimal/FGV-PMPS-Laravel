<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    public function dashboard() {
        return view('dashboard');
    }   
    
    public function profil() {
        return view('user.profil');
    }       
     
    public function senarai_user() {
        $users = User::all();
        return view('user.senarai', compact('users'));
    }    
    
    public function satu_user() {
        $id = (int)$request->route('id'); 
        $user = User::find($id);
        return view('user.satu', compact('user'));
    }        

    public function cipta_user()
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('PipelineForever'),
        ]); 
        $user->save();

        $role = Role::find($request->role_id);
        $user->attachRole($role);

        return back();
    }      
   
}
