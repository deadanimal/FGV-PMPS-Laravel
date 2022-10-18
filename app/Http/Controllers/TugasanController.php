<?php

namespace App\Http\Controllers;

use DataTables;
use DateTime;
use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Models\Tugasan;
use App\Models\Gambar;
use App\Models\BaggingData;

class TugasanController extends Controller
{

    public function senarai_tugasan(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;
        $tugasans = Tugasan::all();
        if ($request->ajax()) {
            return Datatables::collection($tugasans)
                ->addIndexColumn()
                ->addColumn('link', function (Tugasan $tugasan) {
                    $url = '/tugasan/' . $tugasan->id;
                    $html_button = '<a href="' . $url . '"><button class="btn btn-primary">Lihat</button></a>';
                    return $html_button;
                })
                ->rawColumns(['link'])
                ->make(true);
        }

        return view('tugasan.senarai', compact('tugasans'));
    }

    public function satu_tugasan($id)
    {
        $tugasan = Tugasan::findOrFail($id);
        return view('tugasan.satu', compact('tugasan'));
    }

    public function cipta_tugasan(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $tugasan = new Tugasan;

        $tugasan->no_tugasan = $request->no_tugasan;
        $tugasan->nama_tugasan = $request->nama_tugasan;
        $tugasan->assignee_id = $request->assignee_id;
        $tugasan->pengesah_id = $request->pengesah_id;
        $tugasan->tarikh_kerja_mula = $request->tarikh_kerja_mula;
        $tugasan->jenis = $request->jenis;

        $tugasan->assignee_id = $user_id;
        $tugasan->tandan_id = $request->tandan_id;
        $tugasan->save();

        return back();
    }

    public function ubah_tugasan($id, Request $request)
    {
        $user_id = $request->user()->id;

        $tugasan = Tugasan::find($id);

        $tugasan->no_tugasan = $request->no_tugasan;
        $tugasan->nama_tugasan = $request->nama_tugasan;

        $tugasan->assignee_id = $request->assignee_id;
        $tugasan->assigner_id = $request->assigner_id;

        $tugasan->tarikh_kerja_mula = $request->tarikh_kerja_mula;
        $tugasan->tarikh_kerja_habis = $request->tarikh_kerja_habis;

        $tugasan->siap_kerja = $request->siap_kerja;
        $tugasan->catatan_siap_kerja = $request->catatan_siap_kerja;

        $tugasan->sah = $request->sah;
        $tugasan->pengesah_id = $request->pengesah_id;
        $tugasan->catatan_pengesah = $request->catatan_pengesah;

        $tugasan->save();

        $url = '/tugasan/' . $tugasan->id;
        return Redirect($url);
    }

    public function siap_tugasan(Request $request)
    {
        $id = (int)$request->route('id');
        $tugasan = Tugasan::find($id);
        $user = $request->user();

        if($tugasan->jenis) {

            $bagging = New BaggingData;

            $bagging->no_bagging = $request->no_bagging;
            $bagging->pokok_id = $tugasan->tandan->pokok->id;
            $bagging->tandan_id = $tugasan->tandan->id;
            $bagging->catatan_bagging = $request->catatan_bagging;
            $bagging->tugasan_id = $tugasan->id;

            $bagging->save();   

            $path = $request->file('upload')->store('fgv-pmps/images');

            $gambar = New Gambar;
    
            $gambar->nama = 'bagging';
            $gambar->user_id = $user->id;
            $gambar->uploadable_id = $bagging->id;
            $gambar->uploadable_type = 'App\Models\BaggingData';
            $gambar->jalan = $path;   
            $gambar->save();            
                           
        }  

        $tugasan->tarikh_kerja_habis = now();
        $tugasan->siap_kerja = true;
        $tugasan->save();

        return back();
    }

    public function sah_tugasan(Request $request)
    {
        $id = (int)$request->route('id');
        $tugasan = Tugasan::find($id);
        $user = $request->user();

        $tugasan->catatan_pengesah = $request->catatan;
        $tugasan->sah = true;
        $tugasan->save();

        return back();
    }    
}
