<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TglPengumumanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$tgl_pengumuman = DB::table('tgl_pengumuman')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tgl_pengumuman',['tgl_pengumuman' => $tgl_pengumuman]);
 
    }

    public function add_tgl_pengumuman()
    {
     
        // memanggil view tambah
        return view('add_tgl_pengumuman');
     
    }

    public function proses_tgl_pengumuman(Request $request)
{
	// insert data ke table pegawai
	DB::table('tgl_pengumuman')->insert([
		'dari_tgl' => $request->dari_tgl,
		'sampai_tgl' => $request->sampai_tgl
	]);

    Session::flash('message', 'Tanggal Pengumuman Berhasil diinput');
	// alihkan halaman ke halaman pegawai
	return redirect('/add_tgl_pengumuman');
 
}


public function edit_tgl_pengumuman($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $lihat_tgl_pengumuman = DB::table('tgl_pengumuman')->where('id_tgl_pengumuman',$id)->get();
   
   

    // passing data pegawai yang didapat ke view edit.blade.php

    return view('edit_tgl_pengumuman',compact('lihat_tgl_pengumuman'));
  
   
}

public function prosesedit_tgl_pengumuman(Request $request)
{
	// update data pegawai
	DB::table('tgl_pengumuman')->where('id_tgl_pengumuman',$request->id_tgl_pengumuman)->update([
		'dari_tgl' => $request->dari_tgl,
		'sampai_tgl' => $request->sampai_tgl
	]);
	// alihkan halaman ke halaman pegawai
    Session::flash('message', 'Tanggal Pengumuman Berhasil diedit');
	// alihkan halaman ke halaman pegawai
	return redirect('/tgl_pengumuman');
}

public function delete_tgl_pengumuman($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('tgl_pengumuman')->where('id_tgl_pengumuman',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	Session::flash('message', 'Tanggal Pengumuman Berhasil dihapus');
	// alihkan halaman ke halaman pegawai
	return redirect('/tgl_pengumuman');
}

}
