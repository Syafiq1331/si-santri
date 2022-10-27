<?php

$koneksi = mysqli_connect("localhost", "root", "", "Pendaftaran_Santri");

if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}
