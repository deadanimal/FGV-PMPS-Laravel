<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Pelbagai;
use App\Models\User;


class PelbagaiController extends Controller
{

    public function view_dashboard()
    {
        return view('dashboard');
    }      
    
    public function view_users()
    {
        return view('users');
    }  
    
    public function view_audits()
    {
        return view('audits');
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
