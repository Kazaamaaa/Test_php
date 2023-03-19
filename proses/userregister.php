<?php
// cek apakah tombol register ditekan
if (isset($_POST['formregister'])) {
 require_once('koneksi.php');
 // terima data dari form register
 $username = mysqli_real_escape_string($koneksi, $_POST['username']);
 $password = mysqli_real_escape_string($koneksi, $_POST['password']);
 $confpass = mysqli_real_escape_string($koneksi, $_POST['conf_password']);
 $namauser = mysqli_real_escape_string($koneksi, $_POST['namalengkap']);
 // cek password konfirmasi
 if ($password == $confpass) {
 // enkripsi password
 $pass_encrypt = md5($password);
 $simpan = "INSERT INTO user (`username`, `password`, `nama`)
 VALUES ('$username', '$pass_encrypt', '$namauser')";
 // jika sukses register
 if (mysqli_query($koneksi, $simpan)) {
 // arahkan ke halaman login
 header('location: ../login.php');
 exit();
 }
 // jika gagal register
 else {
 echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
 echo "<br><br> <a href='../register.php'>Kembali</a>";
 }
 }
 // jika password konfirmasi tidak sama
 else {
 // kembali ke halaman register
 header('location: ../register.php?err=1');
 exit();
 }
 mysqli_close($koneksi);
}
// jika proses diakses dari url
else {
 header('location: ../register.php');
 exit();
}
