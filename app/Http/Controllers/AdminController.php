<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function bimbingan()
    {
        $kp = DB::table('kp')->where('status', '=', '1')->get();
        return view('admin.dafbimbingan',['kp' => $kp]);
    }
    public function jadwal()
    {
        $kp = DB::table('kp')->where('status', '=', '1')->get();
        return view('admin.jadwal',['kp' => $kp]);
    }
}
