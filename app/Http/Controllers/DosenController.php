<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function tampil()
    {
        $sk= DB::table('suratketerangan')->where('status', '=', '0')->get();

        //return $suratketerangan;
        return view('dosen.tampil',['sk' => $sk]);
    }
    public function prosessetujuisk($id)
    {
    	DB::table('suratketerangan')->where('id', '=', $id)->update(['status' => 1]);
    	return redirect('dosen/suratketerangan');
    }
    public function prosesbatalsk($id)
    {
    	DB::table('suratketerangan')->where('id', '=', $id)->update(['status' => 0]);
    	return redirect('dosen/suratketerangan');
    }
    public function tampilprakp()
    {
        $prakp = DB::table('prakp')->where('status', '=', '0')->get();
        return view('dosen.tampilprakp',['prakp' => $prakp]);
    }
    public function prosessetujuiprakp($id)
    {
    	DB::table('prakp')->where('id', '=', $id)->update(['status' => 1]);
    	return redirect('dosen/prakp');
    }
    public function prosesbatalprakp($id)
    {
    	DB::table('prakp')->where('id', '=', $id)->update(['status' => 0]);
    	return redirect('dosen/prakp');
    }
    public function tampilkp()
    {
        $kp = DB::table('kp')->where('status', '=', '0')->get();
        return view('dosen.tampilkp',['kp' => $kp]);
    }
    public function prosessetujuikp($id)
    {
    	DB::table('kp')->where('id', '=', $id)->update(['status' => 1]);
    	return redirect('dosen/kp');
    }
    public function prosesbatalkp($id)
    {
    	DB::table('kp')->where('id', '=', $id)->update(['status' => 0]);
    	return redirect('dosen/kp');
    }
    public function jadwal()
    {
        $kp = DB::table('kp')->where('status', '=', '1')->get();
    	//$dosen = DB::table('dosen')->get();
    	return view('dosen.jadwal', ['kp' => $kp]); //'dosen' => $dosen]);
    }
    //public function setjadwal()
    //{
    //    return view('dosen.setjadwal');
    //}
    //public function setjadwalProses(Request $request, $id)
    //{
    //    DB::table('kp')->where('id',$id)
    //    ->update([
    //        'nim' => $request->nim,
    //        'tahun' => $request->tahun,
    //        'judul' => $request->judul,
    //        'status' => $request->status,
    //        'dospem' => $request->dospem,
    //        'penguji' => $request->penguji,
    //        'ruang' => $request->ruang,
    //        'tgl_ujian' => $request->tgl_ujian
    //    ]);
    //    return redirect('dosen/ujian')->with('status', 'Set Jadwal Ujian Berhasil!');

    //}
    public function setjadwal($id)
    {
        $kp = DB::table('kp')->where('id',$id)->first();
        return view('dosen.setjadwal', compact('kp'));
    }
    public function setProses(Request $request, $id)
    {
        DB::table('kp')->where('id',$id)
        ->update([
            'nim' => $request->nim,
            'tahun' => $request->tahun,
            'judul' => $request->judul,
            //'status' => $request->status,
            'dospem' => $request->dospem,
            'penguji' => $request->penguji,
            'ruang' => $request->ruang,
            'tgl_ujian' => $request->tgl_ujian
        ]);
        return redirect('dosen/ujian')->with('status', 'Set Jadwal Berhasil !');

    }
    public function bataskp()
    {
        $kp = DB::table('kp')->where('status', '=', '1')->get();
    	//$dosen = DB::table('dosen')->get();
    	return view('dosen.bataskp', ['kp' => $kp]); //'dosen' => $dosen]);
    }
    public function prosesbataskp(Request $request)
    {
    	$get_batas = DB::table('kp')->where('id', '=', $request->id)->count();
    	if ($get_batas > 0) {
    		DB::table('kp')->where('id', '=', $request->id)->update(['tgl_batas' => $request->tgl_batas]);
    	}else{
    		DB::table('kp')->insert([
    			'tgl_batas' => $request->tgl_batas,
    			'id' => $request->id
    		]);
    	}
    	
    	return redirect('/dosen/batas');
    }
    public function regiskp()
    {
    	$kp = DB::table('kp')->where('status', '=', '1')->get();
    	return view('dosen.regis', ['kp' => $kp]);
    }
}
