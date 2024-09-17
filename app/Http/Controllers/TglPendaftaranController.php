<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class TglPendaftaranController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$tgl_pendaftaran = DB::table('tgl_pendaftaran')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tgl_pendaftaran',['tgl_pendaftaran' => $tgl_pendaftaran]);
 
    }

    public function add_tgl_pendaftaran()
    {
     
        // memanggil view tambah
        return view('add_tgl_pendaftaran');
     
    }

    public function proses_tgl_pendaftaran(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tgl_pendaftaran')->insert([
            'dari_tgl' => $request->dari_tgl,
            'sampai_tgl' => $request->sampai_tgl
        ]);
    
        Session::flash('message', 'Tanggal Pendaftaran Berhasil diinput');
        // alihkan halaman ke halaman pegawai
        return redirect('/add_tgl_pendaftaran');
     
    }

    public function edit_tgl_pendaftaran($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $lihat_tgl_pendaftaran = DB::table('tgl_pendaftaran')->where('id_tgl_pendaftaran',$id)->get();
   
   

    // passing data pegawai yang didapat ke view edit.blade.php

    return view('edit_tgl_pendaftaran',compact('lihat_tgl_pendaftaran'));
  
   
}
public function prosesedit_tgl_pendaftaran(Request $request)
{
	// update data pegawai
	DB::table('tgl_pendaftaran')->where('id_tgl_pendaftaran',$request->id_tgl_pendaftaran)->update([
		'dari_tgl' => $request->dari_tgl,
		'sampai_tgl' => $request->sampai_tgl
	]);
	// alihkan halaman ke halaman pegawai
    Session::flash('message', 'Tanggal pendaftaran Berhasil diedit');
	// alihkan halaman ke halaman pegawai
	return redirect('/tgl_pendaftaran');
}

public function delete_tgl_pendaftaran($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('tgl_pendaftaran')->where('id_tgl_pendaftaran',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	Session::flash('message', 'Tanggal pendaftaran Berhasil dihapus');
	// alihkan halaman ke halaman pegawai
	return redirect('/tgl_pendaftaran');
}

}
