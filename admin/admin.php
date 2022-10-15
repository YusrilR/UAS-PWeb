<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/widgets.css">
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <title>Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    body {
      font-size: .875rem;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    /*
     * Sidebar
     */

    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100; /* Behind the navbar */
      padding: 0;
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 48px; /* Height of navbar */
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #999;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /*
     * Navbar
     */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

    .form-control-dark {
      color: #fff;
      background-color: rgba(255, 255, 255, .1);
      border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
      border-color: transparent;
      box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }

    /*
     * Utilities
     */

    .border-top { border-top: 1px solid #e5e5e5; }
    .border-bottom { border-bottom: 1px solid #e5e5e5; }

    </style>

  </head>
  <body>

    <?php
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../login.php?pesan=belum_login");
    }
    ?>

      <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Farming</a>
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="logout.php"> Sign out</a>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="admin.php">
                      <span data-feather="home"></span>
                      Dashboard <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Data Master</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                      <span data-feather="plus-circle"></span>
                    </a>
                  </h6>
                  <li class="nav-item">
                    <a class="nav-link" href="Data-Master.php">
                      <span data-feather="file"></span>
                      Barang
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="shopping-cart"></span>
                      Products
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="users"></span>
                      Customers
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="bar-chart-2"></span>
                      Reports
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="layers"></span>
                      Integrations
                    </a>
                  </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Saved reports</span>
                  <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
                <ul class="nav flex-column mb-2">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Current month
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Last quarter
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Social engagement
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Year-end sale
                    </a>
                  </li>
                </ul>
              </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                

                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                  </button>
                </div>
              </div>

              <div class="content mt-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-black bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <?PHP
                                include 'koneksi.php';
                                mysqli_select_db($koneksi,"pertanian");
                                $query = "select * from padi ";
                                $hasil = mysqli_query($koneksi,$query);
                                $count_padi = mysqli_num_rows($hasil);
                                ?>
                            </div>
                            <h4 class="mb-0">
                                <span class="count"><?php echo $count_padi ?></span>
                            </h4>
                            <p class="text-black">Jumlah Produk</p>
                            <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                                 Detail Produk
                            </button>
                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart1"></canvas>
                            </div>

                        </div>

                    </div>
                </div>
                <br>
                <!--/.col-->

                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Data Detail Tabel Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
              
                            <div class="modal-body">
                                <!-- Ini isinya modul pop up-->
                           <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID_Padi</th>
                                  <th scope="col">Nama_Padi</th>
                                  <th scope="col">Harga</th>
                                  <th scope="col">Stok</th>
                                  <th scope="col">ID_Supplier</th>
                                  <th scope="col">Tanggal_Tanam</th>
                                  <th scope="col">Tanggal_Panen</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  include 'koneksi.php';
                                  $tampil="select * from padi";
                                  $hasil2=mysqli_query($koneksi, $tampil);

                                  $no=1;
                                  while ($data=mysqli_fetch_array($hasil2, MYSQLI_ASSOC))
                                  {
                                    echo "<tr><td>$no</td><td>$data[id_padi]</td><td>$data[nama_padi]</td><td>$data[harga]</td><td>$data[stok]</td><td>$data[id_supplier]</td><td>$data[tanggal_tanam]</td><td>$data[tanggal_panen]</td></tr>";
                                    $no++;
                                  }
                                          
                                      echo "</tbody></table>";
                                ?>
                                </div>
                                    <p>
                                        There are three species of zebras.
                                    </p>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-black bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <?PHP
                                include 'koneksi.php';
                                mysqli_select_db($koneksi,"pertanian");
                                $query = "select * from transaksi ";
                                $hasil1 = mysqli_query($koneksi,$query);
                                $count_trans = mysqli_num_rows($hasil1);
                                ?>
                            </div>
                            <h4 class="mb-0">
                                <span class="count"><?php echo $count_trans ?></span>
                            </h4>
                              <p class="text-black">Jumlah Transaksi</p>
                              <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal1">
                                  Detail Transaksi
                              </button>
                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart1"></canvas>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="modal fade" id="mediumModal1" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel1">Data Detail Tabel Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
              
                            <div class="modal-body">
                                <!-- Ini isinya modul pop up-->
                           <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID_Transaksi</th>
                                  <th scope="col">ID_Padi</th>
                                  <th scope="col">ID_Pembeli</th>
                                  <th scope="col">Tanggal</th>
                                  <th scope="col">Keterangan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  include 'koneksi.php';
                                  $tampil="select * from transaksi";
                                  $hasil2=mysqli_query($koneksi, $tampil);

                                  $no=1;
                                  while ($data=mysqli_fetch_array($hasil2, MYSQLI_ASSOC)){
                                  echo "<tr><td>$no</td><td>$data[id_transaksi]</td><td>$data[id_padi]</td><td>$data[id_pembeli]</td><td>$data[tanggal]</td><td>$data[keterangan]</td></tr>";
                                  $no++;
                                  }
                                          
                                      echo "</tbody></table>";
                                ?>
                                </div>
                                    <p>
                                        There are three species of zebras.
                                    </p>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- GRAFIK BATANG-->
                <script type="text/javascript" src="chartjs/Chart.js"></script>
                <?php
                  $koneksi = mysqli_connect('localhost','root','','pertanian');
                  ?>

                  <div style="width: 800px;margin: 0px auto;">
                    <canvas id="myChart"></canvas>
                  </div>

                  <br/>
                  <br/>

                <div style="width: 800px;margin: 0px auto;">
                    <canvas id="myChartPie"></canvas>
                </div>

                  <br/>
                  <br/>

                  <script>
                    var ctx = document.getElementById("myChart").getContext('2d');
                    var myChart = new Chart(ctx, {
                      type: 'bar',
                      data: {
                        labels: ["Pembayaran Lunas", "Belum Lunas"],
                        datasets: [{
                          label: 'Pembayaran Lunas', 
                          data: [
                            <?php
                            $padi1 = mysqli_query($koneksi,"select * from transaksi where keterangan='Pembayaran Lunas'");
                            echo mysqli_num_rows($padi1);
                            ?>,
                            <?php
                            $padi2 = mysqli_query($koneksi,"select * from transaksi where keterangan='Belum Lunas'");
                            echo mysqli_num_rows($padi2);
                            ?>
                          ],
                          backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)'
                          ],
                          borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)'
                          ],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero:true
                            }
                          }]
                        }
                      }
                    });
                  </script>

                  <!-- DIAGRAM PIE -->

                  <script>
                    var ctx = document.getElementById("myChartPie").getContext('2d');
                    var myChart = new Chart(ctx, {
                      type: 'pie',
                      data: {
                        labels: ['Supplier 1', 'Supplier 2', 'Supplier 3', 'Supplier 4', 'Supplier 5'],
                        datasets: [{
                          data: [
                          <?php 
                            $padi1 = mysqli_query($koneksi,"select * from padi where id_supplier='SP001'");
                            echo mysqli_num_rows($padi1);
                                    ?>,
                          <?php
                            $padi2 = mysqli_query($koneksi,"select * from padi where id_supplier='SP002'");
                            echo mysqli_num_rows($padi2);
                          ?>,
                          <?php
                            $padi3 = mysqli_query($koneksi,"select * from padi where id_supplier='SP003'");
                            echo mysqli_num_rows($padi3);
                          ?>,
                          <?php
                            $padi4 = mysqli_query($koneksi,"select * from padi where id_supplier='SP004'");
                            echo mysqli_num_rows($padi4);
                          ?>,
                          <?php
                            $padi5 = mysqli_query($koneksi,"select * from padi where id_supplier='SP005'");
                            echo mysqli_num_rows($padi5);
                          ?>,
                          ],
                          backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',  
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(155, 306, 106, 0.2)',
                          'rgba(75, 192, 192, 0.2)'
                          ],
                          borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)'
                          ],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero:true
                            }
                          }]
                        }
                      }
                    });
                  </script>
            </main>
          </div>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


        <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <script>
            (function ($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>
  </body>
</html>
