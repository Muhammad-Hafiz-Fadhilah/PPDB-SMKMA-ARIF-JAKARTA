<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\EmailKonfirmasi;
use Illuminate\Support\Facades\Mail;
Use PDF;
class CalonSiswaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$calon_siswa = DB::table('calon_siswa')->where('status','=', 3)->get();
 
    	// mengirim data pegawai ke view index
    	return view('calonsiswa',['calon_siswa' => $calon_siswa]);
 
    }

    public function sendEmail()
{
  $email = CalonSiswa::find($id)->email;
  Mail::to($email)->send(new ThankyouMail());
  return back();
}

    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $calon_siswa = DB::table('calon_siswa')
        ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
       
        ->where('calon_siswa.no_pendaftaran',$id)
        ->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('detail',['calon_siswa' => $calon_siswa]);
     
    }

    public function konfirmasi($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $calon_siswa = DB::table('pembayaran')->where('no_pendaftaran',$id)->get();
        $ruangujiansatu = DB::table('jadwal_ujian')
        ->where('ruang','MPLB')
        ->get();
        $ruangujiandua = DB::table('jadwal_ujian')
        ->where('ruang','DKV')
        ->get();
        $jumlah = DB::table('ruang')
        ->select(DB::raw('count(*) as jumlah'))    
        ->get(); 

        return view('konfirmasi',compact('calon_siswa','ruangujiansatu','ruangujiandua','jumlah'));

     
    }

    public function cetak($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $calon_siswa = DB::table('calon_siswa')->where('no_pendaftaran',$id)->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('cetak',['calon_siswa' => $calon_siswa]);


     
    }

    public function cetak_pdf($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
       

        $calon_siswa = DB::table('calon_siswa')
        ->join('ruang', 'ruang.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->join('jadwal_ujian', 'jadwal_ujian.id_jadwal_ujian', '=', 'ruang.id_jadwal_ujian')
       
        ->select('calon_siswa.no_pendaftaran','calon_siswa.nama_calon_siswa','calon_siswa.nisn','jadwal_ujian.ruang','jadwal_ujian.jam_ujian_tertulis','jadwal_ujian.jam_ujian_wawancara','jadwal_ujian.tgl_ujian')
        ->where('calon_siswa.no_pendaftaran',$id)
        ->get();

        $pdf = PDF::loadview('cetak_pdf',['calon_siswa'=>$calon_siswa]);
     

        
    	return $pdf->download('kartu-ujian.pdf');

       
     
    }


    public function lulus()
    {
     
        $pengumuman = DB::table('calon_siswa')
        ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->join('nilai_ujian', 'nilai_ujian.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->select('calon_siswa.no_pendaftaran','calon_siswa.nama_calon_siswa','nilai.nilai_ipa','nilai.nilai_inggris','nilai.nilai_matematika','nilai.nilai_bahasa_indonesia','nilai_ujian.nilai_ujian_wawancara','nilai_ujian.nilai_ujian_tertulis', DB::raw('(nilai.nilai_matematika + nilai.nilai_ipa + nilai.nilai_inggris + nilai_ujian.nilai_ujian_wawancara + nilai_ujian.nilai_ujian_tertulis)/5 as amount'))
        ->where('calon_siswa.jurusan','Manajemen perkantoran dan Layanan Bisnis')
        ->orderBy("amount", "desc")
        ->skip(0)->take(10)
        ->get();

        $pdf = PDF::loadview('lulus',['pengumuman'=>$pengumuman]);
     
    	return $pdf->download('lulus.pdf');

    }

    public function lulusdkv()
    {
     
        $pengumuman = DB::table('calon_siswa')
        ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->join('nilai_ujian', 'nilai_ujian.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->select('calon_siswa.no_pendaftaran','calon_siswa.nama_calon_siswa','nilai.nilai_ipa','nilai.nilai_inggris','nilai.nilai_matematika','nilai.nilai_bahasa_indonesia','nilai_ujian.nilai_ujian_wawancara','nilai_ujian.nilai_ujian_tertulis', DB::raw('(nilai.nilai_matematika + nilai.nilai_ipa + nilai.nilai_inggris + nilai_ujian.nilai_ujian_wawancara + nilai_ujian.nilai_ujian_tertulis)/5 as amount'))
        ->where('calon_siswa.jurusan','Desain Komunikasi Visual')
        ->orderBy("amount", "desc")
        ->skip(0)->take(10)
        ->get();

        $pdf = PDF::loadview('lulusdkv',['pengumuman'=>$pengumuman]);
     
    	return $pdf->download('lulusdkv.pdf');

    }

    public function tidaklulus()
    {
        // mengambil data pegawai berdasarkan id yang dipilih
       

        $pengumuman = DB::table('calon_siswa')
        ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->join('nilai_ujian', 'nilai_ujian.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->select('calon_siswa.no_pendaftaran','calon_siswa.nama_calon_siswa','nilai.nilai_ipa','nilai.nilai_inggris','nilai.nilai_matematika','nilai.nilai_bahasa_indonesia','nilai_ujian.nilai_ujian_wawancara','nilai_ujian.nilai_ujian_tertulis', DB::raw('(nilai.nilai_matematika + nilai.nilai_ipa + nilai.nilai_inggris + nilai_ujian.nilai_ujian_wawancara + nilai_ujian.nilai_ujian_tertulis)/5 as amount'))
        ->where('calon_siswa.jurusan','Manajemen perkantoran dan Layanan Bisnis')
        ->orderBy("amount", "desc")
        ->skip(10)->take(10)
        ->get();

        $data = ['title' => 'Welcome to NiceSnippets.com'];

        $pdf = PDF::loadview('tidaklulus',['pengumuman'=>$pengumuman],$data);
     
    	return $pdf->download('tidak-lulusmplb.pdf');

    }

    public function tidaklulusdkv()
    {
        // mengambil data pegawai berdasarkan id yang dipilih
       

        $pengumuman = DB::table('calon_siswa')
        ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->join('nilai_ujian', 'nilai_ujian.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->select('calon_siswa.no_pendaftaran','calon_siswa.nama_calon_siswa','nilai.nilai_ipa','nilai.nilai_inggris','nilai.nilai_matematika','nilai.nilai_bahasa_indonesia','nilai_ujian.nilai_ujian_wawancara','nilai_ujian.nilai_ujian_tertulis', DB::raw('(nilai.nilai_matematika + nilai.nilai_ipa + nilai.nilai_inggris + nilai_ujian.nilai_ujian_wawancara + nilai_ujian.nilai_ujian_tertulis)/5 as amount'))
        ->where('calon_siswa.jurusan','Desain Komunikasi Visual')
        ->orderBy("amount", "desc")
        ->skip(10)->take(10)
        ->get();

        $data = ['title' => 'Welcome to NiceSnippets.com'];

        $pdf = PDF::loadview('tidaklulusdkv',['pengumuman'=>$pengumuman],$data);
     
    	return $pdf->download('tidak-lulusdkv.pdf');

    }

    public function post_konfirmasi(Request $request)
{
	// update data pegawai

   

    DB::table('ruang')->insert([
		'no_pendaftaran' => $request->no_pendaftaran,
		'id_jadwal_ujian' => $request->id_jadwal_ujian
		
	]);


    $status = 3;
    DB::table('calon_siswa')->where('no_pendaftaran',$request->no_pendaftaran)->update([
		'status' => $status	
	]);
    Session::flash('message', 'Pembayaran Sudah Dikonfirmasi');

	// alihkan halaman ke halaman pegawai
	return redirect('/detail/'.$request->no_pendaftaran);
}


public function welcome(){
 
    $pendaftaran = DB::table('tgl_pendaftaran')
    ->orderBy("id_tgl_pendaftaran", "desc")
    ->get();

    $pengumuman = DB::table('tgl_pengumuman')
    ->orderBy("id_tgl_pengumuman", "desc")
    ->get();

    $jadwal_ujian = DB::table('jadwal_ujian')
    ->orderBy("id_jadwal_ujian", "desc")
    ->get();

    return view('welcome',compact('pendaftaran', 'pengumuman','jadwal_ujian'));

    
}

public function edit_data($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $lihat_calon_siswa = DB::table('calon_siswa')->where('no_pendaftaran',$id)->get();
     // passing data pegawai yang didapat ke view edit.blade.php

    return view('edit_data',compact('lihat_calon_siswa'));
  
   
}

public function prosesedit_calon_siswa(Request $request)
{
	// update data pegawai
	DB::table('calon_siswa')->where('no_pendaftaran',$request->no_pendaftaran)->update([
        'nisn' => $request->nisn,
        'email' => $request->email,
        'asal_sekolah' => $request->asal_sekolah,
		'alamat' => $request->alamat,
        'agama' => $request->agama,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tgl_lahir' => $request->tgl_lahir,
        'tempat_lahir' => $request->tempat_lahir,
        'tahun_lulus' => $request->tahun_lulus,
               'no_sttb' => $request->no_sttb,
        'nama_ayah' => $request->nama_ayah,
        'nomor_wa_ayah' => $request->nomor_wa_ayah,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'penghasilan_ayah' => $request->penghasilan_ayah,
        'nama_ibu' => $request->nama_ibu,
        'nomor_wa_ibu' => $request->nomor_wa_ibu,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'penghasilan_ibu' => $request->penghasilan_ibu
	]);
	// alihkan halaman ke halaman pegawai
   

    return redirect('/detail/'.$request->no_pendaftaran);
}

public function edit_nilai($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $lihat_nilai = DB::table('nilai')->where('no_pendaftaran',$id)->get();
     // passing data pegawai yang didapat ke view edit.blade.php

    return view('edit_nilai',compact('lihat_nilai'));
  
   
}
public function prosesedit_nilai(Request $request)
{
	// update data pegawai
	DB::table('nilai')->where('no_pendaftaran',$request->no_pendaftaran)->update([
        'nilai_bahasa_indonesia' => $request->nilai_bahasa_indonesia,
        'nilai_matematika' => $request->nilai_matematika,
        'nilai_ipa' => $request->nilai_ipa,
		'nilai_inggris' => $request->nilai_inggris
	]);
	// alihkan halaman ke halaman pegawai
   

    return redirect('/detail/'.$request->no_pendaftaran);
}

}
