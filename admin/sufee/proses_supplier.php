<?php
$database = "SELECT max(id_supplier) as maxKode FROM supplier";
$query = mysqli_query($koneksi,$database);
$data = mysqli_fetch_array($query);

if ($data['maxKode']!=null) {
  $kodesupplier = $data['maxKode'];
  $urutan = (int) substr($kodesupplier, 3, 3);
  $urutan++;
  $huruf = "SP";
  $kodesupplier = $huruf . sprintf("%03s", $urutan);
} else {
  $kodesupplier = "SP001";
}

if (isset($_POST['inputsupplier'])) {
  $id_supplier = $_POST['id_supplier'];
  $nama_supplier = $_POST['nama_supplier'];
  $no_telp = $_POST['no_telp'];
  $alamat = $_POST['alamat'];
  $sql = "INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_telp`, `alamat`) VALUES ('$id_supplier','$nama_supplier','$no_telp','$alamat')";
  if (mysqli_query($koneksi,$sql)) {
    echo "sukses";

    $database = "SELECT max(id_supplier) as maxKode FROM supplier";
    $query = mysqli_query($koneksi,$database);
    $data = mysqli_fetch_array($query);
    if ($data['maxKode']!=null) {
      $kodesupplier = $data['maxKode'];
      $urutan = (int) substr($kodesupplier, 3, 3);
      $urutan++;
      $huruf = "SP";
      $kodesupplier = $huruf . sprintf("%03s", $urutan);
    } else {
      $kodesupplier = "SP001";
    }

  } else {
    echo "Error: " . $sql . " " . mysqli_error($koneksi);
  }
}

if(isset($_GET['id_deletesp']))
{
$id = $_GET['id_deletesp'];
$delbrg = "DELETE FROM barang WHERE id_supplier='$id'";
$query = mysqli_query($koneksi,$delbrg);
$delsp = "DELETE FROM supplier WHERE id_supplier='$id'";
$query = mysqli_query($koneksi,$delsp);
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

  $database = "SELECT max(id_supplier) as maxKode FROM supplier";
  $query = mysqli_query($koneksi,$database);
  $data = mysqli_fetch_array($query);
  if ($data['maxKode']!=null) {
    $kodesupplier = $data['maxKode'];
    $urutan = (int) substr($kodesupplier, 3, 3);
    $urutan++;
    $huruf = "SP";
    $kodesupplier = $huruf . sprintf("%03s", $urutan);
  } else {
    $kodesupplier = "SP001";
  }

} else {
  echo "Error: " . $sql . " " . mysqli_error($koneksi);
}
}

?>
