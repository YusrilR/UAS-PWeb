<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Pertanian";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
	echo "Koneksi Sukses";
}
?>