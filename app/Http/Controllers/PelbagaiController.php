<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelbagai;
use App\Models\User;


class PelbagaiController extends Controller
{

    public function view_dashboard()
    {
        return view('dashboard');
    }   
    
    public function view_landing()
    {
        return view('landing');
    }       
    
    public function view_profile()
    {
        return view('profile');
    }  
    
    public function view_trail()
    {
        return view('trail');
    }    

    public function view_reports()
    {
        return view('reports');
    }   

    public function register()
    {
        //
    }    
    
    public function sign_in()
    {
        //
    }      

    public function change_password()
    {
        //
    }      
    
    public function reset_password()
    {
        //
    }   
    
    public function update_profile()
    {
        //
    }    
}
