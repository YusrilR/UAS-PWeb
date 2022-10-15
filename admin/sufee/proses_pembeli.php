<?php
$database = "SELECT max(id_pembeli) as maxKode FROM pembeli";
$query = mysqli_query($koneksi,$database);
$data = mysqli_fetch_array($query);

if ($data['maxKode']!=null) {
  $kodePembeli = $data['maxKode'];
  $urutan = (int) substr($kodePembeli, 3, 3);
  $urutan++;
  $huruf = "PM";
  $kodePembeli = $huruf . sprintf("%03s", $urutan);
} else {
  $kodePembeli = "PM001";
}

if (isset($_POST['inputpembeli'])) {
  $id_pembeli = $_POST['id_pembeli'];
  $nama_pembeli = $_POST['nama_pembeli'];
  $jk = $_POST['jk'];
  $no_telp = $_POST['no_telp'];
  $alamat = $_POST['alamat'];
  $sql = "INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `jk`, `no_telp`, `alamat`) VALUES ('$id_pembeli','$nama_pembeli','$jk','$no_telp', '$alamat')";
  if (mysqli_query($koneksi,$sql)) {
    echo "sukses";

    $database = "SELECT max(id_pembeli) as maxKode FROM pembeli";
    $query = mysqli_query($koneksi,$database);
    $data = mysqli_fetch_array($query);

    if ($data['maxKode']!=null) {
      $kodePembeli = $data['maxKode'];
      $urutan = (int) substr($kodePembeli, 3, 3);
      $urutan++;
      $huruf = "PM";
      $kodePembeli = $huruf . sprintf("%03s", $urutan);
    } else {
      $kodePembeli = "PM001";
    }

  } else {
    echo "Error: " . $sql . " " . mysqli_error($koneksi);
  }
}

if(isset($_GET['id_deletepembeli']))
{
$id = $_GET['id_deletepembeli'];
$database = "DELETE FROM pembeli WHERE id_pembeli='$id'";
$query = mysqli_query($koneksi,$database);
if ($query) {
  echo "sukses";

  $database = "SELECT max(id_pembeli) as maxKode FROM pembeli";
  $query = mysqli_query($koneksi,$database);
  $data = mysqli_fetch_array($query);

  if ($data['maxKode']!=null) {
    $kodePembeli = $data['maxKode'];
    $urutan = (int) substr($kodePembeli, 3, 3);
    $urutan++;
    $huruf = "PM";
    $kodePembeli = $huruf . sprintf("%03s", $urutan);
  } else {
    $kodePembeli = "PM001";
  }

} else {
  echo "Error: " . $query . " " . mysqli_error($koneksi);
}
}

?>
