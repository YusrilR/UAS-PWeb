<?php
error_reporting(0);
$database = "SELECT max(id_barang) as maxKode FROM barang";
$query = mysqli_query($koneksi,$database);
$data = mysqli_fetch_array($query);

if ($data['maxKode']!=null) {
  $kodeBarang = $data['maxKode'];
  $urutan = (int) substr($kodeBarang, 3, 3);
  $urutan++;
  $huruf = "BR";
  $kodeBarang = $huruf . sprintf("%03s", $urutan);
} else {
  $kodeBarang = "BR001";
}

$nama_barang = "";
$harga = "";
$stok = "";
$id_supplier = "";
$tanggal_tanam = "";
$tanggal_panen = "";

if (isset($_POST['inputbarang'])) {
  $id_barang = $_POST['id_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  $id_supplier = $_POST['id_supplier'];
  $tanggal_tanam = $_POST['tanggal_tanam'];
  $tanggal_panen = $_POST['tanggal_panen'];

  $cek_isi = "SELECT * from barang where id_barang='$id_barang'";

  if (mysqli_query($koneksi,$cek_isi) != 0) {
    $sql = "UPDATE `barang` SET `nama_barang` = '$nama_barang', `harga` = $harga, `stok` = $stok, `id_supplier` = '$id_supplier', `tanggal_tanam` = '$tanggal_tanam', `tanggal_panen` = '$tanggal_panen' WHERE `id_barang` = '$id_barang'";
  } else {
    $sql = "INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `id_supplier`,`tanggal_tanam`,`tanggal_panen`) VALUES ('$id_barang','$nama_barang',$harga,$stok, '$id_supplier','$tanggal_tanam','$tanggal_panen')";
  }

  if (mysqli_query($koneksi,$sql)) {
    echo '<div class="alert alert-success" role="alert">
    Data Sukses Diinputkan
  </div>';

    $database = "SELECT max(id_barang) as maxKode FROM barang";
    $query = mysqli_query($koneksi,$database);
    $data = mysqli_fetch_array($query);

    if ($data['maxKode']!=null) {
      $kodeBarang = $data['maxKode'];
      $urutan = (int) substr($kodeBarang, 3, 3);
      $urutan++;
      $huruf = "BR";
      $kodeBarang = $huruf . sprintf("%03s", $urutan);
    } else {
      $kodeBarang = "BR001";
    }

  } else {
    echo "Error: " . $sql . " " . mysqli_error($koneksi);
  }
}

if(isset($_GET['id_deletebrg']))
{
$id = $_GET['id_deletebrg'];
$database = "DELETE FROM barang WHERE id_barang='$id'";
$query = mysqli_query($koneksi,$database);
if ($query) {
  echo '<div class="alert alert-success" role="alert">
  Data Sukses Dihapus
</div>';

  $database = "SELECT max(id_barang) as maxKode FROM barang";
  $query = mysqli_query($koneksi,$database);
  $data = mysqli_fetch_array($query);

  if ($data['maxKode']!=null) {
    $kodeBarang = $data['maxKode'];
    $urutan = (int) substr($kodeBarang, 3, 3);
    $urutan++;
    $huruf = "BR";
    $kodeBarang = $huruf . sprintf("%03s", $urutan);
  } else {
    $kodeBarang = "BR001";
  }

} else {
  echo "Error: " . $query . " " . mysqli_error($koneksi);
}
}

if (isset($_GET['id_editbrg'])) {
  $kodeBarang = $_GET['id_editbrg'];
  $database = "SELECT * FROM barang where id_barang='$kodeBarang'";
  $query = mysqli_query($koneksi,$database);
  while ($a=mysqli_fetch_array($query)) {
  $nama_barang = $a['nama_barang'];
  $harga = $a['harga'];
  $stok = $a['stok'];
  $id_supplier = $a['id_supplier'];
  $tanggal_tanam = $a['tanggal_tanam'];
  $tanggal_panen = $a['tanggal_panen'];
}
}

if (isset($_GET['brgbaru'])) {
  $database = "SELECT max(id_barang) as maxKode FROM barang";
  $query = mysqli_query($koneksi,$database);
  $data = mysqli_fetch_array($query);

  if ($data['maxKode']!=null) {
    $kodeBarang = $data['maxKode'];
    $urutan = (int) substr($kodeBarang, 3, 3);
    $urutan++;
    $huruf = "BR";
    $kodeBarang = $huruf . sprintf("%03s", $urutan);
  } else {
    $kodeBarang = "BR001";
  }
}

?>
