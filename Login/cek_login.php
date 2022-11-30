<?php
//mengaktifkan session php
session_start();
//menghubungkan dengann koneksi
include 'koneksi.php';
//menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
var_dump($username, $password)
if ($username == '' && $password == '') {
    header("location:login.php?pesan=kosong");   
} else {
    //menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "select * from userr where username= '$username' and password= '$password'");
    //menghitung jumlah data yang di temukan
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        while($row = mysqli_fetch_array($data)) {
            $_SESSION['id_pengguna'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
        header("location:home.php");    
        }
    } else{
        header("location:login.phhp?pesan=gagal");
    }
}