<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PembayaranController extends Controller
{
    public function pembayaran($id)
{

    $cek_pembayaran = DB::table('pembayaran')->where('no_pendaftaran',$id)->get();
 
	// memanggil view tambah
	return view('pembayaran',compact('cek_pembayaran'));
    return view('pembayaran',['bukti' => $bukti]);
}




public function upload_pembayaran(Request $request){
    $this->validate($request, [
        'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        
    ]);

    // menyimpan data file yang diupload ke variabel $file
    $file = $request->file('file');

    $nama_file = time()."_".$file->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'data_file';
    $file->move($tujuan_upload,$nama_file);

    Pembayaran::create([
        'file' => $nama_file,
        'no_pendaftaran' => $request->no_pendaftaran,
    ]);


    DB::table('calon_siswa')->where('no_pendaftaran',$request->no_pendaftaran)->update([
		'status' => $request->status
	]);

    Session::flash('message', 'Bukti Pembayaran Anda Berhasil Diupload');
  


    return redirect('/pembayaran/'.$request->no_pendaftaran);
  
}


}
