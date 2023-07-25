<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Journaling - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/fj/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/fj/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('asset/favicon-32x32.png')?>">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <?php $this->load->view('member/sidebar'); ?>

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
                    <span>
                        Dashboard
                    </span>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <?php $this->load->view('member/userinfo'); ?>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <!-- Cari Symptom -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Cari Mood</div>

                                            <form class="d-flex" action="<?= base_url('Cari_mood/hasil_cari/') ?> " method="post">
                                                <select name="keyword" class="form-control">
                                                    <option value="">-- Pilih Mood --</option>
                                                    <?php foreach ($ket as $option) : ?>
                                                        <option value="<?php echo $option['nama_mood']; ?>"><?php echo $option['nama_mood']; ?></option>
                                                    <?php endforeach; ?>
                                                    <option value="">-- Pilih Mood --</option>
                                                </select>
                                                <button class="btn btn-outline-success" type="submit">Search</button>
                                                <div class="col-auto">
                                                    <i class="fas fa-search fa-2x text-gray-400"></i>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Divider -->
                    <hr class="divider">

                    <!-- Content Row -->

                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
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



            <!-- Bootstrap core JavaScript -->
            <script src="<?php echo base_url('asset/fj/vendor/jquery/jquery.min.js'); ?>"></script>
            <script src="<?php echo base_url('asset/fj/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

            <!-- Core plugin JavaScript -->
            <script src="<?php echo base_url('asset/fj/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

            <!-- Custom scripts for all pages -->
            <script src="<?php echo base_url('asset/fj/js/sb-admin-2.min.js'); ?>"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url('asset/fj/vendor/chart.js/Chart.min.js'); ?>"></script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url('asset/fj/js/demo/chart-area-demo.js'); ?>"></script>
            <script src="<?php echo base_url('asset/fj/js/demo/chart-pie-demo.js'); ?>"></script>

</body>

</html>