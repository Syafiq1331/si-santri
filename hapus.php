<?php 

include("config.php");

if(isset($_GET['id'])){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-siswa.php?status=sukses');
    } else {
        header('Location: list-siswa.php?status=gagal');
    }

}else {
    die("akses dilarang...");
}

?>