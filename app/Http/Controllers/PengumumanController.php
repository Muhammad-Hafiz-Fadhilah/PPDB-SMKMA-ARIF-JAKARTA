<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PengumumanController extends Controller
{
    //

    public function index($jurusan)
    {
    	// mengambil data dari table pegawai
        $pengumuman = DB::table('calon_siswa')
        ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->join('nilai_ujian', 'nilai_ujian.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->select('calon_siswa.no_pendaftaran','calon_siswa.nama_calon_siswa','nilai.nilai_ipa','nilai.nilai_inggris','nilai.nilai_matematika','nilai.nilai_bahasa_indonesia','nilai_ujian.nilai_ujian_wawancara','nilai_ujian.nilai_ujian_tertulis', DB::raw('(nilai.nilai_matematika + nilai.nilai_ipa + nilai.nilai_inggris + nilai_ujian.nilai_ujian_wawancara + nilai_ujian.nilai_ujian_tertulis)/5 as amount'))
        ->where('calon_siswa.jurusan',$jurusan)
        ->orderBy("amount", "desc")
        ->skip(0)->take(10)
        ->get();


        $pengumumancek = DB::table('calon_siswa')
        ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->join('nilai_ujian', 'nilai_ujian.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->select('calon_siswa.no_pendaftaran','calon_siswa.nama_calon_siswa','nilai.nilai_ipa','nilai.nilai_inggris','nilai.nilai_matematika','nilai.nilai_bahasa_indonesia','nilai_ujian.nilai_ujian_wawancara','nilai_ujian.nilai_ujian_tertulis', DB::raw('(nilai.nilai_matematika + nilai.nilai_ipa + nilai.nilai_inggris + nilai_ujian.nilai_ujian_wawancara + nilai_ujian.nilai_ujian_tertulis)/5 as amount'))
        ->where('calon_siswa.jurusan',$jurusan)
        ->orderBy("amount", "desc")
        ->skip(10)->take(10)
        ->get();


        $date = date("Y-m-d");
        $cek_pengumuman = DB::table('tgl_pengumuman')
        ->where('dari_tgl', '<=', $date)
        ->Where('sampai_tgl', '>=', $date)
        ->get();

        $get_jurusan = $jurusan;

        return view('pengumuman',['pengumuman' => $pengumuman],compact('cek_pengumuman','pengumumancek'));
    }

}
