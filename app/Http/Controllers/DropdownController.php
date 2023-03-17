<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{
    public function getNegeri(Request $request) {
        $negeri = DB::table('dd_negeri')->where($request->all())->get();
        return response()->json($negeri);
    }

    public function getParlimen(Request $request) {
        $parlimen = DB::table('dd_parlimen')->where($request->all())->get();
        return response()->json($parlimen);
    }

    public function getDun(Request $request) {
        $dun = DB::table('dd_dun')->where($request->all())->get();
        return response()->json($dun);
    }

    public function getDaerah(Request $request) {
        $daerah = DB::table('dd_daerah')->where($request->all())->get();
        return response()->json($daerah);
    }

    public function getMukim(Request $request) {
        $mukim = DB::table('dd_mukim')->where($request->all())->get();
        return response()->json($mukim);
    }

    public function getStatusPerkahwinan(Request $request) {
        $statusperkahwinan = DB::table('dd_status_perkahwinan')->where($request->all())->get();
        return response()->json($statusperkahwinan);
    }

    public function getStatusPendidikan(Request $request) {
        $statuspendidikan = DB::table('dd_status_pendidikan')->where($request->all())->get();
        return response()->json($statuspendidikan);
    }

    public function getStatusKediaman(Request $request) {
        $statuskediaman = DB::table('dd_status_kediaman')->where($request->all())->get();
        return response()->json($statuskediaman);
    }

    public function getStatusPekerjaan(Request $request) {
        $statuspekerjaan = DB::table('dd_status_pekerjaan')->where($request->all())->get();
        return response()->json($statuspekerjaan);
    }


}
