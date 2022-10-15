<?php
$koneksi = mysqli_connect("localhost","root","","pertanian");

// Check Connection
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " .mysqli_connect_error();
}
?>
