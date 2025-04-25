<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;


Route::get('/', function () {
    return view('home');
});


Route::get('/cek-objek', [MahasiswaController::class, 'cekObjek']);

Route::get('/insert', [MahasiswaController::class, 'insert']);
Route::get('/mass-assignment', [MahasiswaController::class, 'massAssignment']);

Route::get('/update', [MahasiswaController::class, 'update']);
Route::get('/update-where', [MahasiswaController::class, 'updateWhere']);
Route::get('/mass-update', [MahasiswaController::class, 'massUpdate']);

Route::get('/delete', [MahasiswaController::class, 'delete']);
Route::get('/destroy', [MahasiswaController::class, 'destroy']);
Route::get('/mass-delete', [MahasiswaController::class, 'massDelete']);

Route::get('/all', [MahasiswaController::class, 'all']);
Route::get('/all-where', [MahasiswaController::class, 'allWhere']);
Route::get('/get-where', [MahasiswaController::class, 'getWhere']);
Route::get('/first', [MahasiswaController::class, 'first']);
Route::get('/find', [MahasiswaController::class, 'find']);
Route::get('/latest', [MahasiswaController::class, 'latest']);
Route::get('/limit', [MahasiswaController::class, 'limit']);
Route::get('/skip-take', [MahasiswaController::class, 'skipTake']);
Route::get('/softdelete', [MahasiswaController::class, 'softDelete']);
Route::get('/with-trashed', [MahasiswaController::class, 'withTrashed']);
Route::get('/restore', [MahasiswaController::class, 'restore']);
Route::get('/force-delete', [MahasiswaController::class, 'forceDelete']);



// Route::get('/insert-sql', [MahasiswaController::class, 'insertSql']);
// Route::get('/insert-prepared', [MahasiswaController::class, 'insertPrepared']);
// Route::get('/insert-binding', [MahasiswaController::class, 'insertBinding']);
// Route::get('/update', [MahasiswaController::class, 'update']);
// Route::get('/delete', [MahasiswaController::class, 'delete']);
// Route::get('/select', [MahasiswaController::class, 'select']);
// Route::get('/select-tampil', [MahasiswaController::class, 'selectTampil']);
// Route::get('/select-view', [MahasiswaController::class, 'selectView']);
// Route::get('/select-where', [MahasiswaController::class, 'selectWhere']);
// Route::get('/statement', [MahasiswaController::class, 'statement']);


// Route::get('mahasiswa', function () {
//     $arrMhs=['Bill gates view', 'Linus Benedict', 'Tylor', 'Elon Musk', 'Muhammad Yazid'];
//     return view('akademik/mahasiswa')->with(['mhs'=> $arrMhs]);
// });

// Route::get('/mahasiswa',[\App\Http\Controllers\MahasiswaController::class,'index']);
// Route::get('/mahasiswa-show',[\App\Http\Controllers\MahasiswaController::class,'show']);
// Route::get('/dosen',[\App\Http\Controllers\DosenController::class,'index']);

// Route::get('/dosen', function () {
//     $arrDosen = ['Ronal Hadi', 'Deni S', 'Fazrol R', 'Deddy P', 'Cipto P'];
//     return view('akademik.dosen', ['dosen' => $arrDosen]);
// });


Route::get('/prodi', function () {
    return view('akademik.prodi');
});



// Route::get('/mahasiswa', function () {
//     $nama='Taylor Otwell';
//     $nim='2022180001';
//     $total_nilai=0;
//     return view('akademik.nilai',compact('nama', 'nim', 'total_nilai'));
// });

// Route::get('/perulangan', function () {
//     return view('akademik.perulangan');
// });

Route::get('/perulangan', function () {
    $nama = 'Bill gates';
    $nim = '2022180001';
    $total_nilai = [80,70,20];
    return view('akademik.perulangan', compact('nama', 'nim', 'total_nilai'));
});



// Route::get('/profil', function () {
//     echo "<h1>Welcome to Laravel</h1>";
//     return "<p>Jurusan Teknoligi Informasi-Politeknik Negeri Padang</p>";
// });

// Route::get('/mahasiswa/ti/udin', function () {
//     echo "<p style+'font-size:40;color:orange'>Jurursan Teknologi Informasi";
//     echo "<h1>Selamat datang udin</h1>";
//     echo "<hr>";
//     echo "<p>Jurusan Teknoligi Informasi-Politeknik Negeri Padang</p>";
// });

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return '<p> Ketua Hima Jurusan TI adalah <b>' .$nama. '</b></p>';
// });

// // Route Parameter
// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return '<p> Ketua Hima Jurusan TI adalah <b>' .$nama. '</b></p>';
// });

// Route::get('/mahasiswa/{nama}/{nim}', function ($nama,$nim) {
//     return '<p> Ketua Hima Jurusan TI adalah <b>' .$nama. '</b> dengan NIM = '.$nim.'</p>';
// });

// //Route dengan Optional Parameter
// Route::get('/dosen/{nama?}{nip?}', function ($a='admin', $b='2022000001') {
//     return '<p> Dosen Pembina HIMA Jurusan TI adalah <b>'.$a.'</b> dengan NIP = ' .$b. '</p>';
// });

// //Route Parameter dengan Reguler Expression
// Route::get('/user/{id}', function ($id) {
//     return '<p> User Admin memiliki id <b>' .$id. '</b> </p>';
// })->where('id','[0-9]+');













