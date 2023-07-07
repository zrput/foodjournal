<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Journaling - Data Tidur</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/fj/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/fj/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('asset/fj/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <style>
        .button-container {
            display: grid;
            grid-template-columns: repeat(4, auto);
            gap: 10px;
            /* Optional: Tambahkan jarak antara button-form */
        }
    </style>

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

                                <form action="<?= base_url('Cari_symptom/hasil_cari/') ?> " method="post">
                                    <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                    <button type="submit" class="btn btn-primary" style="color:#ffffff; font-weight: bold; font-family: 'roboto';">
                                        <i class="fa fa-arrow-left" aria-hidden="true"> </i> <span style="color:#ffffff; font-weight: bold; font-family: 'roboto';">Kembali</span></button>

                                </form>
                                <h3 class="text-center " style="color:#18aee7; font-weight: bold; font-family: 'Arial';"> Data Tidur dari gejala <span style="color:#fe7272; font-weight: bold; font-family: 'Arial';">"<?php foreach ($symptom as $key) : $nama = strtoupper($key['nama_symptom']) ?>
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
                                    <p class="text-left " style="color:#747474; font-weight: semi-bold; font-family: 'roboto';">Anda mengalami gejala "<span style="color:#fe7272; font-weight: bold; font-family: 'Arial';">"<?php foreach ($symptom as $key) : $nama = strtoupper($key['nama_symptom']) ?>
                                            <?php echo $nama ?>
                                            <?php endforeach; ?>"</p>
                                    <p class="text-left " style="color:#747474; font-weight: semi-bold; font-family: 'roboto';">Berikut ini data Tidur Anda selama 3 hari kebelakang dari tanggal : <span style="color:#747474; font-weight: bold; font-family: 'Roboto';"><?php echo date('d-M-Y ', strtotime($tgl_symptom)) ?></span></p>
                                    <!-- <p class="text-left " style="color:#747474; font-weight: semi-bold; font-family: 'roboto';">*Catatan : Pada kolom "skala bristol" terdapat gambar sebagai ilustrasi BAB dan angka sebagai skala BAB </p> -->

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" style="background-color:#a2dbc8; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                                    <th scope="col" class="text-center" style="background-color:#afe0d1; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu tidur</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu Bangun</th>
                                                    <th scope="col" class="text-center" style="background-color:#c7e9de; color:#747474; font-weight: bold; font-family: 'roboto';">Kualitas Tidur</th>
                                                    <th scope="col" class="text-center" style="background-color:#c7e9de; color:#747474; font-weight: bold; font-family: 'roboto';">Keterangan Tambahan</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th scope="col" class="text-center" style="background-color:#a2dbc8; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                                    <th scope="col" class="text-center" style="background-color:#afe0d1; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu tidur</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu Bangun</th>
                                                    <th scope="col" class="text-center" style="background-color:#c7e9de; color:#747474; font-weight: bold; font-family: 'roboto';">Kualitas Tidur</th>
                                                    <th scope="col" class="text-center" style="background-color:#c7e9de; color:#747474; font-weight: bold; font-family: 'roboto';">Keterangan Tambahan</th>
                                                </tr>
                                            </tfoot>

                                            <?php if (empty($data)) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">Tidak ada data tidur yang tercatat pada 3 hari sebelum tanggal <span style="color:#747474; font-weight: bold; font-family: 'Roboto';"><?php echo date('d-M-Y ', strtotime($tgl_symptom)) ?></span> </td>
                                                    </tr>
                                                </tbody>
                                            <?php } else { ?>

                                                <?php $no = 1; ?>
                                                <?php foreach ($data as $key) : $date = date('d-M-Y h:i A', strtotime($key['waktu_mulai'])) ?>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="text-center" style="color:#747474; font-weight: bold; font-family: 'roboto';"><?php echo $no++ ?></th>
                                                            <td class="text-center" style="color:#8c8c8c; font-weight: semi-bold; font-family: 'roboto';"><?php echo $date ?></td>
                                                            <td class="text-center" style="color:#8c8c8c; font-weight: semi-bold; font-family: 'roboto';"><?php echo date('d-M-Y H:i A', strtotime($key['waktu_selesai'])) ?></td>
                                                            <td class="text-center" style="color:#8c8c8c; font-weight: semi-bold; font-family: 'roboto';"><?php echo $key['kualitas_tidur'] ?></td>
                                                            <td class="text-center" style="color:#8c8c8c; font-weight: semi-bold; font-family: 'roboto';"><?php echo $key['ket_tambahan'] ?></td>

                                                        </tr>
                                                    </tbody>
                                                <?php endforeach; ?>
                                            <?php } ?>
                                        </table>
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

</body>

</html>