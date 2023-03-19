<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
$hapus = mysqli_query($koneksi, "delete from tblpegawai where id='$id'") or die(mysqli_error($con));

// mengalihkan halaman kembali ke index.php
if ($hapus > 0) {
	echo "<script> alert ('Data Berhasil Dihapus')</script>";
	header("refresh:0;../Tampil.php");
} else {
	echo "<script> alert ('Data tidak berhasil dihapus')</script>";
	header("refresh:0;../Tampil.php");
}
