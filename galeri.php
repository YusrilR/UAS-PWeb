<!DOCTYPE html>
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
        <li class="nav-item active">
          <a class="nav-link" href="galeri.php">Galeri <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
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
      <h1>Galeri</h1>
      <p></p>
    </div>

  <main role="main" class="container">

    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol style="background: rgba(255, 255, 255, 0);" class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Halaman Utama</a></li>
            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
          </ol>
        </nav>
      </div>

      <div class="col-md-12 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
          Kumpul Gambar
        </h3>

        <div class="row">

          <?php
          include 'koneksi.php';
          $sql = "SELECT * FROM galeri";
          $query = mysqli_query($koneksi,$sql);
          while ($a = mysqli_fetch_array($query))
          {
          ?>

          <div class="col-md-4">
            <img width="300" src="admin/upload/<?php echo $a['gambar'];?>" alt="<?php echo $a['nama_gambar'];?>">
          </div>

          <?php
        }
          ?>
        </div>

      </div><!-- /.blog-main -->

    </div><!-- /.row -->

  </main><!-- /.container -->

  <footer class="footer" style="margin-top:30px;position:absolute;">
    <div class="container">
      <span>Copyright © 2020-present - Farming. All Rights Reserved.</span>
    </div>
  </footer>



  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
