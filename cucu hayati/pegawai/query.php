<?php
include "../koneksi1.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST["nama"]);
    $nisn = htmlspecialchars($_POST["nip"]);
    $email = htmlspecialchars($_POST["email"]);
    $alamat = htmlspecialchars($_POST["alamat"]);

    $tbl = 'pegawai';
    if (isset($_POST['update'])) {
        $id = htmlspecialchars($_POST["id"]);
        $sql = "UPDATE pegawai SET
        nama = '$nama',
        nip = '$nip',
        email = '$email',
        alamat = '$alamat',
        WHERE id = '$id' ";
    }elseif (isset($POST['create'])) {
        $sql = "INSERT INTO pegawai
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
        $sql = "DELETE from pegawai WHERE id = '$id'";
    }

    if ($koneksi->query($sql) === TRUE) {
        header("Location: index.php?msg=suskes");
    } else {
        header("Location: index.php?msg=gagal");
    }
}
?>
