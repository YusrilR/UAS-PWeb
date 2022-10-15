<?php
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

if (isset($_POST['inputbarang'])) {
  $id_barang = $_POST['id_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  $id_supplier = $_POST['id_supplier'];
  $tanggal_tanam = $_POST['tanggal_tanam'];
  $tanggal_panen = $_POST['tanggal_panen'];
  $sql = "INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `id_supplier`,`tanggal_tanam`,`tanggal_panen`) VALUES ('$id_barang','$nama_barang',$harga,$stok, '$id_supplier','$tanggal_tanam','$tanggal_panen')";
  if (mysqli_query($koneksi,$sql)) {
    echo "sukses";

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
  echo "sukses";

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

?>
