<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function tampil()
    {
        $suratketerangan = DB::table('suratketerangan')->get();

        //return $suratketerangan;
        return view('mahasiswa.tampil',['suratketerangan' => $suratketerangan]);
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }

    public function tambahProses(Request $request)
    {
        DB::table('suratketerangan')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'fax' => $request->fax
            //'dokumen' => $request->dokumen
        ]);
        return redirect('suratketerangan')->with('status', 'Berhasil ditambahkan!');

    }
    public function edit($id)
    {
        $suratketerangan = DB::table('suratketerangan')->where('id',$id)->first();
        return view('mahasiswa.edit', compact('suratketerangan'));
    }
    public function editProses(Request $request, $id)
    {
        DB::table('suratketerangan')->where('id',$id)
        ->update([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'fax' => $request->fax
        ]);
        return redirect('suratketerangan')->with('status', 'Berhasil diupdate!');

    }
    public function delete($id)
    {
        DB::table('suratketerangan')->where('id',$id)->delete();
        return redirect('suratketerangan')->with('status', 'Berhasil dihapus!');
    }

    //-------prakp-------//

    public function tampilprakp()
    {
        $prakp = DB::table('prakp')->get();

        return view('mahasiswa.tampilprakp',['prakp' => $prakp]);
    }

    public function tambahprakp()
    {
        return view('mahasiswa.tambahprakp');
    }

    public function tambahProsesprakp(Request $request)
    {
        DB::table('prakp')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'judul' => $request->judul,
            'tools' => $request->tools,
            'spesifikasi' => $request->spesifikasi,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'fax' => $request->fax
            //'dokumen' => $request->dokumen
        ]);
        return redirect('prakp')->with('status', 'Berhasil ditambahkan!');

    }
    public function editprakp($id)
    {
        $prakp = DB::table('prakp')->where('id',$id)->first();
        return view('mahasiswa.editprakp', compact('prakp'));
    }
    public function editProsesprakp(Request $request, $id)
    {
        DB::table('prakp')->where('id',$id)
        ->update([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'judul' => $request->judul,
            'tools' => $request->tools,
            'spesifikasi' => $request->spesifikasi,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'fax' => $request->fax
        ]);
        return redirect('prakp')->with('status', 'Berhasil diupdate!');

    }
    public function deleteprakp($id)
    {
        DB::table('prakp')->where('id',$id)->delete();
        return redirect('prakp')->with('status', 'Berhasil dihapus!');
    } 

    //---kp----//

    public function tampilkp()
    {
        $prakp = DB::table('kp')->get();

        return view('mahasiswa.tampilkp',['kp' => $kp]);
    }

    public function tambahkp()
    {
        return view('mahasiswa.tambahkp');
    }

    public function tambahProseskp(Request $request)
    {
        DB::table('kp')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'judul' => $request->judul,
            'tools' => $request->tools,
            'spesifikasi' => $request->spesifikasi,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'fax' => $request->fax
            //'dokumen' => $request->dokumen
        ]);
        return redirect('kp')->with('status', 'Berhasil ditambahkan!');

    }
    public function editkp($id)
    {
        $prakp = DB::table('kp')->where('id',$id)->first();
        return view('mahasiswa.editkp', compact('kp'));
    }
    public function editProseskp(Request $request, $id)
    {
        DB::table('kp')->where('id',$id)
        ->update([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'judul' => $request->judul,
            'tools' => $request->tools,
            'spesifikasi' => $request->spesifikasi,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'fax' => $request->fax
        ]);
        return redirect('kp')->with('status', 'Berhasil diupdate!');

    }
    public function deletekp($id)
    {
        DB::table('kp')->where('id',$id)->delete();
        return redirect('kp')->with('status', 'Berhasil dihapus!');
    } 
}
