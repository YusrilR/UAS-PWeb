<?php
$koneksi = mysqli_connect("localhost","root","","pertanian");
if ($koneksi) {
  echo "Koneksi sukses....";
}


//php insert
if (isset($_POST['Simpan']))
{
  $id = $_POST['id_produk'];
  $nama = $_POST['nama_produk'];
  $Ket = $_POST['keterangan'];
  $sql = "INSERT INTO `produk_pertanian` (`id_produk`, `nama_produk`, `keterangan`)
  VALUES ('$id', '$nama', '$Ket')";

  if (mysqli_query($koneksi,$sql)) {
    echo '<script type="text/javascript">',
     'setTimeout(function() { alert("New record created successfully !"); }, 1);',
     '</script>';
  } else{
    echo "Error: ". $sql ." ".mysqli_error($koneksi);
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>connect_pweb_pert</title>
  </head>
  <body>
<!-- insert data -->
<form class="" action="tugas.php" method="POST">
  <table>
    <tr>
      <td>ID_PRODUK</td>
      <td>:</td>
      <td> <input type="text" name="id_produk" value=""> </td>
    </tr>
    <tr>
      <td>NAPROD</td>
      <td>:</td>
      <td> <input type="text" name="nama_produk" value=""> </td>
    </tr>
    <tr>
      <td>KETERANGAN</td>
      <td>:</td>
      <td> <input type="text" name="keterangan" value=""> </td>
    </tr>
    <tr>
      <button type="submit" name="Simpan">Simpan</button>
    </tr>
  </table>
</form>



<!-- View Data -->
    <table border="1" >
      <thead>
      <tr>
        <td>ID_PRODUK</td>
        <td>NAPROD</td>
        <td>KETERANGAN</td>
      </tr>
      </thead>
      <?php $database ="select * from produk_pertanian" ;
      $query = mysqli_query($koneksi,$database);
      while ($a = mysqli_fetch_array($query)) {


      ?>
      <tbody>
        <tr>
          <td><?php echo $a['id_produk']; ?></td>
          <td> <?php echo $a['nama_produk']; ?> </td>
          <td><?php echo $a['keterangan']; ?></td>
        </tr>
      </tbody>
    <?php } ?>
    </table>
  </body>
</html>
