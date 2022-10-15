<!DOCTYPE html>
<?php
include 'koneksi.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">

    <style>
    body {
      padding-top: 5rem;
    }
    .starter-template {
      padding: 3rem 1.5rem;
      text-align: center;
    }
    .footer {
      color:white;
      position: relative;
      bottom: 0;
      width: 100%;
      height: 60px; /* Set the fixed height of the footer here */
      line-height: 60px; /* Vertically center the text there */
      background-color: #28a745;
    }

    </style>

</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color : #28a745;">
    <a class="navbar-brand" href="#">Utama</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Halaman Utama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pengumuman.php">Pengumuman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeri.php">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak Kami</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="transaksi.php">Transaksi <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item active">
          <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i> Masuk Ke Data Master</a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="jumbotron-fluid text-center">
      <h1>Transaksi</h1>
      <p></p>
    </div>

  <main role="main" class="container">

    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol style="background: rgba(255, 255, 255, 0);" class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Halaman Utama</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
          </ol>
        </nav>
      </div>

     <div class="col-md-12 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
          Padi Siap Jual
        </h3>

        <div class="col-md-12">
          <div class="card-body">
            <table class="table">
              <thead style="background-color: #28a745;color:white;">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Padi</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Tangal Tanam</th>
                  <th scope="col">Tanam Panen</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>

              <?php
              $no = 1;
              $database = "SELECT * FROM padi";
              $query = mysqli_query($koneksi,$database);
              while ($a=mysqli_fetch_array($query)) {
              ?>
              <tbody>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $a['nama_padi']; ?></td>
                  <td><?php echo $a['harga']; ?></td>
                  <td><?php echo $a['stok']; ?></td>
                  <td><?php echo $a['tanggal_tanam']; ?></td>
                  <td><?php echo $a['tanggal_panen']; ?></td>
                  <td>
                    <?php
                    $datepanen = $a['tanggal_panen'];
                    $datenow = date("Y-m-d");
                    if ($datepanen <= $datenow) {
                      echo "Siap panen";
                      $panen = "Ok";
                    } else {
                      echo "Belum Siap Panen";
                      $panen = "No";
                    }
                    ?>
                  </td>
                  <td>
                    <?php  
                    if ($panen=="Ok") {
                      echo '
                      <form action="" method="POST">
                      <a class="btn btn-primary btn-sm" href="#keranjang" data-toggle="modal">Masukkan Keranjang</a>
                      </form>';
                    } else {
                      echo"Belum Bisa Dibeli";  
                    }
                    ?>
                  </td>
                  <div class="modal fade" id="keranjang" role="dialog">
                      <div class="modal-dialog  ">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5>Masukan jumlah barang yang ingin anda beli</h5><br>
                          </div>
                          <div class="modal-body">
                            <input type="text" class="form-control" name="inputjumlahbr">
                            <b>Note : dimohon untuk membeli tidak lebih dari stok yang tersedia</b>
                          </div>
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="btninputjumlahbr" value="Beli">
                            <button class="btn btn-primary" data-dismiss="modal">Batal</button>  
                          </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
                </tr>
              </tbody>
              <?php
                      }
                        ?>
            </table>

        <form action="proses_transaksi.php" method="post">
        <div class="col-md-12">
          <hr>
            <div class="row form-group">
              <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Nama Lengkap</label></div>
              <div class="col col-sm-6"><input type=text id="input-normal" name="nama" class="form-control" placeholder="Nama Anda"></div>
            </div>

            <div class="row form-group">
              <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Alamat Lengkap</label></div>
              <div class="col col-sm-6"><input type=text id="input-normal" name="alamat" class="form-control" placeholder="Alamat Lengkap"></div>
            </div>

            <div class="row form-group">
              <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">No. Telp</label></div>
              <div class="col col-sm-6"><input type=text id="input-normal" name="telp" class="form-control" placeholder="No. Telp"></div>
            </div>

            <div class="row form-group">
              <div class="col col-sm-5"><label for="input-normal" class="form-control-label">Jenis Kelamin</label></div>
              <div class="col col-sm-6">
                <input type="radio" name="jk" value="L"> Laki - Laki
                <input type="radio" name="jk" value="P"> Perempuan
              </div>
            </div>

            <div class="col-md-12">
              <center>
                <button name="beli" class="col-md-8 btn btn-success btn-md">Check Out</button>
              </center>
            </div>

          </form>

        </div>

      </div><!-- /.blog-main -->

    </div><!-- /.row -->

  </main><!-- /.container -->

  <footer class="footer" style="margin-top:30px;">
    <div class="container">
      <span>Copyright © 2020-present - Farming. All Rights Reserved.</span>
    </div>
  </footer>



  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
