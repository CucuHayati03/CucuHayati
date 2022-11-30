<?php
$koneksi = mysqli_connect("localhost","root","","karyawan");

// cek koneksi
if(mysqli_connect_errno()) {
    echo "koneksi database mysql gagal!!! : " .mysqli_connect_errno();
}