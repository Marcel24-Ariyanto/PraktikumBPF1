<?php


// pertemuan 2
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\Carbon;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});
// parameter reguired
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});
//  parameter anti required
Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswass';
})->name('mahasiswa.show');



Route::get('/mahasiswa/{param1}',[MahasiswaController::class, 'show']);





Route::get('/about', function () {
    return view('halaman-about');
});




Route::get('/matakuliah/{param1?}',[MatkulController::class,'show']);







//pertemuan 3
Route::get('/home',[HomeController::class,'index']);



//pertemuan 4
Route::get('home/Pertemuan4',function (){
    return view('simple-home');
});
Route::post('home/signup',[HomeController::class,'signup']);

Route::get('home/form' ,[AuthController::class, 'index']);

Route::post('home/login/proces', [AuthController::class,'login']);
