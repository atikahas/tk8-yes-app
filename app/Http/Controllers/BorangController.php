<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Models\BorangMaklumat;
use App\Models\BorangMaklumatKeluarga;
use App\Models\BorangMaklumatLampiran;
use App\Models\DDstatusperkahwinan;
use App\Models\DDstatuspendidikan;
use App\Models\DDstatuskediaman;
use App\Models\DDstatuspekerjaan;
use App\Models\DDstatusoku;

class BorangController extends Controller
{
    public function index()
    {
        $borang = BorangMaklumat::all();

        return view('borang.index', compact('borang'));
    }
    
    public function create()
    {
        $statusperkahwinan = DB::table('dd_status_perkahwinan')->pluck('statusperkahwinan');
        $statuspendidikan = DB::table('dd_status_pendidikan')->pluck('statuspendidikan');
        $statuskediaman = DB::table('dd_status_kediaman')->pluck('statuskediaman');
        $statuspekerjaan = DB::table('dd_status_pekerjaan')->pluck('statuspekerjaan');

        return view('borang.create', compact('statusperkahwinan','statuspendidikan','statuskediaman','statuspekerjaan'));
    }

    public function store(Request $request)
    {
        try {
            // dd($data = $request->all());

            $data = $request->all();
            $data['borang_status'] = 'PENDING';
            $data['created_by'] = Auth::user()->id;

            $borang = BorangMaklumat::create($data);

            //Create vvip list
            if($request->has('keluarga')) {
                foreach($request->input('keluarga') as $keluarga) {
                    $keluarga['borangid'] = $borang->id;
                    $keluarga['created_by'] = Auth::user()->id;
                    BorangMaklumatKeluarga::create($keluarga);
                }
            }

            return redirect('borang/create')->with('success', 'Borang telah dihantar.');

        } catch(\Exception $e) {
            dd($e);
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function show(BorangMaklumat $borang)
    {
        $borangkeluarga = BorangMaklumatKeluarga::all();
        $statusperkahwinan = DDstatusperkahwinan::all();
        $statuspendidikan = DDstatuspendidikan::all();
        $statuskediaman = DDstatuskediaman::all();
        $statuspekerjaan = DDstatuspekerjaan::all();
        $statusoku = DDstatusoku::all();

        return view('borang.show', compact('borang','borangkeluarga','statusperkahwinan','statuspendidikan','statuskediaman','statuspekerjaan','statusoku'));
    }

    public function edit(BorangMaklumat $borang)
    {
        $borangkeluarga = BorangMaklumatKeluarga::all();
        $statusperkahwinan = DDstatusperkahwinan::all();
        $statuspendidikan = DDstatuspendidikan::all();
        $statuskediaman = DDstatuskediaman::all();
        $statuspekerjaan = DDstatuspekerjaan::all();
        $statusoku = DDstatusoku::all();

        return view('borang.edit', compact('borang','borangkeluarga','statusperkahwinan','statuspendidikan','statuskediaman','statuspekerjaan','statusoku'));
    }
}
