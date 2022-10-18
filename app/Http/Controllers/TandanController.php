<?php

namespace App\Http\Controllers;

use DataTables;
use DateTime;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Tandan;

class TandanController extends Controller
{


    public function senarai_tandan(Request $request)
    {
        $tandans = Tandan::where('aktif', true)->get();
        if($request->ajax()) {
            return Datatables::collection($tandans)
            ->addIndexColumn() 
            ->addColumn('no_pokok', function (Tandan $tandan) {                
                $html_statement = $tandan->pokok->no_pokok;
                return $html_statement;
            })               
            ->addColumn('link', function (Tandan $tandan) {
                $url = '/pokok/'.$tandan->pokok->id.'/tandan/'.$tandan->id;
                $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';
                return $html_button;
            })            
            ->rawColumns(['link'])               
            ->make(true);                  
        }        
        return view('tandan.senarai', compact('tandans'));
    }
    
    
    public function senarai_tandan_di_pokok(Request $request)
    {
        $id = (int)$request->route('id'); 
        $tandans = Tandan::where([
            ['pokok_id', '=', $id],
            ['aktif', '=', true],
        ])->get();
        // if($request->ajax()) {
            return Datatables::collection($tandans)
            ->addIndexColumn() 
            ->addColumn('link', function (Tandan $tandan) {
                $url = '/pokok/'.$tandan->pokok->id.'/tandan/'.$tandan->id;
                $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';
                return $html_button;
            })            
            ->rawColumns(['link'])               
            ->make(true);                  
        // }        
        // return view('tandan.senarai', compact('tandans'));
    }

    public function satu_tandan(Request $request)
    {
        $id = (int)$request->route('tandan_id'); 
        $tandan = Tandan::find($id);
        return view('tandan.satu', compact('tandan'));
    }   

    public function cipta_tandan(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $tandan = New Tandan;    

        $tandan->no_daftar = $request->noDaftar;
        $tandan->pokok_id = $request->pokok_id;
        
        $tandan->kitaran = $request->kitaran;
        $tandan->deskripsi_kitaran = $request->deskripsiKitaran;
        $tandan->status_tandan = $request->statusTandan;
        $tandan->catatan = $request->catatan;
        $tandan->umur = $request->umur;

        $tandan->save();

        activity()
            ->performedOn($tandan)
            ->causedBy($user)
            ->log('Cipta tandan'); 

        return back();
    }    
    
    public function kemaskini_tandan(Request $request)
    {
        $id = (int)$request->route('tandan_id'); 
        $user = $request->user();
        $user_id = $user->id;

        $tandan = Tandan::find($id);    

        $tandan->no_daftar = $request->noDaftar;
        $tandan->kitaran = $request->kitaran;
        $tandan->deskripsi_kitaran = $request->deskripsiKitaran;
        $tandan->status_tandan = $request->statusTandan;
        $tandan->catatan = $request->catatan;
        $tandan->umur = $request->umur;

        $tandan->save();

        activity()
            ->performedOn($tandan)
            ->causedBy($user)
            ->log('Kemaskini tandan'); 

        return back();
    }       

    public function buang_tandan(Request $request)
    {
        $id = (int)$request->route('tandan_id'); 
        $tandan = Tandan::find($id);
        $tandan->aktif = false;
        $tandan->save();
        $url = '/tandan';
        return redirect($url);
    }  

    public function buang_tandan_qr(Request $request)
    {
        $id = (int)$request->route('tandan_id'); 
        $tandan = Tandan::find($id);        
        return view('tandan.buang_qr', compact('tandan'));
    }      
         
         
}
