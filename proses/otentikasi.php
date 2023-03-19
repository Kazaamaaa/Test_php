<?php
// jika session user kosong
if (!isset($_SESSION['user'])) {
 // alihkan ke halaman index
 header('location: index.php');
 exit();
}
