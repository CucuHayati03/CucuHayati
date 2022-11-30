<?php
include "../koneksi.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST["nama"]);
    $nisn = htmlspecialchars($_POST["nisn"]);
    $email = htmlspecialchars($_POST["email"]);
    $alamat = htmlspecialchars($_POST["alamat"]);

    $tbl = 'mahasiswa';
    if (isset($_POST['update'])) {
        $id = htmlspecialchars($_POST["id"]);
        $sql = "UPDATE mahasiswa SET
        nama = '$nama',
        nisn = '$nisn',
        email = '$email',
        alamat = '$alamat',
        WHERE id = '$id' ";
    }elseif (isset($POST['create'])) {
        $sql = "INSERT INTO mahasiswa
        (
        nama,
        nisn,
        email,
        alamat
        )
        VALUES (
        '$nama',
        '$nisn',
        '$email',
        '$alamat'
        )";
    } elseif (isset($_POST['delete'])) {
        $id = htmlspecialchars($_POST["delete"]);
        $sql = "DELETE from mahasiswa WHERE id = '$id'";
    }

    if ($koneksi->query($sql) === TRUE) {
        header("Location: index.php?msg=suskes");
    } else {
        header("Location: index.php?msg=gagal");
    }
}
?>
