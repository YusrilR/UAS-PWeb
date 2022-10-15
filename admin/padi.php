<!DOCTYPE html>
<?php
include '../koneksi.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

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
                    <a class="nav-link" href="admin.php">
                      <span data-feather="home"></span>
                      Dashboard
                    </a>
                  </li>
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Data Master</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                      <span data-feather="plus-circle"></span>
                    </a>
                  </h6>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">
                      <span data-feather="file"></span>
                      Padi <span class="sr-only">(current)</span>
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
                <h1 class="h2">Padi</h1>
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

              <div class="col-lg-12">
                <?php
                include 'proses_padi.php';
                ?>
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Tabel Padi</strong>
                  </div>

                  <div class="card-body card-block">
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal" enctype="multipart/form-data">
                      <div class="row form-group">
                        <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">ID Padi</label></div>
                        <div class="col col-sm-6"><input type=text id="input-normal" name="id_padi" value="<?php echo htmlentities($kodePadi); ?>" class="form-control" readonly></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Nama Padi</label></div>
                        <div class="col col-sm-6"><input type=text id="input-normal" name="nama_padi" placeholder="Nama Padi" class="form-control" value="<?php echo htmlentities($nama_padi); ?>"></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Harga</label></div>
                        <div class="col col-sm-6"><input type=text id="input-normal" name="harga" placeholder="Harga" class="form-control" value="<?php echo htmlentities($harga); ?>"></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Stok</label></div>
                        <div class="col col-sm-6"><input type=text id="input-normal" name="stok" placeholder="Stok" class="form-control" value="<?php echo htmlentities($stok); ?>"></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Supplier</label></div>
                        <div class="col col-sm-6">
                          <select name="id_supplier" class="form-control">
                            <?php
                            // if (isset($_GET['id_editbrg'])) {
                            //   $database = "SELECT id_supplier,nama_supplier FROM supplier where id_supplier='$id_supplier'";
                            // } else {
                            //   $database = "SELECT id_supplier,nama_supplier FROM supplier";
                            // }
                            $database = "SELECT id_supplier,nama_supplier FROM supplier";
                           $query = mysqli_query($koneksi,$database);
                            while ($a=mysqli_fetch_array($query)) {
                            ?>
                            <!--  -->
                              <option value="<?php echo $a['id_supplier']; ?>">
                              <?php echo $a['nama_supplier'];?>
                            </option>

                          <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Tanggal Tanam</label></div>
                        <div class="col col-sm-6"><input type=date id="input-normal" name="tanggal_tanam" class="form-control" value="<?php echo htmlentities($tanggal_tanam); ?>"></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Tanggal Panen</label></div>
                        <div class="col col-sm-6"><input type=date id="input-normal" name="tanggal_panen" class="form-control" value="<?php echo htmlentities($tanggal_panen); ?>"></div>
                      </div>
                      <input type=submit class="btn btn-primary btn-sm" name="inputpadi" value="Input">
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                      <button name="brgbaru" class="btn btn-secondary btn-sm">
                        Data Baru
                      </button>
                    </form>
                  </div>

                  <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID Padi</th>
                          <th scope="col">Nama Padi</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Stok</th>
                          <th scope="col">Supplier</th>
                          <th scope="col">Tangal Tanam</th>
                          <th scope="col">Tanam Panen</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">Opsi</th>
                        </tr>
                      </thead>

                      <?php
                      $database = "SELECT * FROM padi";
                      $query = mysqli_query($koneksi,$database);
                      while ($a=mysqli_fetch_array($query)) {
                      ?>

                      <tbody>
                        <tr>
                          <td><?php echo $a['id_padi']; ?></td>
                          <td><?php echo $a['nama_padi']; ?></td>
                          <td><?php echo $a['harga']; ?></td>
                          <td><?php echo $a['stok']; ?></td>
                          <td><?php echo $a['id_supplier']; ?></td>
                          <td><?php echo $a['tanggal_tanam']; ?></td>
                          <td><?php echo $a['tanggal_panen']; ?></td>
                          <td>
                            <?php
                            $datepanen = $a['tanggal_panen'];
                            $datenow = date("Y-m-d");
                            if ($datepanen >= $datenow) {
                              echo "Siap panen";
                            } else {
                              echo "Belum Siap Panen";
                            }
                            ?>
                          </td>
                          <td><a class="btn btn-primary btn-sm" href="?id_editbrg=<?php echo $a['id_padi']; ?>">Edit</a> || <a class="btn btn-danger btn-sm" href="?id_deletebrg=<?php echo $a['id_padi']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data id padi = <?php echo $a['id_padi']; ?> ?');">Delete</a></td>
                        </tr>
                      </tbody>
                      <?php
                              }
                                ?>
                    </table>

                  </div>
                </div>
              </div>

            </main>
          </div>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
