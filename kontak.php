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
        <li class="nav-item">
          <a class="nav-link" href="galeri.php">Galeri</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="kontak.php">Kontak Kami <span class="sr-only">(current)</span></a>
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
      <h1>Kontak Kami</h1>
      <p></p>
    </div>

  <main role="main" class="container">

    <div class="row text-center">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol style="background: rgba(255, 255, 255, 0);" class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Halaman Utama</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
          </ol>
        </nav>
      </div>

      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">

        </h3>

        <div class="row">
          <div class="col-md-6">
            <img class="rounded-circle" src="gambar/bagus.jpeg" alt="" style="width:250px;" />
            <div class="team-content">
              <h3 class="title">Ahmad Bagus Zanuar</h3>
              <br>
              <small class="nim">18410100099</small>
              <br>
              <small>Email: <b>18410100099@dinamika.ac.id</b></small>
              <br>
              <a href="https://www.instagram.com/baguszanuar.13/"><img style="width:50px;height:50px;" src="vendor/ig.png" alt=""></i></a>
            </div>
            <br>
          </div>

          <div class="col-md-6">
            <img class="rounded-circle" src="gambar/ly.jpg" alt="" style="width:250px;" />
            <div class="team-content">
              <h3 class="title">Kori Ardila</h3>
              <br>
              <small class="nim">18410100122</small>
              <br>
              <small>Email: <b>18410100122@dinamika.ac.id</b></small>
              <br>
              <a href="https://www.instagram.com/kori.ardila/"><img style="width:50px;height:50px;" src="vendor/ig.png" alt=""></i></a>
            </div>
          </div>

          <div class="col-md-6">
            <img class="rounded-circle" src="gambar/yusril.jpeg" alt="" style="width:250px;" />
            <div class="team-content">
              <h3 class="title">Yusril Rahardian</h3>
              <br>
              <small class="nim">18410100133</small>
              <br>
              <small>Email: <b>18410100133@dinamika.ac.id</b></small>
              <br>
              <a href="https://www.instagram.com/maersyhl/"><img style="width:50px;height:50px;" src="vendor/ig.png" alt=""></i></a>
            </div>
          </div>

          <div class="col-md-6">
            <img class="rounded-circle" src="gambar/zakky.jpeg" alt="" style="width:250px;" />
            <div class="team-content">
              <h3 class="title">Zakky Amirul Hakim</h3>
              <br>
              <small class="nim">18410100130</small>
              <br>
              <small>Email: <b>18410100130@dinamika.ac.id</b></small>
              <br>
              <a href="https://www.instagram.com/zakkyhakim_tulen/"><img style="width:50px;height:50px;" src="vendor/ig.png" alt=""></i></a>
            </div>
          </div>

        </div>

      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">About</h4>
          <p class="mb-0">Farming merupakan website yang memnyediakan berita - berita seputar pertanian disertai dengan adanya transaksi yaitu penjualan padi.</p>
        </div>

        <div class="p-3">
          <h4 class="font-italic">Popular Search Indonesia</h4>
          <ol class="list-unstyled mb-0">
            <?php
              $keywords = json_decode(file_get_contents('http://tools.dojo.cc/api/trends/p19/keywords'), true);
              foreach($keywords as $keyword)
              {
              echo '<li>'.'<a href="http://domain.com/tag/'. str_replace(' ', '-', $keyword) . '">' . $keyword .   '</a>'.'</li>';
              }
            ?>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->

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
