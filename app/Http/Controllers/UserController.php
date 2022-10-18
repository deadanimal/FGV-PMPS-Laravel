<?php

namespace App\Http\Controllers;

use DataTables;
use DateTime;
use Carbon\Carbon;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Spatie\Activitylog\Models\Activity;

use App\Models\User;
use App\Models\Role;


class UserController extends Controller
{

    public function dashboard() {
        return view('dashboard');
    }   
    
    public function profil(Request $request) {
        $id = $request->user()->id;
        $user = User::find($id);
        return view('user.profil', compact('user'));
    }       
     
    public function senarai_user(Request $request) {
        
        $users = User::all();

        if($request->ajax()) {
            return Datatables::collection($users)
            ->addIndexColumn() 
            ->addColumn('link', function (User $user) {
                $url = '/user/'.$user->id;
                $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';
                return $html_button;
            })  
            ->addColumn('peranan', function (User $user) {
                $html_ayat = '';
                foreach ($user->roles as $role) {
                    $html_ayat = $html_ayat.$role->display_name.' ';
                }                
                return $html_ayat;
            })                                  
            ->rawColumns(['link','peranan'])               
            ->make(true);                  
        }       
        $roles = Role::all(); 
        return view('user.senarai', compact('users', 'roles'));
    }    
    
    public function satu_user(Request $request) {
        $id = (int)$request->route('id'); 
        $user = User::find($id);
        $activities = Activity::where('causer_id', $id)->get();
        return view('user.satu', compact('user','activities'));
    }        

    public function cipta_user(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('PipelineForever'),
        ]); 
        $user->no_kakitangan = $request->noKakitangan;
        $user->save();

        $role = Role::find($request->role_id);
        $user->attachRole($role);

        return back();
    }  
    
    public function kemaskini_katalaluan(Request $request) {

        $id = $request->user()->id;
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();

        activity()
            ->performedOn($user)
            ->causedBy($user)
            ->log('Ubah katalaluan');        


        return back();
    }     
    
    public function kemaskini_user(Request $request)
    {
        $id = (int)$request->route('id'); 
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_kakitangan = $request->noKakitangan;
        $user->save();

        activity()
            ->performedOn($user)
            ->causedBy($request->user())
            ->log('Kemaskini user lain');         

        return back();
    }    
    
    public function kemaskini_katalaluan_user(Request $request)
    {
        $id = (int)$request->route('id'); 
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();

        return back();
    }      
   
}
