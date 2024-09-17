<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ijazah;
use App\Models\CalonSiswa;
use App\Models\Nilai;
use Illuminate\Support\Facades\Session;
class PendaftaranController extends Controller
{
    public function pendaftaran()
{
 
    $date = date("Y-m-d");
    $cek_pendaftaran = DB::table('tgl_pendaftaran')
    ->where('dari_tgl', '<=', $date)
    ->Where('sampai_tgl', '>=', $date)
    ->get();
    

	// memanggil view tambah
	return view('pendaftaran',compact('cek_pendaftaran'));
 
}

public function detail_data($id)
{

    $cek_pendaftaran = DB::table('calon_siswa')->where('no_pendaftaran',$id)->get();

    
    return view('detail_data',compact('cek_pendaftaran'));

}

public function logincalon()
{
 
	// memanggil view tambah
	return view('logincalon');
 
}

public function hasilinput($id)
{
 
    $calon_siswa = DB::table('calon_siswa')
    ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
    ->join('ijazah', 'ijazah.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
    ->where('calon_siswa.no_pendaftaran',$id)
    ->get();

    return view('hasil')->with('calon_siswa', $calon_siswa);
}

public function proses_upload(Request $request){
    $this->validate($request, [
        'file' =>  'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        'file_pas_foto' =>  'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        'file_akte_kelahiran' =>  'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        'file_kartu_keluarga' =>  'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        'file_shun' =>  'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
    ]);

    // menyimpan data file yang diupload ke variabel $file
    $file = $request->file('file');
    $file_pas_foto =$request->file('file_pas_foto'); 
    $file_akte_kelahiran =$request->file('file_akte_kelahiran'); 
    $file_kartu_keluarga =$request->file('file_kartu_keluarga'); 
    $file_shun =$request->file('file_shun'); 

    $nama_file = time()."_".$file->getClientOriginalName();
    $nama_file_pas_foto = time()."_".$file_pas_foto->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'data_file';
    $file->move($tujuan_upload,$nama_file);
    $file_pas_foto->move($tujuan_upload,$nama_file_pas_foto);

    Ijazah::create([
        'file' => $nama_file,
        'foto_calon_siswa' => $nama_file_pas_foto,
        'no_pendaftaran' => $request->no_pendaftaran,
    ]);

    return redirect('/nilai/'.$request->no_pendaftaran);
}

public function tampilnomorpendaftaran($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$calon_siswa = DB::table('calon_siswa')->where('no_pendaftaran',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('ijazah',['calon_siswa' => $calon_siswa]);
 
}

public function tampilnoper($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$calon_siswa = DB::table('calon_siswa')->where('no_pendaftaran',$id)->get();

    $cek_nilai = DB::table('nilai')->where('no_pendaftaran',$id)->get();

    


	// passing data pegawai yang didapat ke view edit.blade.php
	return view('nilai',['calon_siswa' => $calon_siswa,'cek_nilai' => $cek_nilai]);
 
}

public function create(){

    $q = DB::table('calon_siswa')->select(DB::raw('MAX(RIGHT(no_pendaftaran,4)) as kode'));
    $kd="";
    if($q->count()>0){

        foreach($q->get() as $k)
        {
            $tmp = ((int)$k->kode)+1;
            $date = date('Y');
            $kd = $date . "" . sprintf("%04s", $tmp);
        }
    }
    else {
        $date = date('Y');
        $kd =$date . "0001";
    }


    $date = date("Y-m-d");
    $cek_pendaftaran = DB::table('tgl_pendaftaran')
    ->where('dari_tgl', '<=', $date)
    ->Where('sampai_tgl', '>=', $date)
    ->get();
    

	// memanggil view tambah


return view('pendaftaran',compact('kd'),compact('cek_pendaftaran'));
}

public function tgl_otomatis(){

    $tanggal_pendaftaran = date('Y-m-d');
    return view('pendaftaran',compact('tanggal_pendaftaran'));
}

public function store(Request $request) 
{

    $current_date_time = date('Y-m-d');
    $messages = [

        'required'=> ':Email Sudah Pernah Diinput',
    ];

    $request->validate([

        'email'=> 'unique:calon_siswa,email'

    ], $messages);

    DB::table('calon_siswa')->insert([
        'no_pendaftaran' => $request->no_pendaftaran,
        'nisn' => $request->nisn,
		'nama_calon_siswa' => $request->nama_calon_siswa,
        'email' => $request->email,
        'jurusan' => $request->jurusan,
        'password' => bcrypt($request->password),
		'asal_sekolah' => $request->asal_sekolah,
		'alamat' => $request->alamat,
        'agama' => $request->agama,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tgl_lahir' => $request->tgl_lahir,
        'tempat_lahir' => $request->tempat_lahir,
        'tahun_lulus' => $request->tahun_lulus,
        'tanggal_pendaftaran' => $current_date_time,
        'no_sttb' => $request->no_sttb,
        'nama_ayah' => $request->nama_ayah,
        'nomor_wa_ayah' => $request->nomor_wa_ayah,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'penghasilan_ayah' => $request->penghasilan_ayah,
        'nama_ibu' => $request->nama_ibu,
        'nomor_wa_ibu' => $request->nomor_wa_ibu,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'penghasilan_ibu' => $request->penghasilan_ibu,
      
        'status' => $request->status
	]);

    DB::table('nilai')->insert([
        'no_pendaftaran' => $request->no_pendaftaran,
        'nilai_bahasa_indonesia' => $request->nilai_bahasa_indonesia,
		'nilai_matematika' => $request->nilai_matematika,
		'nilai_ipa' => $request->nilai_ipa,
        'nilai_inggris' => $request->nilai_inggris,
	]);

    Session::flash('message', 'Berhasil Daftar, Silahkan Login Untuk Melengkapi Pendaftaran');

    return redirect('/logincalon/');
}

public function store_detail_data(Request $request) 
{

    
    $tujuan_upload = 'data_file';
  $file_pas_foto =$request->file('file_pas_foto'); 
  $file_akte_kelahiran =$request->file('file_akte_kelahiran'); 
  $file_kartu_keluarga =$request->file('file_kartu_keluarga'); 
  $file_shun =$request->file('file_shun'); 
  $file_ijazah =$request->file('file_ijazah'); 
  $file_raport =$request->file('file_raport'); 

  $nama_file_pas_foto = time()."_".$file_pas_foto->getClientOriginalName();
  $nama_file_akte_kelahiran= time()."_".$file_akte_kelahiran->getClientOriginalName();
  $nama_file_kartu_keluarga= time()."_".$file_kartu_keluarga->getClientOriginalName();
  $nama_file_shun  = time()."_".$file_shun->getClientOriginalName();
  $nama_file_ijazah = time()."_".$file_ijazah->getClientOriginalName();
  $nama_file_raport = time()."_".$file_raport->getClientOriginalName();

  $file_pas_foto->move($tujuan_upload,$nama_file_pas_foto);
  $file_akte_kelahiran->move($tujuan_upload,$nama_file_akte_kelahiran);
  $file_kartu_keluarga->move($tujuan_upload,$nama_file_kartu_keluarga);
  $file_shun->move($tujuan_upload,$nama_file_shun);
  $file_ijazah->move($tujuan_upload,$nama_file_ijazah);
  $file_raport->move($tujuan_upload,$nama_file_raport);

  	DB::table('calon_siswa')->where('no_pendaftaran',$request->no_pendaftaran)->update([
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
        'penghasilan_ibu' => $request->penghasilan_ibu,
        'foto_calon_siswa' => $nama_file_pas_foto,
        'ijazah' => $nama_file_ijazah,
        'akte_kelahiran' => $nama_file_akte_kelahiran,
        'kartu_keluarga' => $nama_file_akte_kelahiran,
        'shun' => $nama_file_shun,
        'raport' => $nama_file_raport
	]);
	// alihkan halaman ke halaman pegawai
    
	// alihkan halaman ke halaman pegawai
    return redirect('/nilai/'.$request->no_pendaftaran);

  
}
public function simpannilai(Request $request) 
{

    

    DB::table('nilai')->where('no_pendaftaran',$request->no_pendaftaran)->update([
		'no_pendaftaran' => $request->no_pendaftaran,
		'nilai_bahasa_indonesia' => $request->nilai_bahasa_indonesia,
		'nilai_matematika' => $request->nilai_matematika,
		'nilai_ipa' => $request->nilai_ipa,
        'nilai_inggris' => $request->nilai_inggris,
        
	]);

    Session::flash('message', 'Nilai Berhasil Diinput');

    return redirect('/');
}


}
