<x-layout>
    <x-slot:title>Tambah Data Mahasiswa</x-slot:title>
    <div class="row justify-content-center  py-5">    
        <form action="/mahasiswa" method="post" class="col-md-6">
        @csrf
        <h3 class="mb-4">Tambah Mahasiswa</h3>
        <a href="index.php?p=mhs" class="btn-primary btn mb-5"><i class="bi bi-arrow-left-circle"></i>Kembali</a>
            <div class="mb-3 pb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" name="nim" class="form-control" id="nim" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" id="nama" required autofocus>
            </div>
            <div class="mb-3 row g-3 pb-3" style="margin-left:unset;">
                <label for="" class="form-label col-12" style="margin-bottom: -5px; padding-left: 0!important;">Tanggal Lahir</label>
                <select name="tgl" id="" class="form-select col me-4">
                        <option value="" disabled selected>Tanggal</option>
                        <?php
                            for($i = 1; $i <= 31; $i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="bln" id="" class="form-select col me-4">
                        <option value="" disabled selected>Bulan</option>
                        <?php
                            $bln = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktber', 'November', 'Desember'];

                            foreach ($bln as $i => $value) {
                                echo "<option value=".($i+1).">".$value."</option>";
                            }
                        ?>
                    </select>
                    <select name="thn" id="" class="form-select col">
                        <option value="" disabled selected>Tahun</option>
                        <?php
                            for($i = date('Y'); $i >= 1945; $i--){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <select name="prodi" class="form-select" id="prodi" required>
                    <option value="" disabled selected>--- Pilih Prodi ---</option>
                    <option value="TRPL">Teknologi Rekayasa Perangkat Lunak</option>
                    <option value="MI">Manajemen Informatika</option>
                    <option value="TEKKOM">Teknik Komputer</option>
                    {{-- <?php 
                        include 'koneksi.php';
                        $ambil_prodi = mysqli_query($db,"SELECT * FROM prodi");

                        while($data_prodi = mysqli_fetch_array($ambil_prodi)){
                            echo("<option value=".$data_prodi['id'].">".$data_prodi['nama_prodi']."</option>");
                        }
                    ?> --}}
                    
                </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
</x-layout>