<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Journaling - Total Makanan</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/fj/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/fj/css/sb-admin-2.min.css'); ?>" rel="stylesheet">


    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('asset/dataTables/datatables.min.css'); ?>" rel="stylesheet">

    <style>
        .button-container {
            display: grid;
            grid-template-columns: repeat(4, auto);
            gap: 10px;
            /* Optional: Tambahkan jarak antara button-form */
        }
    </style>
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

                <!--  -->
                <div class="col-lg-11 col-md-6 mb-2">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="button-container">

                                <form action="<?= base_url('Cari_mood/hasil_cari/') ?> " method="post">
                                    <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                    <button type="submit" class="btn btn-primary" style="color:#ffffff; font-weight: bold; font-family: 'roboto';">
                                        <i class="fa fa-arrow-left" aria-hidden="true"> </i> <span style="color:#ffffff; font-weight: bold; font-family: 'roboto';">Kembali</span></button>

                                </form>
                                <h3 class="text-center " style="color:#18aee7; font-weight: bold; font-family: 'Arial';"> Total makanan dari mood <span style="color:#fe7272; font-weight: bold; font-family: 'Arial';">"<?php foreach ($mood as $key) : $nama = strtoupper($key['nama_mood']) ?>
                                        <?php echo $nama ?>
                                        <?php endforeach; ?>"</span> </h3>
                            </div>


                        </div>
                    </div>
                </div>

                <!--  -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Tabel -->
                    <div class="col">
                        <div class="col-lg-11 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <p class="text-left " style="color:#747474; font-weight: semi-bold; font-family: 'roboto';">Anda mengalami mood <span style="color:#fe7272; font-weight: bold; font-family: 'Arial';">"<?php foreach ($mood as $key) : $nama = strtoupper($key['nama_mood']) ?>
                                            <?php echo $nama ?>
                                            <?php endforeach; ?>"</p>
                                    <p class="text-left " style="color:#747474; font-weight: semi-bold; font-family: 'roboto';">Berikut ini nama makanan dan frekuensi makanan yang anda konsumsi selama 3 hari kebelakang dari tanggal : <span style="color:#747474; font-weight: bold; font-family: 'Roboto';"><?php echo date('d-M-Y ', strtotime($tgl_mood)) ?></span></p>

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" style="background-color:#a2dbc8; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                                    <th scope="col" class="text-center" style="background-color:#afe0d1; color:#747474; font-weight: bold; font-family: 'roboto';">Nama Makanan</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Frekuensi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th scope="col" class="text-center" style="background-color:#a2dbc8; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                                    <th scope="col" class="text-center" style="background-color:#afe0d1; color:#747474; font-weight: bold; font-family: 'roboto';">Nama Makanan</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Frekuensi</th>
                                                </tr>
                                            </tfoot>

                                            <tbody>
                                                <?php if (empty($data)) { ?>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td colspan="4">Tidak ada data makanan yang tercatat pada 3 hari sebelum tanggal <span style="color:#747474; font-weight: bold; font-family: 'Roboto';"><?php echo date('d-M-Y ', strtotime($tgl_mood)) ?></span> </td>
                                                    </tr>
                                                <?php } else { ?>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($data as $key) : $date = date('d-M-Y H:i', strtotime($key['waktu'])) ?>
                                                        <tr>
                                                            <th scope="row" class="text-center" style="color:#747474; font-weight: bold; font-family: 'roboto';"><?php echo $no++ ?></th>
                                                            <td class="text-center" style="color:#8c8c8c; font-weight: semi-bold; font-family: 'roboto';"><?php echo $key['nama_makanan'] ?></td>
                                                            <td class="text-center" style="color:#8c8c8c; font-weight: semi-bold; font-family: 'roboto';"><?php echo $key['jumlah'] ?> Kali</td>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <hr>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <!-- End Tabel -->

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


            <!-- Page level plugins -->
            <script src="<?php echo base_url('asset/dataTables/datatables.min.js'); ?>"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#myTable').DataTable();
                });
            </script>

</body>

</html>