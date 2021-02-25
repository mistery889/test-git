<?php
// menghapus user

$ambil = $koneksi->query("SELECT * FROM user WHERE nama_user='$_GET[nama]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM user WHERE nama_user='$_GET[nama]'");

echo "<script>alert('user terhapus');</script>";
echo "<script>location='index.php?halaman=user';</script>";

?>
