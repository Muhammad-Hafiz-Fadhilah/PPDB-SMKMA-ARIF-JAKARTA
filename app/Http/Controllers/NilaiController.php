<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NilaiController extends Controller
{
    //

    public function isinilai($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $cek_nilai = DB::table('nilai_ujian')->where('no_pendaftaran',$id)->get();
        $lihat_nilai_siswa = DB::table('nilai')->where('no_pendaftaran',$id)->get();

        $no_pendaftaran = $id;
     

        // passing data pegawai yang didapat ke view edit.blade.php

        return view('isinilai',['no_pendaftaran' => $no_pendaftaran],compact('cek_nilai','lihat_nilai_siswa'));
      
       
    }

    

    public function postnilai(Request $request) 
{

    
    DB::table('nilai_ujian')->insert([
		'no_pendaftaran' => $request->no_pendaftaran,
		'nilai_ujian_wawancara' => $request->nilai_ujian_wawancara,
		'nilai_ujian_tertulis' => $request->nilai_ujian_tertulis,
		
	]);

    return redirect('/isinilai/'.$request->no_pendaftaran);
}

public function update(Request $request)
{
	// update data pegawai
    DB::table('nilai_ujian')->where('no_pendaftaran',$request->no_pendaftaran)->update([
		'nilai_ujian_wawancara' => $request->nilai_ujian_wawancara,
		'nilai_ujian_tertulis' => $request->nilai_ujian_tertulis,
		
	]);

    Session::flash('message', 'Nilai Ujian Berhasil Diedit');

	// alihkan halaman ke halaman pegawai
	return redirect('/isinilai/'.$request->no_pendaftaran);
}

}
