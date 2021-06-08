<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DosenController extends Controller
{
        public function postlogin1 (Request $request){
            //dd($request->all());
            if (Auth::attempt($request->only('email','password'))){
                return redirect('dosen');
            }
            return redirect ('loginkoor');
        }
    
        public function logout1 (Request $request){
            Auth::logout();
            return redirect('loginkoor');
        }
    
    
    public function tampil()
    {
        $sk= DB::table('suratketerangan')->where('status', 'Belum diverifikasi')->get();

        //return $suratketerangan;
        return view('dosen.tampil',['sk' => $sk]);
    }
    public function verifikasi($id)
    {
        $sk = DB::table('suratketerangan')->where('id',$id)->first();
        //$dosen = DB::table('dosen')->get();
        return view('dosen.verifikasisk', compact('sk'));
    }
    public function verifikasiProses(Request $request, $id)
    {
        DB::table('suratketerangan')->where('id',$id)
        ->update([
            'status' => $request->status
        ]);
        return redirect('dosen/suratketerangan')->with('status', 'Verifikasi Berhasil!');

    }
    public function tampilprakp()
    {
        $prakp = DB::table('prakp')->where('status', 'Belum diverifikasi')->get();
        return view('dosen.tampilprakp',['prakp' => $prakp]);
    }
    public function verifikasiprakp($id)
    {
        $prakp = DB::table('prakp')->where('id',$id)->first();
        //$dosen = DB::table('dosen')->get();
        return view('dosen.verifikasiprakp', compact('prakp'));
    }
    public function verifprakpProses(Request $request, $id)
    {
        DB::table('prakp')->where('id',$id)
        ->update([
            'status' => $request->status
        ]);
        return redirect('dosen/prakp')->with('status', 'Verifikasi Berhasil!');

    }
    public function tampilkp()
    {
        $kp = DB::table('kp')->where('status', 'Belum diverifikasi')->get();
        return view('dosen.tampilkp',['kp' => $kp]);
    }
    public function verifikasikp($id)
    {
        $kp = DB::table('kp')->where('id',$id)->first();
        //$dosen = DB::table('dosen')->get();
        return view('dosen.verifikasikp', compact('kp'));
    }
    public function verifkpProses(Request $request, $id)
    {
        DB::table('kp')->where('id',$id)
        ->update([
            'status' => $request->status
        ]);
        return redirect('dosen/kp')->with('status', 'Verifikasi Berhasil!');

    }
    
    public function jadwal()
    {
        $kp = DB::table('kp')->where('status_ujian', 'Diterima')->get();
    	//$dosen = DB::table('dosen')->get();
    	return view('dosen.jadwal', ['kp' => $kp]); //'dosen' => $dosen]);
    }
    
    public function setjadwal($id)
    {
        $kp = DB::table('kp')->where('id',$id)->first();
        $dosen = DB::table('dosen')->get();
        return view('dosen.setjadwal', compact('kp'));
    }
    public function setProses(Request $request, $id)
    {
        DB::table('kp')->where('id',$id)
        ->update([
            'nim' => $request->nim,
            'tahun' => $request->tahun,
            'judul' => $request->judul,
            'dospem' => $request->dospem,
            'penguji' => $request->penguji,
            'ruang' => $request->ruang,
            'tgl_ujian' => $request->tgl_ujian
        ]);
        return redirect('dosen/ujian')->with('status', 'Set Jadwal Berhasil !');

    }
    public function bataskp()
    {
        $kp = DB::table('kp')->where('status', 'Diterima')->get();
    	//$dosen = DB::table('dosen')->get();
    	return view('dosen.bataskp', ['kp' => $kp]); //'dosen' => $dosen]);
    }
    public function prosesbataskp(Request $request)
    {
    	$get_batas = DB::table('kp')->where('id', '=', $request->id)->count();
    	if ($get_batas > 0) {
    		DB::table('kp')->where('id', '=', $request->id)->update(['tgl_mulai' => $request->tgl_mulai, 'tgl_batas' => $request->tgl_batas]);
    	}else{
    		DB::table('kp')->insert([
                'tgl_mulai' => $request->tgl_mulai,
    			'tgl_batas' => $request->tgl_batas,
    			'id' => $request->id
    		]);
    	}
    	
    	return redirect('/dosen/batas');
    }
    public function regiskp()
    {
    	$kp = DB::table('kp')->where('status', 'Diterima')->get();
    	return view('dosen.regis', ['kp' => $kp]);
    }
    
}
