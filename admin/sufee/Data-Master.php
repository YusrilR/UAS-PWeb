<!doctype html>

<?php

// koneksi
$koneksi = mysqli_connect("localhost","root","","pertanian");
// if ($koneksi) {
// 	echo "Connection Established";
// }

?>

<!-- auto kode -->
<?php
$database = "SELECT max(id_gambar) as maxKode FROM galeri";
$query = mysqli_query($koneksi,$database);
$data = mysqli_fetch_array($query);

if ($data['maxKode']!=null) {
  $kodeBarang = $data['maxKode'];
  $urutan = (int) substr($kodeBarang, 3, 3);
  $urutan++;
  $huruf = "GB";
  $kodeBarang = $huruf . sprintf("%03s", $urutan);
} else {
  $kodeBarang = "GB001";
}
?>

<?php
$database = "SELECT max(id_barang) as maxKode FROM barang";
$query = mysqli_query($koneksi,$database);
$data = mysqli_fetch_array($query);

if ($data['maxKode']!=null) {
  $kodeBarang = $data['maxKode'];
  $urutan = (int) substr($kodeBarang, 3, 3);
  $urutan++;
  $huruf = "GB";
  $kodeBarang = $huruf . sprintf("%03s", $urutan);
} else {
  $kodeBarang = "GB001";
}
?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
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
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

  <!-- Left Panel -->

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <h3 class="menu-title">Data Master</h3><!-- /.menu-title -->
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tabel</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="fa fa-table"></i><a href="Data-Master.php">Tabel Master</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tabel Master</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Tabel Master</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include 'proses_barang.php';

        include 'proses_supplier.php';

        include 'proses_pembeli.php';
        ?>

        <?php
        // Handle Jika Button Save ditekan
        if(isset($_POST['save']))
        {
        	 // variable untuk mengambil inputan form
        	 $id = $_POST['id_gambar'];
        	 $nama = $_POST['nama_gambar'];
        	 $ket = $_POST['keterangan_gambar'];

        	 // file upload process
        	 $name = $_FILES['file']['name'];
           $target_dir = "upload/";
           $target_file = $target_dir . basename($_FILES["file"]["name"]);

        	 // Memilih tipe file
           $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        	 // File ekstensi yang valid
           $extensions_arr = array("jpg","jpeg","png","gif");
        	 // pengecekan format file
           if( in_array($imageFileType,$extensions_arr) ){

        	 // Memasukkan Record
        	 // $sql = "UPDATE galeri SET nama_gambar='$nama' , keterangan_gambar='$ket' , gambar='$name' WHERE id_gambar='$id'";

        	 $sql = "INSERT INTO galeri (id_gambar,nama_gambar,keterangan_gambar,gambar) VALUES ('$id','$nama','$ket','".$name."')";
        	 if (mysqli_query($koneksi, $sql)) {
            // echo '<script type="text/javascript">',
            //  'setTimeout(function() { alert("Record Baru Sukses Dibuat !"); }, 1);',
            //  '</script>';
             echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                 <span class="badge badge-pill badge-success">Success</span>
                     Data Sukses Diinputkan
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>';
        		 // echo '<script type="text/javascript">',
             //  'setTimeout(function() { alert("Record Sukses Diupdate !"); }, 1);',
             //  '</script>';
        	 } else {
        		echo "Error: " . $sql . " " . mysqli_error($koneksi);
        	 }
        	 // Upload file
             move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

          }
          $database = "SELECT max(id_gambar) as maxKode FROM galeri";
          $query = mysqli_query($koneksi,$database);
          $data = mysqli_fetch_array($query);

          if ($data['maxKode']!=null) {
            $kodeBarang = $data['maxKode'];
            $urutan = (int) substr($kodeBarang, 3, 3);
            $urutan++;
            $huruf = "GB";
            $kodeBarang = $huruf . sprintf("%03s", $urutan);
          } else {
            $kodeBarang = "GB001";
          }

        }

        ?>

        <?php
        if(isset($_GET['id_delete']))
        {
        $id = $_GET['id_delete'];
        $database = "SELECT * FROM galeri WHERE id_gambar='$id'";
        $query = mysqli_query($koneksi,$database);
        while ($a=mysqli_fetch_array($query)) {
        $gambar = "upload/".$a['gambar'];

        $deletegambar = $gambar;
        $sql = "DELETE FROM galeri WHERE id_gambar='$id'";

        if (mysqli_query($koneksi, $sql)) {
        	unlink($deletegambar);
        	// echo '<script type="text/javascript">',
        	//  'setTimeout(function() { alert("Menghapus Record Berhasil !"); }, 1);',
        	//  '</script>';

           echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
               <span class="badge badge-pill badge-success">Success</span>
                   Data Sukses Dihapus
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>';
        	 // header("Location: jadisatu.php");
        } else {
         echo "Error: " . $sql . "
        " . mysqli_error($koneksi);
        }
        }
        $database = "SELECT max(id_gambar) as maxKode FROM galeri";
        $query = mysqli_query($koneksi,$database);
        $data = mysqli_fetch_array($query);

        if ($data['maxKode']!=null) {
          $kodeBarang = $data['maxKode'];
          $urutan = (int) substr($kodeBarang, 3, 3);
          $urutan++;
          $huruf = "GB";
          $kodeBarang = $huruf . sprintf("%03s", $urutan);
        } else {
          $kodeBarang = "GB001";
        }
        }
        ?>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-lg-6">
                    <div class="card">

						<div class="card">
                      <div class="card-header">
                        <strong>Tabel Galeri</strong>
                      </div>
                      <div class="card-body card-block">
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal" enctype="multipart/form-data">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">ID Gambar</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="id_gambar" value="<?php echo $kodeBarang; ?>" class="form-control" readonly></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Nama Gambar</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="nama_gambar" placeholder="Nama Gambar" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Keterangan Gambar</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="keterangan_gambar" placeholder="Keterangan Gambar" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Gambar</label></div>
                            <div class="col col-sm-6"><input type="hidden" name="size" value="1000000"><input type="file" id="input-normal" name="file" placeholder="Gambar" class="form-control"></div>
                          </div>

                      </div>
                      <div class="card-footer">
                        <input type=submit class="btn btn-primary btn-sm" name="save" value="Input">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
						</form>
                      </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">nama_gambar</th>
                              <th scope="col">keterangan_gambar</th>
                              <th scope="col">gambar</th>
                              <th scope="col">Opsi</th>
                          </tr>
                      </thead>
                      <?php
                      $database = "SELECT * FROM galeri";
                      $query = mysqli_query($koneksi,$database);
                      while ($a=mysqli_fetch_array($query)) {
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $a['id_gambar']; ?></td>
                          <td><?php echo $a['nama_gambar']; ?></td>
                          <td><?php echo $a['keterangan_gambar']; ?></td>
                          <td><img style="width:150px;height:150px;" src="upload/<?php echo $a['gambar']; ?>"></td>
                          <td><a class="btn btn-danger btn-sm" href="?id_delete=<?php echo $a['id_gambar']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data id=<?php echo $a['id_gambar']; ?> ?');">Delete</td>
                      </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                    </table>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">

                      <?php
                      $database = "SELECT max(id_pengumuman) as maxKode FROM pengumuman";
                      $query = mysqli_query($koneksi,$database);
                      $data = mysqli_fetch_array($query);

                      if ($data['maxKode']!=null) {
                        $kodePengumuman = $data['maxKode'];
                        $kodePengumuman++;
                      } else {
                        $kodePengumuman = 1;
                      }
                      ?>

						<div class="card">
                      <div class="card-header">
                        <strong>Tabel pengumuman</strong>
                      </div>
                      <div class="card-body card-block">
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Number</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="id_pengumuman" value="<?php echo $kodePengumuman;?>" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Nama Pengumuman</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="nama_pengumuman" placeholder="Nama Pengumuman" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Keterangan Pengumuman</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="keterangan" placeholder="Keterangan Pengumuman" class="form-control"></div>
                          </div>

                      </div>
                      <div class="card-footer">
                        <input type=submit class="btn btn-primary btn-sm" name="submit" value="Input">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
						</form>
                      </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                          <?php
                          if (isset($_POST["submit"]))
                          {
                           $id = $_POST["id_pengumuman"];
                           $name = $_POST["nama_pengumuman"];
                           $ket = $_POST["keterangan"];

                          $sql = "INSERT INTO pengumuman VALUE('$id','$name','$ket')";
                          mysqli_query($koneksi,$sql);
                          echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                              <span class="badge badge-pill badge-success">Success</span>
                                  Data Sukses Diinputkan
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';
                          $database = "SELECT max(id_pengumuman) as maxKode FROM pengumuman";
                          $query = mysqli_query($koneksi,$database);
                          $data = mysqli_fetch_array($query);

                          if ($data['maxKode']!=null) {
                            $kodePengumuman = $data['maxKode'];
                            $kodePengumuman++;
                          } else {
                            $kodePengumuman = 1;
                          }
                          }

                          $sql = "select * from pengumuman";
                          $hasil = mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($hasil)>0)
                          {
                          	echo "<thead class='thead-dark'>";
                              echo "<tr><th>ID</th><th>Nama</th><th>Keterangan</th><th>Hapus</th></tr></thead>";
                              while($row = mysqli_fetch_assoc($hasil))
                              {
                              	echo '
                          			<tbody>
                              	<tr>
                          		<td>ID_'.$row["id_pengumuman"].'</td>
                          		<td>'.$row["nama_pengumuman"].'</td>
                          		<td>'.$row["keterangan"].'</td>
                          		<td><a href="Data-Master.php?id_pengumuman='.$row["id_pengumuman"].'"\>Hapus</a></td>
                          		</tr>
                          		</tbody>
                          		';
                              }
                          }
                          if(isset($_GET['id_pengumuman']))
                          {
                          	$id = $_GET['id_pengumuman'];
                          	$sql = "DELETE FROM pengumuman WHERE id_pengumuman = '$id'";
                          	if (mysqli_query($koneksi, $sql)){
                              echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                  <span class="badge badge-pill badge-success">Success</span>
                                      Data Sukses Dihapus
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>';
                          	}
                          }

                          ?>
                    </table>
                    </div>
                    </div>
                </div>

                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <strong class="card-title">Tabel Barang</strong>
                    </div>

                    <div class="card-body card-block">
                      <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">ID Barang</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="id_barang" value="<?php echo $kodeBarang; ?>" class="form-control" readonly></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Nama Barang</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="nama_barang" placeholder="Nama Barang" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Harga</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="harga" placeholder="Harga Barang" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Stok</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="stok" placeholder="Stok" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Supplier</label></div>
                          <div class="col col-sm-6">
                            <select name="id_supplier" class="form-control">
                              <?php
                              $database = "SELECT id_supplier,nama_supplier FROM supplier";
                              $query = mysqli_query($koneksi,$database);
                              while ($a=mysqli_fetch_array($query)) {
                              ?>
                              <option  value="<?php echo $a['id_supplier']; ?>">
                                <?php echo $a['nama_supplier'];?>
                              </option>

                            <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Tanggal Tanam</label></div>
                          <div class="col col-sm-6"><input type=date id="input-normal" name="tanggal_tanam" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Tanggal Panen</label></div>
                          <div class="col col-sm-6"><input type=date id="input-normal" name="tanggal_panen" class="form-control"></div>
                        </div>
                        <input type=submit class="btn btn-primary btn-sm" name="inputbarang" value="Input">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </form>
                    </div>

                    <div class="card-body">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID Barang</th>
                            <th scope="col">Nama Barang</th>
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
                        $database = "SELECT * FROM barang";
                        $query = mysqli_query($koneksi,$database);
                        while ($a=mysqli_fetch_array($query)) {
                        ?>

                        <tbody>
                          <tr>
                            <td><?php echo $a['id_barang']; ?></td>
                            <td><?php echo $a['nama_barang']; ?></td>
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
                            <td><a class="btn btn-danger btn-sm" href="?id_deletebrg=<?php echo $a['id_barang']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data id barang = <?php echo $a['id_barang']; ?> ?');">Delete</td>
                          </tr>
                        </tbody>
                        <?php
                                }
                                  ?>
                      </table>

                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <strong class="card-title">Tabel Supplier</strong>
                    </div>

                    <div class="card-body card-block">
                      <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">ID Supplier</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="id_supplier" value="<?php echo $kodesupplier; ?>" class="form-control" readonly></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Nama Supplier</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="nama_supplier" placeholder="Nama Supplier" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">No. Telp</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="no_telp" placeholder="No. Telp" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Alamat</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="alamat" placeholder="Alamat Supplier" class="form-control"></div>
                        </div>
                        <input type=submit class="btn btn-primary btn-sm" name="inputsupplier" value="Input">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </form>
                    </div>

                    <div class="card-body">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID Supplier</th>
                            <th scope="col">Nama Supplier</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Opsi</th>
                          </tr>
                        </thead>

                        <?php
                        $database = "SELECT * FROM supplier";
                        $query = mysqli_query($koneksi,$database);
                        while ($a=mysqli_fetch_array($query)) {
                        ?>

                        <tbody>
                          <tr>
                            <td><?php echo $a['id_supplier']; ?></td>
                            <td><?php echo $a['nama_supplier']; ?></td>
                            <td><?php echo $a['no_telp']; ?></td>
                            <td><?php echo $a['alamat']; ?></td>
                            <td><a class="btn btn-danger btn-sm" href="?id_deletesp=<?php echo $a['id_supplier']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data id Supplier = <?php echo $a['id_supplier']; ?> ?');">Delete</td>
                          </tr>
                        </tbody>
                        <?php
                                }
                                  ?>
                      </table>

                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <strong class="card-title">Tabel Pembeli</strong>
                    </div>

                    <div class="card-body card-block">
                      <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">ID Pembeli</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="id_pembeli" value="<?php echo $kodePembeli; ?>" class="form-control" readonly></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Nama Pembeli</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="nama_pembeli" placeholder="Nama Pembeli" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Jenis Kelamin</label></div>
                          <div class="col col-sm-6">
                            <select class="form-control" name="jk">
                              <option value="L">Laki - Laki</option>
                              <option value="P">Perempuan</option>
                            </select>
                            </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">No. Telp</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="no_telp" placeholder="No. Telp" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Alamat</label></div>
                          <div class="col col-sm-6"><input type=text id="input-normal" name="alamat" placeholder="Alamat Pembeli" class="form-control"></div>
                        </div>
                        <input type=submit class="btn btn-primary btn-sm" name="inputpembeli" value="Input">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </form>
                    </div>

                    <div class="card-body">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID Pembeli</th>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Opsi</th>
                          </tr>
                        </thead>

                        <?php
                        $database = "SELECT * FROM pembeli";
                        $query = mysqli_query($koneksi,$database);
                        while ($a=mysqli_fetch_array($query)) {
                        ?>

                        <tbody>
                          <tr>
                            <td><?php echo $a['id_pembeli']; ?></td>
                            <td><?php echo $a['nama_pembeli']; ?></td>
                            <td><?php echo $a['jk']; ?></td>
                            <td><?php echo $a['no_telp']; ?></td>
                            <td><?php echo $a['alamat']; ?></td>
                            <td><a class="btn btn-danger btn-sm" href="?id_deletepembeli=<?php echo $a['id_pembeli']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data id Pembeli = <?php echo $a['id_pembeli']; ?> ?');">Delete</td>
                          </tr>
                        </tbody>
                        <?php
                                }
                                  ?>
                      </table>

                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Head</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
