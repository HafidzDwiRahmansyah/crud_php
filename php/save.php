<?php

include "../app/db.php";

if (isset($_POST['simpan'])) {
    $name = $_POST['username'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $save = $conn->query("INSERT INTO tbl_admin VALUES(NULL,'$name','$mail','$pass')");

    if ($save) {
        echo "<script>alert('Data berhasil disimpan')
        location.replace('../')</script>";
    } else {
        echo "<script>alert('Error')
        location.replace('../')</script>";
    }
}

if (isset($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $name = $_POST['username'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $ubah = $conn->query("UPDATE tbl_admin SET username = '$name', email = '$mail', password = '$pass' WHERE id = '$id'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diubah')
        location.replace('../')</script>";
    } else {
        echo "<script>alert('Error Data')
        location.replace('../')</script>";
    }
}

if (isset($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];

    $hapus = $conn->query("DELETE FROM tbl_admin WHERE id = '$id'");

    if ($hapus) {
        echo "<script>alert('Data berhasil dihapus')
        location.replace('../')</script>";
    } else {
        echo "<script>alert('Error Data')
        location.replace('../')</script>";
    }
}
