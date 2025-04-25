<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function  cekObjek(){
        $mahasiswaController=new Mahasiswa();
        dd($mahasiswa);
    }
    public function insert()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = '20212098';
        $mahasiswa->nama_lengkap = 'Steve Job';
        $mahasiswa->tempat_lahir = 'Solok';
        $mahasiswa->tgl_lahir = '1970-09-05';
        $mahasiswa->email = 'steve@apple.com';
        $mahasiswa->prodi = 'TRPL';
        $mahasiswa->alamat = 'Jl. Sutomo No.11 Solok';
        $mahasiswa->save();

        dd($mahasiswa);
    }
    public function massAssignment()
    {
        $mahasiswa = Mahasiswa::create([
            'nim' => '202007890',
            'nama_lengkap' => 'M. Yazid',
            'tempat_lahir' => 'Padang',
            'tgl_lahir' => '2011-07-03',
            'email' => 'yazid@gmail.com',
            'prodi' => 'MI',
            'alamat' => 'Padang'
        ]);

        dump($mahasiswa);

        $mahasiswa1 = Mahasiswa::create([
            'nim' => '202007891',
            'nama_lengkap' => 'M. Rasyid',
            'tempat_lahir' => 'Padang',
            'tgl_lahir' => '2015-05-12',
            'email' => 'rasyid@gmail.com',
            'prodi' => 'TRPL',
            'alamat' => 'Padang'
        ]);

        dump($mahasiswa1);
    }




    public function insertSql()
    {
        $query = DB::insert("INSERT INTO mahasiswas(nim, nama_lengkap, tempat_lahir,
            tgl_lahir, email, prodi, alamat, created_at, updated_at)
            VALUES ('2022090909', 'Linus B Torvalds', 'Finlandia', '1971-08-12',
            'linus@linux.org', 'TRPL', 'Jl. Sudirman no.10 Padang', now(), now())");
    }
    public function insertPrepared(){
        $query=DB::insert("INSERT INTO mahasiswas(nim, nama_lengkap, tempat_lahir,
            tgl_lahir, email, prodi, alamat, created_at, updated_at) VALUES
            (?, ?, ?,?, ?, ?, ?, ?, ?)", ['2022090908', 'Taylor Otwel', 'Limau Manis', '1971-08-12', 'taylor@laravel.com', 'MI', 'Jl. M Hatta no.1 Padang', now(), now()]);
    }
    public function insertBinding(){
        $query=DB::insert("INSERT INTO mahasiswas(nim, nama_lengkap, tempat_lahir,
            tgl_lahir, email, prodi, alamat, created_at, updated_at) VALUES (:nim, :nama_lengkap, :tempat_lahir, :tgl_lahir, :email, :prodi, :alamat, :created_at, :updated_at)",
            [
                'nim'=>'202209099908',
                'nama_lengkap' => 'Bill Getes',
                'tempat_lahir' => 'Payakumbuh',
                'tgl_lahir' => '1963-05-1',
                'email' => 'bill@microsoft.com',
                'prodi'=> 'MI',
                'alamat' => 'Jl. M Yamin No.1 Padang',
                'created_ad' => now(),
                'update_ad' => now()
            ]);
    }
    public function update(){
        $query=DB::update("UPDATE mahasiswas SET tempat_lahir = 'Seattle Washhington US' WHERE nama_lengkap=?", ['Bill Gates']);
    }



    // public function index(){
    //     $arrMhs=['Bill gates view', 'Linus Benedict', 'Tylor', 'Elon Musk', 'Muhammad Yazid'];
    //     return view('akademik/mahasiswa')->with(['mhs'=> $arrMhs]);
    // }

    // public function show(){
    //     $nama='Taylor Otwell';
    //     $nim='2022180001';
    //     $total_nilai=100;
    //     return view('akademik.nilai',compact('nama', 'nim', 'total_nilai'));
    // }
}
