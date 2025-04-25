@extends('layouts.main')

@section('title', 'Daftar Mahasiswa TI')

@section('navmhs', 'active')

@section('content')
    <h2>Daftar Mahasiswa</h2>
    <ol>
       <?php
       foreach ($mhs as $namaMhs){
            echo"<li> $namaMhs</li>";
       }
       ?>
    </ol>
    {{-- <div>
        <img src="/images/PNP.jpg" alt="logo pnp" with="80" height="80">
        <img src="/images/TI.jpg" alt="logo pnp" with="80" height="80">
    </div> --}}

        Padang, &copy; <?= date("Y") ?> PNP

@endsection

