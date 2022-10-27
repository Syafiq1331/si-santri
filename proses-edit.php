<?php
include("config.php");

if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // buat query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
        header('Gagal menyimpan perubahan...');
    }

} else {
    die("Akses dilarang...");
}

?>