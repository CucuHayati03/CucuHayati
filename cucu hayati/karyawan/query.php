<?php
include "../koneksi2.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST["nama"]);
    $nisn = htmlspecialchars($_POST["nip"]);
    $email = htmlspecialchars($_POST["email"]);
    $alamat = htmlspecialchars($_POST["alamat"]);

    $tbl = 'karyawan';
    if (isset($_POST['update'])) {
        $id = htmlspecialchars($_POST["id"]);
        $sql = "UPDATE karyawan SET
        nama = '$nama',
        nip = '$nip',
        email = '$email',
        alamat = '$alamat',
        WHERE id = '$id' ";
    }elseif (isset($POST['create'])) {
        $sql = "INSERT INTO karyawan
        (
        nama,
        nip,
        email,
        alamat
        )
        VALUES (
        '$nama',
        '$nip',
        '$email',
        '$alamat'
        )";
    } elseif (isset($_POST['delete'])) {
        $id = htmlspecialchars($_POST["delete"]);
        $sql = "DELETE from karyawan WHERE id = '$id'";
    }

    if ($koneksi->query($sql) === TRUE) {
        header("Location: index.php?msg=suskes");
    } else {
        header("Location: index.php?msg=gagal");
    }
}
?>
