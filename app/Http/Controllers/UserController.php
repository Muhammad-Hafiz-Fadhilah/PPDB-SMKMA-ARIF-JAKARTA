<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\CalonSiswa;
use App\Mail\UserEmail;
use Mail;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = DB::table('calon_siswa')
        ->join('nilai', 'nilai.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->join('nilai_ujian', 'nilai_ujian.no_pendaftaran', '=', 'calon_siswa.no_pendaftaran')
        ->select('calon_siswa.no_pendaftaran','calon_siswa.email','calon_siswa.jurusan','calon_siswa.nama_calon_siswa','nilai.nilai_ipa','nilai.nilai_inggris','nilai.nilai_matematika','nilai.nilai_bahasa_indonesia','nilai_ujian.nilai_ujian_wawancara','nilai_ujian.nilai_ujian_tertulis', DB::raw('(nilai.nilai_matematika + nilai.nilai_ipa + nilai.nilai_inggris + nilai_ujian.nilai_ujian_wawancara + nilai_ujian.nilai_ujian_tertulis)/5 as amount'))
        ->orderBy("amount", "desc")
        ->skip(0)->take(36)
        ->get();
          
        return view('users', compact('users'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendEmail(Request $request)
    {
        $users = CalonSiswa::whereIn("no_pendaftaran", $request->ids)->get();
  
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new UserEmail($user));
        }
  
        return response()->json(['success'=>'Send email successfully.']);
    }
}