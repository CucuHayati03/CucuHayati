<?php
$koneksi = mysqli_connect("localhost","root","","pegawai");

// cek koneksi
if(mysqli_connect_errno()) {
    echo "koneksi database mysql gagal!!! : " .mysqli_connect_errno();
}