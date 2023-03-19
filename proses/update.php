<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = htmlspecialchars($_POST['id']);
$Nip = htmlspecialchars($_POST['Nip']);
$Nama = htmlspecialchars($_POST['Nama']);
$Jk = htmlspecialchars($_POST['Jk']);
$Gaji = htmlspecialchars($_POST['Gaji']);

// update data ke database
$edit = mysqli_query($koneksi, "update tblpegawai set Nip='$Nip', Nama='$Nama', Jk='$Jk',Gaji='$Gaji' where id='$id'");

// mengalihkan halaman kembali ke index.php
if ($edit) {
	echo "<script> alert ('Data Berhasil Diupdate')</script>";
	header("refresh:0;../Tampil.php");
} else {
	echo "<script> alert ('Data tidak berhasil diupdate')</script>";
	header("refresh:0;../Tampil.php");
}
