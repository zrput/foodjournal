<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Informasi Umum Makanan/Minuman</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('asset/fj/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/fj/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('asset/dataTables/datatables.min.css'); ?>" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('asset/favicon-32x32.png')?>">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('admin/a_sidebar');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <span>Dashboard Admin</span>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <?php $this->load->view('admin/userinfo'); ?>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Informasi Umum Makanan/Minuman</h1>
                    <p class="mb-4">Pada Halaman ini Anda dapat mengelola Informasi Umum Makanan/Minuman</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between" style="background-color:#7eefb1;">
                            <h5 class="m-3 font-weight-bold text-dark">Data Table Informasi Umum Makanan/Minuman</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                                <i class="fa fa-plus"> </i> Tambah Data
                            </button>
                        </div>

                        <!-- Modal Tambah-->

                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php if ($this->session->flashdata('validate')) : ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <?= $this->session->flashdata('validate'); ?>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <form action="<?= base_url('Info_umum/tambah_infoumum_aksi') ?>" method="POST" enctype="multipart/form-data">

                                            <div class="mb-3">
                                                <label for="nama_makanan" class="form-label">Nama Makanan/Minuman</label>
                                                <input type="text" name="nama_makanan" class="form-control" id="nama_makanan" required>
                                                <?php echo form_error('nama_makanan', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="kalori" class="form-label">Kalori(kkal)</label>
                                                        <input type="number" name="kalori" class="form-control" id="kalori" required>
                                                        <?php echo form_error('kalori', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="protein" class="form-label">Protein(gram)</label>
                                                        <input type="number" name="protein" class="form-control" id="protein" required>
                                                        <?php echo form_error('protein', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="lemak" class="form-label">Lemak(gram)</label>
                                                        <input type="number" name="lemak" class="form-control" id="lemak" required>
                                                        <?php echo form_error('lemak', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vit_mineral" class="form-label">Vitamin & Mineral</label>
                                                <textarea type="text" name="vit_mineral" class="form-control" id="vit_mineral" required></textarea>
                                                <?php echo form_error('vit_mineral', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>

                                            <div class="mb-3">
                                                <label for="foto" class="form-label">Pilih Gambar<span style="font-size:small">(*Maksimal 2MB)</span></label>
                                                <input type="file" name="foto" class="form-control" id="foto" accept="image/png, image/jpeg, image/jpg">
                                                <?php echo form_error('foto', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                   
                            </div>
                        </div>




                        <!-- memanggil table catatan -->
                        <?php $this->load->view('admin/info_umum/table_info'); ?>
                        <!-- end of memanggil table catatan -->
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/fj/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/fj/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/fj/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('asset/fj/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('asset/dataTables/datatables.min.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>



</body>

</html>