<?php
// pemanggilan file dbconfig
require_once('koneksi.php');
// cari data dari tabel user
$query = "SELECT * FROM user";
// simpan hasil pencarian
$hasil = mysqli_fetch_assoc(
    // eksekusi query
    mysqli_query($koneksi, $query)
);
// jika ada data user tersimpan
if ($hasil) {
    // alihkan ke halaman login
    header('location: login.php?err=3');
    exit();
}
mysqli_close($koneksi);
