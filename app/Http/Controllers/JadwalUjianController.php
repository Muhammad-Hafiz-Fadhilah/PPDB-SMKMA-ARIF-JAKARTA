<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class JadwalUjianController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$jadwal_ujian = DB::table('jadwal_ujian')->get();
 
    	// mengirim data pegawai ke view index
    	return view('jadwal_ujian',['jadwal_ujian' => $jadwal_ujian]);
 
    }

    public function add_jadwal_ujian()
    {
     
        // memanggil view tambah
        return view('add_jadwal_ujian');
     
    }


    public function proses_jadwal_ujian(Request $request)
    {
        // insert data ke table pegawai
        DB::table('jadwal_ujian')->insert([
            'ruang' => $request->ruang,
            'jam_ujian_wawancara' => $request->jam_ujian_wawancara,
            'jam_ujian_tertulis' => $request->jam_ujian_tertulis,
            'tgl_ujian' => $request->tgl_ujian
        ]);
    
        Session::flash('message', 'Jadwal Ujian Berhasil diinput');
        // alihkan halaman ke halaman pegawai
        return redirect('/add_jadwal_ujian');
     
    }


    public function edit_jadwal_ujian($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $lihat_jadwal_ujian = DB::table('jadwal_ujian')->where('id_jadwal_ujian',$id)->get();
       
       
    
        // passing data pegawai yang didapat ke view edit.blade.php
    
        return view('edit_jadwal_ujian',compact('lihat_jadwal_ujian'));
      
       
    }

    public function prosesedit_jadwal_ujian(Request $request)
{
	// update data pegawai
	DB::table('jadwal_ujian')->where('id_jadwal_ujian',$request->id_jadwal_ujian)->update([
		'ruang' => $request->ruang,
        'jam_ujian_wawancara' => $request->jam_ujian_wawancara,
		'jam_ujian_tertulis' => $request->jam_ujian_tertulis,
        'tgl_ujian' => $request->tgl_ujian

	]);
	// alihkan halaman ke halaman pegawai
    Session::flash('message', 'Jadwal Ujian Berhasil diedit');
	// alihkan halaman ke halaman pegawai
	return redirect('/jadwal_ujian');
}

public function delete_jadwal_ujian($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('jadwal_ujian')->where('id_jadwal_ujian',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	Session::flash('message', 'Jadwal Ujian Berhasil dihapus');
	// alihkan halaman ke halaman pegawai
	return redirect('/jadwal_ujian');
}

}
