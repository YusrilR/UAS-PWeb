<?php
error_reporting(0);
$database = "SELECT max(id_padi) as maxKode FROM padi";
$query = mysqli_query($koneksi,$database);
$data = mysqli_fetch_array($query);

if ($data['maxKode']!=null) {
  $kodePadi = $data['maxKode'];
  $urutan = (int) substr($kodePadi, 3, 3);
  $urutan++;
  $huruf = "BR";
  $kodePadi = $huruf . sprintf("%03s", $urutan);
} else {
  $kodePadi = "BR001";
}

$nama_padi = "";
$harga = "";
$stok = "";
$id_supplier = "";
$tanggal_tanam = "";
$tanggal_panen = "";

if (isset($_POST['inputpadi'])) {
  $id_padi = $_POST['id_padi'];
  $nama_padi = $_POST['nama_padi'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  $id_supplier = $_POST['id_supplier'];
  $tanggal_tanam = $_POST['tanggal_tanam'];
  $tanggal_panen = $_POST['tanggal_panen'];

  $cek_isi = "SELECT * from padi where id_padi='$id_padi'";
  $result = mysqli_query($koneksi, $cek_isi);
  if (mysqli_num_rows($result) > 0) {
    $sql = "UPDATE `padi` SET `nama_padi` = '$nama_padi', `harga` = $harga, `stok` = $stok, `id_supplier` = '$id_supplier', `tanggal_tanam` = '$tanggal_tanam', `tanggal_panen` = '$tanggal_panen' WHERE `id_padi` = '$id_padi'";
    echo '<div class="alert alert-success" role="alert">
    Data Sukses DiUpdate
  </div>';
  } else {
    $sql = "INSERT INTO `padi` (`id_padi`, `nama_padi`, `harga`, `stok`, `id_supplier`,`tanggal_tanam`,`tanggal_panen`) VALUES ('$id_padi','$nama_padi',$harga,$stok, '$id_supplier','$tanggal_tanam','$tanggal_panen')";
    echo '<div class="alert alert-success" role="alert">
    Data Sukses Di Inputkan
  </div>';
  }

  if (mysqli_query($koneksi,$sql)) {

  $nama_padi = "";
  $harga = "";
  $stok = "";
  $id_supplier = "";
  $tanggal_tanam = "";
  $tanggal_panen = "";
    $database = "SELECT max(id_padi) as maxKode FROM padi";
    $query = mysqli_query($koneksi,$database);
    $data = mysqli_fetch_array($query);

    if ($data['maxKode']!=null) {
      $kodePadi = $data['maxKode'];
      $urutan = (int) substr($kodePadi, 3, 3);
      $urutan++;
      $huruf = "BR";
      $kodePadi = $huruf . sprintf("%03s", $urutan);
    } else {
      $kodePadi = "BR001";
    }

  } else {
    echo "Error: " . $sql . " " . mysqli_error($koneksi);
  }
}

if(isset($_GET['id_deletebrg']))
{
$id = $_GET['id_deletebrg'];
$database = "DELETE FROM padi WHERE id_padi='$id'";
if (mysqli_query($koneksi,$database)) {
  echo '<div class="alert alert-success" role="alert">
  Data Sukses Dihapus
</div>';

  $database = "SELECT max(id_padi) as maxKode FROM padi";
  $query = mysqli_query($koneksi,$database);
  $data = mysqli_fetch_array($query);

  if ($data['maxKode']!=null) {
    $kodePadi = $data['maxKode'];
    $urutan = (int) substr($kodePadi, 3, 3);
    $urutan++;
    $huruf = "BR";
    $kodePadi = $huruf . sprintf("%03s", $urutan);
  } else {
    $kodePadi = "BR001";
  }

} else {
  echo "Error: " . $query . " " . mysqli_error($koneksi);
}
}

if (isset($_GET['id_editbrg'])) {
  $kodePadi = $_GET['id_editbrg'];
  $database = "SELECT * FROM padi where id_padi='$kodePadi'";
  $query = mysqli_query($koneksi,$database);
  while ($a=mysqli_fetch_array($query)) {
  $nama_padi = $a['nama_padi'];
  $harga = $a['harga'];
  $stok = $a['stok'];
  $id_supplier = $a['id_supplier'];
  $tanggal_tanam = $a['tanggal_tanam'];
  $tanggal_panen = $a['tanggal_panen'];
}
}

if (isset($_GET['brgbaru'])) {
  $database = "SELECT max(id_padi) as maxKode FROM padi";
  $query = mysqli_query($koneksi,$database);
  $data = mysqli_fetch_array($query);

  if ($data['maxKode']!=null) {
    $kodePadi = $data['maxKode'];
    $urutan = (int) substr($kodePadi, 3, 3);
    $urutan++;
    $huruf = "BR";
    $kodePadi = $huruf . sprintf("%03s", $urutan);
  } else {
    $kodePadi = "BR001";
  }
}

?>
