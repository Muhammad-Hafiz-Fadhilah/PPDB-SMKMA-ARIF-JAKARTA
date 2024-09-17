<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





Route::get('/send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('victortarigan04@gmail.com')->send(new MyTestMail($details));
   
    dd("Email is Sent.");
});

Route::get('/beranda', function () {
    return view('beranda');
});


Route::get('/loginadmin', function () {
    return view('Pengguna.loginadmin');
})->name('loginadmin');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\CalonSiswaController::class, 'welcome'])->name('welcome');


Route::post('/postlogin',[App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth','cekLevel:admin']], function () {
Route::get('/calonsiswa', [App\Http\Controllers\CalonSiswaController::class, 'index'])->name('calonsiswa');
Route::get('/detail/{id}',[App\Http\Controllers\CalonSiswaController::class, 'detail'])->name('detail');
Route::get('/isinilai/{id}',[App\Http\Controllers\NilaiController::class, 'isinilai'])->name('isinilai');
Route::post('/postnilai',[App\Http\Controllers\NilaiController::class, 'postnilai'])->name('postnilai');
Route::post('/update',[App\Http\Controllers\NilaiController::class, 'update'])->name('update');
Route::get('/tgl_pengumuman', [App\Http\Controllers\TglPengumumanController::class, 'index'])->name('tgl_pengumuman');
Route::get('/add_tgl_pengumuman', [App\Http\Controllers\TglPengumumanController::class, 'add_tgl_pengumuman'])->name('add_tgl_pengumuman');
Route::post('/proses_tgl_pengumuman',[App\Http\Controllers\TglPengumumanController::class, 'proses_tgl_pengumuman'])->name('proses_tgl_pengumuman');
Route::get('/edit_tgl_pengumuman/{id}',[App\Http\Controllers\TglPengumumanController::class, 'edit_tgl_pengumuman'])->name('edit_tgl_pengumuman');
Route::post('/prosesedit_tgl_pengumuman',[App\Http\Controllers\TglPengumumanController::class, 'prosesedit_tgl_pengumuman'])->name('prosesedit_tgl_pengumuman');
Route::get('/delete_tgl_pengumuman/{id}',[App\Http\Controllers\TglPengumumanController::class, 'delete_tgl_pengumuman'])->name('delete_tgl_pengumuman');
Route::get('/konfirmasi/{id}',[App\Http\Controllers\CalonSiswaController::class, 'konfirmasi'])->name('konfirmasi');
Route::post('/post_konfirmasi',[App\Http\Controllers\CalonSiswaController::class, 'post_konfirmasi'])->name('post_konfirmasi');
Route::get('/edit_data/{id}',[App\Http\Controllers\CalonSiswaController::class, 'edit_data'])->name('edit_data');
Route::post('/prosesedit_calon_siswa',[App\Http\Controllers\CalonSiswaController::class, 'prosesedit_calon_siswa'])->name('prosesedit_calon_siswa');
Route::get('/edit_nilai/{id}',[App\Http\Controllers\CalonSiswaController::class, 'edit_nilai'])->name('edit_nilai');
Route::post('/prosesedit_nilai',[App\Http\Controllers\CalonSiswaController::class, 'prosesedit_nilai'])->name('prosesedit_nilai');


Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::post('users-send-email', [UserController::class, 'sendEmail'])->name('ajax.send.email');

Route::get('/tgl_pendaftaran', [App\Http\Controllers\TglPendaftaranController::class, 'index'])->name('tgl_pendaftaran');
Route::get('/add_tgl_pendaftaran', [App\Http\Controllers\TglPendaftaranController::class, 'add_tgl_pendaftaran'])->name('add_tgl_pendaftaran');
Route::post('/proses_tgl_pendaftaran',[App\Http\Controllers\TglPendaftaranController::class, 'proses_tgl_pendaftaran'])->name('proses_tgl_pendaftaran');
Route::get('/edit_tgl_pendaftaran/{id}',[App\Http\Controllers\TglPendaftaranController::class, 'edit_tgl_pendaftaran'])->name('edit_tgl_pendaftaran');
Route::post('/prosesedit_tgl_pendaftaran',[App\Http\Controllers\TglPendaftaranController::class, 'prosesedit_tgl_pendaftaran'])->name('prosesedit_tgl_pendaftaran');
Route::get('/delete_tgl_pendaftaran/{id}',[App\Http\Controllers\TglPendaftaranController::class, 'delete_tgl_pendaftaran'])->name('delete_tgl_pendaftaran');

Route::get('/jadwal_ujian', [App\Http\Controllers\JadwalUjianController::class, 'index'])->name('jadwal_ujian');
Route::get('/add_jadwal_ujian', [App\Http\Controllers\JadwalUjianController::class, 'add_jadwal_ujian'])->name('add_jadwal_ujian');
Route::post('/proses_jadwal_ujian',[App\Http\Controllers\JadwalUjianController::class, 'proses_jadwal_ujian'])->name('proses_jadwal_ujian');
Route::get('/edit_jadwal_ujian/{id}',[App\Http\Controllers\JadwalUjianController::class, 'edit_jadwal_ujian'])->name('edit_jadwal_ujian');
Route::post('/prosesedit_jadwal_ujian',[App\Http\Controllers\JadwalUjianController::class, 'prosesedit_jadwal_ujian'])->name('prosesedit_jadwal_ujian');
Route::get('/delete_jadwal_ujian/{id}',[App\Http\Controllers\JadwalUjianController::class, 'delete_jadwal_ujian'])->name('delete_jadwal_ujian');
Route::get('/lulus', [App\Http\Controllers\CalonSiswaController::class, 'lulus'])->name('lulus');
Route::get('/lulusdkv', [App\Http\Controllers\CalonSiswaController::class, 'lulusdkv'])->name('lulusdkv');

Route::get('/tidaklulus', [App\Http\Controllers\CalonSiswaController::class, 'tidaklulus'])->name('tidaklulus');
Route::get('/tidaklulusdkv', [App\Http\Controllers\CalonSiswaController::class, 'tidaklulusdkv'])->name('tidaklulusdkv');

});

Route::group(['middleware' => ['auth','cekLevel:admin,kepsek']], function () {
    Route::get('/beranda',[App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
    Route::get('/halamandua', [App\Http\Controllers\BerandaController::class, 'halamandua'])->name('halamandua');
    Route::get('/lulus', [App\Http\Controllers\CalonSiswaController::class, 'lulus'])->name('lulus');
Route::get('/lulusdkv', [App\Http\Controllers\CalonSiswaController::class, 'lulusdkv'])->name('lulusdkv');

Route::get('/tidaklulus', [App\Http\Controllers\CalonSiswaController::class, 'tidaklulus'])->name('tidaklulus');
Route::get('/tidaklulusdkv', [App\Http\Controllers\CalonSiswaController::class, 'tidaklulusdkv'])->name('tidaklulusdkv');
    });

    Route::get('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'pendaftaran'])->name('pendaftaran');
    Route::get('/logincalon', [App\Http\Controllers\PendaftaranController::class, 'logincalon'])->name('pendaftaran');
    
    Route::get('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'create'])->name('pendaftaran');
    
    Route::get('/hasil/{id}',[App\Http\Controllers\PendaftaranController::class, 'hasilinput'])->name('pendaftaran');

    Route::post('/store',[App\Http\Controllers\PendaftaranController::class, 'store'])->name('pendaftaran');
    Route::get('/ijazah/{id}',[App\Http\Controllers\PendaftaranController::class, 'tampilnomorpendaftaran'])->name('pendaftaran');
    Route::post('/proses_upload',[App\Http\Controllers\PendaftaranController::class, 'proses_upload'])->name('pendaftaran');
    Route::get('/nilai/{id}',[App\Http\Controllers\PendaftaranController::class, 'tampilnoper'])->name('pendaftaran');
    Route::post('/simpannilai',[App\Http\Controllers\PendaftaranController::class, 'simpannilai'])->name('pendaftaran');
    Route::post('/loginPost',[App\Http\Controllers\AuthController::class, 'loginPost'])->name('auth');
    Route::get('/logoutcalon',[App\Http\Controllers\AuthController::class, 'logoutcalon'])->name('auth');
    Route::get('/pembayaran/{id}', [App\Http\Controllers\PembayaranController::class, 'pembayaran'])->name('pembayaran');

    Route::get('/detail_data/{id}', [App\Http\Controllers\PendaftaranController::class, 'detail_data'])->name('detail_data');
    Route::post('/store_detail_data',[App\Http\Controllers\PendaftaranController::class, 'store_detail_data'])->name('pendaftaran');

    Route::post('/upload_pembayaran',[App\Http\Controllers\PembayaranController::class, 'upload_pembayaran'])->name('pembayaran');
    Route::get('/pengumuman/{jurusan}', [App\Http\Controllers\PengumumanController::class, 'index'])->name('pengumuman');
    Route::get('/kirimemail', [App\Http\Controllers\CalonSiswaController::class, 'kirimemail'])->name('kirimemail');
    Route::get('/cetak/{id}', [App\Http\Controllers\CalonSiswaController::class, 'cetak'])->name('cetak');
    Route::get('/cetak_pdf/{id}', [App\Http\Controllers\CalonSiswaController::class, 'cetak_pdf'])->name('cetak_pdf');