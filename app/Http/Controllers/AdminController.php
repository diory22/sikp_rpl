<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminController extends Controller
{
    public function postlogin2 (Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('admin');
        }
        return redirect ('logindosen');
    }

    public function logout2 (Request $request){
        Auth::logout();
        return redirect('logindosen');
    }
    public function bimbingan()
    {
        $kp = DB::table('kp')->where('status', 'Diterima')->get();
        return view('admin.dafbimbingan',['kp' => $kp]);
    }
    public function setujian($id)
    {
        $kp = DB::table('kp')->where('id',$id)->first();
        //$dosen = DB::table('dosen')->get();
        return view('admin.setujian', compact('kp'));
    }
    public function setujianProses(Request $request, $id)
    {
        DB::table('kp')->where('id',$id)
        ->update([
            'status_ujian' => $request->status_ujian
        ]);
        return redirect('admin/dafbimbingan')->with('status', 'Set Pengajuan Ujian Berhasil!');

    }
    //public function prosessetujian(Request $request)
    //{
    //	DB::table('kp')->where('id', '=', $request->id)->update(['tgl_ujian' => $request->tgl_ujian]);
    //	return redirect('/admin/dafbimbingan');
    //}
    public function jadwal()
    {
        $kp = DB::table('kp')->where('status', 'Diterima')->get();
        return view('admin.jadwal',['kp' => $kp]);
    }
}
