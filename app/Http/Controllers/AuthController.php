<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginCalon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    //
    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = LoginCalon::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama_calon_siswa',$data->nama_calon_siswa);
                Session::put('no_pendaftaran',$data->no_pendaftaran);
                Session::put('email',$data->email);
                Session::put('jurusan',$data->jurusan);
                Session::put('logincalon',TRUE);


                
                return redirect('/');
            }
            else{
                return redirect('logincalon')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('logincalon')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logoutcalon(){
        Session::flush();
        return redirect('logincalon')->with('alert','Kamu sudah logout');
    }


}
