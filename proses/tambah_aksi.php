<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$Nip = $_POST['Nip'];
$Nama = $_POST['Nama'];
$Jk = $_POST['Jk'];
$Gaji = $_POST['Gaji'];

// menginput data ke database
$simpan = mysqli_query($koneksi, "insert into tblpegawai values('','$Nip','$Nama','$Jk','$Gaji')") or die(mysqli_error($con));

// mengalihkan halaman kembali ke index.php
if ($simpan) {
	echo "<script> alert ('Data Berhasil Disimpan')</script>";
	header("refresh:0;../Tampil.php");
} else {
	echo "<script> alert ('Data tidak berhasil disimpan')</script>";
	header("refresh:0;../Tampil.php");
}

?>

?>