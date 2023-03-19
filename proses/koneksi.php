<?php 
$koneksi = mysqli_connect("localhost","root","","dbweb");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>

<?php 
//membuat format rupiah dengan PHP
 
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>