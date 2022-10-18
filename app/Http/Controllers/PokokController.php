<?php

namespace App\Http\Controllers;

use DataTables;
use DateTime;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Pokok;
use App\Models\Tandan;

class PokokController extends Controller
{

    public function senarai_pokok(Request $request)
    {
        $pokoks = Pokok::where('aktif', true)->get();

        if($request->ajax()) {
            return Datatables::collection($pokoks)
            ->addIndexColumn() 
            ->addColumn('link', function (Pokok $pokok) {
                $url = '/pokok/'.$pokok->id;
                $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';
                return $html_button;
            })            
            ->rawColumns(['link'])               
            ->make(true);                  
        }

        return view('pokok.senarai', compact('pokoks'));
    }

    public function satu_pokok(Request $request)
    {
        $id = (int)$request->route('id'); 
        $pokok = Pokok::find($id);
        $tandans = Tandan::where('pokok_id', $pokok->id)->get();
        $url_qr = 'https://fgv-pmps.prototype.com.my/pokok/'.$pokok->id;
        return view('pokok.satu', compact('pokok', 'tandans', 'url_qr'));
    }   

    public function cipta_pokok(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $pokok = New Pokok;

        $pokok->no_pokok = $request->noPokok;
        $pokok->jantina = $request->jantina;
        $pokok->baka = $request->baka;
        $pokok->progeny = $request->progeny;
        $pokok->blok = $request->blok;
        $pokok->trial = $request->trial;
        $pokok->status_pokok = $request->statusPokok;
        $pokok->user_id = $user_id;

        $pokok->save();

        activity()
            ->performedOn($pokok)
            ->causedBy($user)
            ->log('Cipta pokok');               
        
        //Alert::success('Pokok dicipta', 'Pokok dicipta dengan berjaya');
        return back();
    }  
    
    public function kemaskini_pokok(Request $request) {

        $id = (int)$request->route('id'); 
        $pokok = Pokok::find($id);
        $user = $request->user();
        
        $pokok->no_pokok = $request->noPokok;
        $pokok->jantina = $request->jantina;
        $pokok->baka = $request->baka;
        $pokok->progeny = $request->progeny;
        $pokok->blok = $request->blok;
        $pokok->trial = $request->trial;
        $pokok->status_pokok = $request->statusPokok;

        $pokok->save();     
        
        activity()
            ->performedOn($pokok)
            ->causedBy($user)
            ->log('Kemaskini pokok');  

        return back();
    }     
    
    public function buang_pokok(Request $request) {

        $id = (int)$request->route('id'); 
        $pokok = Pokok::find($id);
        $user = $request->user(); 
        $pokok->aktif = false;
        $pokok->save();      
        
        activity()
            ->performedOn($pokok)
            ->causedBy($user)
            ->log('Buang pokok');  

        $url = '/pokok';
        return redirect($url);
    }          
   
}
