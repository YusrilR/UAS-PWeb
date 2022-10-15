<?php
$koneksi = mysqli_connect("localhost","root","","pertanian");
if ($koneksi) {
  echo "Koneksi Berhasi";
}


//php insert
if (isset($_POST['Simpan']))
{
  $id = $_POST['id_berita'];
  $nama = $_POST['nama_berita'];
  $Ket = $_POST['keterangan'];
  $sql = "INSERT INTO `berita_pertanian` (`id_berita`, `nama_berita`, `keterangan`)
  VALUES ('$id', '$nama', '$Ket')";

  if (mysqli_query($koneksi,$sql)) {
    echo '<script type="text/javascript">',
     'setTimeout(function() { alert("New record created successfully !"); }, 1);',
     '</script>';
  } else{
    echo "Error: ". $sql ." ".mysqli_error($koneksi);
  }
}

if (isset($_POST['Update']))
{
  $id = $_POST['id_berita'];
  $nama = $_POST['nama_berita'];
  $Ket = $_POST['keterangan'];
  $sql = "UPDATE berita_pertanian set nama_berita = '$nama', keterangan = '$Ket'
  WHERE id_berita = '$id'";
  if (mysqli_query($koneksi,$sql)) {
    echo '<script type="text/javascript">',
     'setTimeout(function() { alert("New record created successfully !"); }, 1);',
     '</script>';
  } else{
    echo "Error: ". $sql ." ".mysqli_error($koneksi);
  }
}

if (isset($_POST['Delete']))
{
  $id = $_POST['id_berita'];
  $nama = $_POST['nama_berita'];
  $Ket = $_POST['keterangan'];
  $sql = "DELETE FROM berita_pertanian WHERE id_berita = '$id'";
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
    <title>Tugas Web 8 18410100133</title>
  </head>
  <body>
<!-- insert data -->
<center>
  <form class="" action="Tugas8.php" method="POST">
    <table>
      <tr>
        <td>ID Berita</td>
        <td>:</td>
        <td> <input type="text" name="id_berita" value=""> </td>
      </tr>
      <tr>
        <td>Nama Berita</td>
        <td>:</td>
        <td> <input type="text" name="nama_berita" value=""> </td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td> <input type="text" name="keterangan" value=""> </td>
      </tr>
    </table>
    <table><br>
      <tr>
        <td>
          <button type="submit" name="Simpan">Simpan</button>
        </td>
        <td>
          <button type="submit" name="Update">Update</button>
        </td>
        <td>
          <button type="submit" name="Delete">Delete</button>
        </td>
      </tr>
    </table>
  </form>
</center>  



<!-- View Data -->
   <center>
    <table border="1" >
      <thead>
      <tr>
        <td>ID Berita</td>
        <td>Nama Berita</td>
        <td>Keterangan</td>
      </tr>
      </thead>
      <?php $database ="select * from berita_pertanian" ;
      $query = mysqli_query($koneksi,$database);
      while ($a = mysqli_fetch_array($query)) {


      ?>
      <tbody>
        <tr>
          <td><?php echo $a['id_berita']; ?></td>
          <td> <?php echo $a['nama_berita']; ?> </td>
          <td><?php echo $a['keterangan']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </center> 
  </body>
</html>
