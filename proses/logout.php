<?php
// mulai session
session_start();
// hapus session
session_destroy();
// alihkan ke halaman index
header('location: ../index.php');
exit();
