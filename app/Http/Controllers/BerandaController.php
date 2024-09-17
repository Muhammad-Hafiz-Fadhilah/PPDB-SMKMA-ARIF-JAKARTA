<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $calon_siswa = DB::table('calon_siswa')->where('status','=', 2)->get();
        $calon_siswa2 = DB::table('calon_siswa')->where('status','=', 1)->get();
        $calon_siswa_dkv = DB::table('calon_siswa')->where('jurusan','=', 'Desain Komunikasi Visual')->get();
        $calon_siswa_mlb = DB::table('calon_siswa')->where('jurusan','=', 'Manajemen perkantoran dan Layanan Bisnis')->get();
        
 


        return view('beranda',compact('calon_siswa','calon_siswa2','calon_siswa_mlb','calon_siswa_dkv'));



    }


    public function halamansatu()
    {
        //

    return view('halamansatu');

    }

    public function halamandua()
    {
        //

    return view('halamandua');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
