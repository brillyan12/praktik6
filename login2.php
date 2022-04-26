<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
include "simpandata.php";


if (empty($nama) || empty($email)) {
    header('Location: gagal.php');
} else {
    echo "Nama : $nama"."<br>";
    echo "Email : $email"."<br>";
    echo "--------------------------------------------------"."<br>";
    echo "Terakhir Login : $waktu  $tanggal";
}
?>