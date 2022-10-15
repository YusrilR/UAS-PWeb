<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Utama</title>

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
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Halaman Utama <span class="sr-only">(current)</span></a>
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

  <main role="main" class="container">

    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
          Farming-Home
        </h3>

        <div class="blog-post">
          <h2 class="blog-post-title">Home</h2>
          <p class="blog-post-meta">Jully 1, 2020 by Kelompok Pertanian</p>

        <div class="col-md-6">
          <h1>Berita</h1>
          <a href="https://money.kompas.com/read/2020/04/22/151233926/di-tengah-wabah-covid-19-mentan-lepas-ekspor-pertanian-senilai-rp-237-miliar">
          <p>Di Tengah Wabah Covid-19, Mentan Lepas Ekspor Pertanian Senilai Rp 23,7 Miliar</p></a>
          <p>KOMPAS.com – Wabah coronavirus disease 2019 (Covid-19) bukan hanya berdampak pada bidang kesehatan, namun juga perekonomian secara global. Meski begitu, Menteri Pertanian (Mentan) Syahrul Yasin Limpo mengatakan sektor pertanian di Indonesia haruslah tetap produktif dan tak terpengaruh wabah Covid-19. Hal itu dibuktikan Mentan dengan melepas ekspor komoditas pertanian kacang mete, olahan minyak Cashew Nut Shell Liquid (CNSL), dedek gandum, merica, dan cengkeh dari Salodong Makassar, Rabu (22/4/2020).<br><center>Untuk melihat lebih banyak berita anda bisa mengklik tombol dibawah ini</center>
          </p>
          <a class="btn btn-success" href="berita.php">Klik Disini</a>
        </div>

        <div class="col-md-6">
          <h1>Tutorial Bertani</h1>
          <p>Cara Menanam Padi Yang Terbukti Menghasilkan 12Ton/Ha</p>
          <p>Cara menanam padi yang telah terbukti menghasilkan 12Ton/Ha, cara ini sudah kami terapkan pada salah satu mitra kami di Kab. Ngawi. Sebelum kita membahas cara menanam padi, dulur-dulur harus mengetahui fase pada tanaman padi, tanaman padi terdapat tiga fase pertumbuhan, yaitu fase vegetatif, fase generatif dan fase pemasakan.
          Kebutuhan air, nutrisi dan hormon pada ketiga fase tersebut bervariasi yaitu tahap pembentukan akar, pembentukan anakan aktif, anakan maksimum, inisiasi pembentukan malai, fase bunting dan fase pembungaan.</p><br><br><center>Untuk selengkapnya anda bisa mengklik tombol dibawah ini</center><br>
            <a class="btn btn-success" href="https://gdmorganic.com/cara-menanam-padi/">Klik Disini</a>
        </div>
        <br>
        </div><!-- /.blog-post -->

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
