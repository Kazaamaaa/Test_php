<?php
// cek apakah tombol login ditekan
if (isset($_POST['formlogin'])) {
    // pemanggilan file dbconfig
    require_once('koneksi.php');
    // terima input dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    // cari data user berdasarkan username
    $cariuser = "SELECT * FROM user WHERE username = '$username'";
    // eksekusi query
    $hasil = mysqli_query($koneksi, $cariuser);
    // jika username ditemukan
    if (mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_array($hasil);
        // enkripsi input password
        $enc_pass = md5($password);
        // cek apakah password benar
        if ($enc_pass == $data['password']) {
            // masuk ke halaman dashboard
            header('location: ../index.php');
        }
        // jika password salah
        else {
            // kembali ke halaman login
            header('location: ../login.php?err=2');
            exit();
        }
    }
    // jika username tidak ditemukan
    else {
        // kembali ke halaman login
        header('location: ../login.php?err=1');
        exit();
    }
    mysqli_close($koneksi);
}
// jika proses login diakses melalui url
else {
    header('location: ../login.php');
    exit();
}
