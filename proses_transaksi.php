<?php
$koneksi = mysqli_connect('localhost','root','','pertanian');

if(isset($_GET['id_delete_trans']))
{
$id = $_GET['id_delete_trans'];

$jmltrans = "SELECT jumlah_beli FROM transaksi WHERE id_transaksi=$id";
$query = mysqli_query($koneksi,$jmltrans);
$data = mysqli_fetch_array($query);
$jumlah_beli = $data['jumlah_beli'];

$dbstok = "SELECT id_padi,stok FROM padi WHERE id_padi='BR001'";
$query = mysqli_query($koneksi,$dbstok);
$data = mysqli_fetch_array($query);
if ($data['id_padi']!=null) {
  $stok_kembali = $data['stok']+$jumlah_beli ;
} else {
  echo "kosong";
}

$database = "UPDATE PADI SET stok=$stok_kembali WHERE id_padi='BR001'";
mysqli_query($koneksi,$database);
if (mysqli_query($koneksi,$database)) {
  echo "sukses";
} else {
  echo "Error: " . $query . " " . mysqli_error($koneksi);
}

$delete = "DELETE FROM transaksi WHERE id_transaksi=$id";
if (mysqli_query($koneksi,$delete)) {
  echo "sukses";
} else {
  echo "Error: " . $query . " " . mysqli_error($koneksi);
}

}

if (isset($_POST['beli'])) {
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

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$notelp = $_POST['telp'];
$alamat = $_POST['alamat'];
$jumlah_beli = 1;

$query = "INSERT INTO pembeli VALUES ('$kodePembeli','$nama','$jk','$notelp','$alamat')";

$sql = mysqli_query($koneksi,$query);

if ($sql) {
  echo "sukses";
} else {
  echo "Error: " . $sql . " " . mysqli_error($koneksi);
}

$database = "SELECT max(id_transaksi) as maxKode FROM transaksi";
$query = mysqli_query($koneksi,$database);
$data = mysqli_fetch_array($query);
if ($data['maxKode']!=null) {
  $kodeTransaksi = $data['maxKode'];
  $kodeTransaksi++;
} else {
  $kodeTransaksi = 1;
}
$date = date('Y-m-d');
$query = "INSERT INTO transaksi VALUES ('$kodeTransaksi','BR001','$kodePembeli',$jumlah_beli,'$date','Belum Proses')";
$sql = mysqli_query($koneksi,$query);

if ($sql) {
  echo "sukses";
} else {
  echo "Error: " . $sql . " " . mysqli_error($koneksi);
}

$database = "SELECT id_padi,stok FROM padi WHERE id_padi='BR001'";
$query = mysqli_query($koneksi,$database);
$data = mysqli_fetch_array($query);
if ($data['id_padi']!=null) {
  $stok_kurang = $data['stok']-$jumlah_beli ;
} else {
  echo "kosong";
}

$query = "UPDATE PADI SET stok=$stok_kurang WHERE id_padi='BR001'";
$sql = mysqli_query($koneksi,$query);
if ($sql) {
  echo "sukses";
} else {
  echo "Error: " . $sql . " " . mysqli_error($koneksi);
}
}

?>
