<?php
include("koneksi.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pertanian</title>
</head>
<body>
	<form action="" method="POST">
		<input type="number" name="id" placeholder="Masukan Id Pengumuman" size="50" required><br>
		<input type="text" name="nama" placeholder="Masukan judul pengumuman" size="25" required><br>
		<textarea rows="4" cols="25" name="ket" placeholder="Masukan Isi Pengumuman" size="30" required></textarea><br>
		<input type="submit" name="submit" value="submit">

	</form>
	<hr>
</body>
</html>

<?php
if (isset($_POST["submit"]))
{
 $id = $_POST["id"];
 $name = $_POST["nama"];
 $ket = $_POST["ket"];

$sql = "INSERT INTO PRODUK_PERTANIAN VALUE('$id','$name','$ket')";
mysqli_query($conn,$sql);
}

$sql = "select * from PRODUK_PERTANIAN";
$hasil = mysqli_query($conn,$sql);
if(mysqli_num_rows($hasil)>0)
{
	echo "<thead>";
    echo "<tr><th>ID</th><th>Nama</th><th>Keterangan</th><th>Hapus</th></tr></thead>";
    while($row = mysqli_fetch_assoc($hasil))
    {
    	echo '
			<tbody>
    	<tr>
		<td>ID_'.$row["ID_Produk"].'</td>
		<td>'.$row["Nama_Produk"].'</td>
		<td>'.$row["Keterangan"].'</td>
		<td><a href="\php/insertdata.php?ID_Produk='.$row["ID_Produk"].'"\>Hapus</a></td>
		</tr>
		</tbody>
		';
    }
}


if(isset($_GET['ID_Produk']))
{
	$id = $_GET['ID_Produk'];
	$sql = "DELETE FROM PRODUK_PERTANIAN WHERE ID_Produk = '$id'";
	if (mysqli_query($conn, $sql)){
		header("Location: http://localhost/PHP/insertdata.php");
	}
}

?>
