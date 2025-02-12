<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mie Ayam Mas Don</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom icon template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../pkwu_home-master/img/logo.png" style="width: 50px" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Mie Ayam</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-solid fa-database"></i>
                    <span>Data Warung</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="menu.php">Menu</a>
                        <a class="collapse-item" href="keranjang.php ">Keranjang</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h2 class=" ml-2 mb-0 text-black-600">Halo Ming</h2>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4 class=" mb-0 text-gray">Data Menu</h4>
                    </div>

                    <button type="button" class="btn btn-primary btn-md mr-2" data-bs-toggle="modal"
                        data-bs-target="#myTambah">
                        <i class="fa fa-plus"></i> Tambah Menu
                    </button>
                    <a href="barang.php" class="btn btn-success btn-md">
                        <i class="fa fa-refresh"></i> Refresh Data</a>

                    <!-- Tabel Barang -->
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card shadow mb-4 mt-3">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-sm" id="dataTable"
                                            width="100%" cellspacing="0">
                                            <thead>
                                                <tr style="background:#DFF0D8;color:#333;">
                                                    <th>No.</th>
                                                    <th>Nama Menu</th>
                                                    <th>Harga</th>
                                                    <th>Deskripsi</th>
                                                    <th>Gambar</th>
                                                    <th colspan="2" class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                    $query = "SELECT * FROM menu";
                                                    $query_final = mysqli_query($conn, $query);
                                                    $no = 1;

                                                    while ($mie_ayam = mysqli_fetch_array($query_final)) {
                                                        $nama_menu = $mie_ayam["nama_menu"];
                                                        $harga = $mie_ayam["harga"];
                                                        $deskripsi = $mie_ayam["deskripsi"];
                                                        $gambar = $mie_ayam["gambar"];
                                                        $id = $mie_ayam["id"];
                                                        ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $nama_menu ?></td>
                                                        <td>Rp.<?=number_format($harga);?></td>
                                                        <td><?= $deskripsi ?></td>
                                                        <td><img src="../uploads/<?= $gambar?>" alt=""></td>
                                                        <td><button type="button" class="btn btn-warning"
                                                                data-bs-toggle="modal" data-bs-target="#myEdit<?= $id ?>">
                                                                Edit
                                                            </button></td>
                                                        <td><button type="button" class="btn btn-danger"
                                                                data-bs-toggle="modal" data-bs-target="#hapus<?= $id ?>">
                                                                Hapus
                                                            </button></td>
                                                    </tr>

                                                    <!-- EDIT -->
                                                    <div class="modal" id="myEdit<?= $id ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit <?= $nama_menu ?></h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <form method="POST">
                                                                    <div class="modal-body">                                                                
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Nama Menu</label>
                                                                            <input type="text" class="form-control" id=""
                                                                                placeholder="" name="nama_menu" value="<?=$nama_menu?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Harga</label>
                                                                            <input type="number" class="form-control" id=""
                                                                                placeholder="" name="harga" value="<?=$harga?>">
                                                                        </div>
                                                                        
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Deskripsi</label>
                                                                            <input type="text" class="form-control" id=""
                                                                                placeholder="" name="deskripsi" value="<?=$deskripsi?>">
                                                                        </div>                                                                
                                                                        <input type="hidden" name="id" value="<?=$id?>">
                                                                    </div>


                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-bs-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-success"
                                                                            name="edit_menu">Kirim</button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- HAPUS -->
                                                    <div class="modal" id="hapus<?= $id ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Hapus <?= $nama_menu ?></h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <form method="POST">
                                                                    <div class="modal-body">
                                                                        Apakah Anda Yakin Akan Menghapus Barang Ini?
                                                                    <input type="hidden" name="id" value="<?=$id;?>">
                                                                    </div>


                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-bs-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-success"
                                                                            name="hapus_menu">Kirim</button>

                                                                    </div>

                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>                                                    

                                                    <?php
                                                    };
                                                    ?>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Topan Haikal Tampan</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

<!-- TAMBAH -->
<div class="modal" id="myTambah">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Menu</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="POST" action="data.php">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
                        <input type="text" class="form-control" id="" placeholder="" name="nama_menu">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga Menu</label>
                        <input type="number" class="form-control" id="" placeholder="" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="" placeholder="" name="deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="" placeholder="" name="gambar">
                    </div>
                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success" name="tambah_menu">Kirim</button>

                </div>
            </form>
        </div>
    </div>
</div>

</html>