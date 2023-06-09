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

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('asset/fj/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <style>
        .btn-btn {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <!-- Cari Mood -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Cari Mood</div>

                                            <form class="d-flex" action="<?= base_url('Cari_mood/hasil_cari/') ?>" method="post">
                                                <select name="keyword" class="form-control">
                                                    <option value="<?php echo $keyword; ?>"><?php echo $keyword; ?></option>
                                                    <?php foreach ($ket as $option) : if ($option['nama_mood'] != $keyword) { ?>
                                                            <option value="<?php echo $option['nama_mood']; ?>"><?php echo $option['nama_mood']; ?></option>
                                                    <?php }
                                                    endforeach; ?>
                                                </select>
                                                <button class="btn btn-outline-success" type="submit">Search</button>
                                                <div class="col-auto">
                                                    <i class="fas fa-search fa-2x text-gray-300"></i>
                                                </div>
                                            </form>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel -->
                    <div class="col">
                        <div class="col-lg-11 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" style="background-color:#a2dbc8; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Mood</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Frekuensi</th>
                                                    <th scope="col" class="text-center" style="background-color:#c7e9de; color:#747474; font-weight: bold; font-family: 'roboto';">Data Record</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th scope="col" class="text-center" style="background-color:#a2dbc8; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Mood</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Frekuensi</th>
                                                    <th scope="col" class="text-center" style="background-color:#c7e9de; color:#747474; font-weight: bold; font-family: 'roboto';">Data Record</th>
                                                </tr>
                                            </tfoot>
                                            <?php $nos = 1; ?>
                                            <?php if ($keyword) { ?>
                                                <b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b>
                                                <br>
                                                "Ditampilkan berdasarkan frekuensi"
                                                <p></p>
                                            <?php } ?>
                                            <?php if (empty($data[0]['nama_mood'])) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">Data yang dicari tidak ditemukan.</td>
                                                    </tr>
                                                </tbody>
                                            <?php } else { ?>
                                                <?php foreach ($data_count as $key) : $date = $key['waktu'] ? date('d-M-Y h:i A', strtotime($key['waktu'])) : ''; ?>

                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center" scope="row"><?php echo $nos++ ?></th>
                                                            <td class="text-center"><?php echo $key['nama_mood'] ?></td>
                                                            <td class="text-center"><?php echo $key['banyak_mood'] ?> kali</td>

                                                            <td class="text-center">
                                                                <div class="btn-btn">
                                                                    <form action="<?= base_url('Cari_mood/detail_frekuensi/') ?> " method="post">
                                                                        <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <button data-toggle="tooltip" title="Menampilkan nama makanan dan frekuensi makanan yang anda makan sebelum anda mengalami mood" class="btn btn-outline-success" type="submit" name="pilih"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 14px;">Frekuensi Makanan</span> </button>
                                                                    </form>
                                                                    <form action="<?= base_url('Cari_mood/detail_makanan_tgl/') ?> " method="post">
                                                                        <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <button data-toggle="tooltip" title="Menampilkan nama makanan berdasarkan waktu anda makan" class="btn btn-outline-danger" type="submit" name="pilih"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 14px;" font>Detail Makanan</span> </button>
                                                                    </form>
                                                                    <form action="<?= base_url('Cari_mood/detail_bab'); ?>" method="post">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <input type="hidden" name="keyword" value="<?= $keyword; ?>">
                                                                        <button data-toggle="tooltip" title="Menampilkan data BAB sebelum anda mengalami mood" class="btn btn-outline-primary" type="submit" name="pilih"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 14px;"> BAB</span> </button>
                                                                    </form>

                                                                    <form action="<?= base_url('Cari_mood/detail_tidur'); ?>" method="post">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <input type="hidden" name="keyword" value="<?= $keyword; ?>">
                                                                        <button data-toggle="tooltip" title="Menampilkan data tidur sebelum anda mengalami mood" class="btn btn-outline-secondary" type="submit" name="pilih"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 14px;"> Tidur</span> </button>
                                                                    </form>

                                                                    <form action="<?= base_url('Cari_mood/detail_symptom'); ?>" method="post">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <input type="hidden" name="keyword" value="<?= $keyword; ?>">
                                                                        <button data-toggle="tooltip" title="Menampilkan data symptom sebelum anda mengalami mood" class="btn btn-outline-warning" type="submit" name="pilih"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 14px;"> Symptom</span> </button>
                                                                    </form>

                                                                    <form action="<?= base_url('Cari_mood/detail_catatan'); ?>" method="post">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <input type="hidden" name="keyword" value="<?= $keyword; ?>">
                                                                        <button data-toggle="tooltip" title="Menampilkan catatan harian sebelum anda mengalami gejala/mood" class="btn btn-outline-success" type="submit" name="pilih"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 14px;"> Notes</span> </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php endforeach; ?>
                                            <?php } ?>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-11 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" style="background-color:#a2dbc8; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Mood</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Frekuensi</th>
                                                    <th scope="col" class="text-center" style="background-color:#c7e9de; color:#747474; font-weight: bold; font-family: 'roboto';">Data Record</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th scope="col" class="text-center" style="background-color:#a2dbc8; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Mood</th>
                                                    <th scope="col" class="text-center" style="background-color:#bae4d7; color:#747474; font-weight: bold; font-family: 'roboto';">Frekuensi</th>
                                                    <th scope="col" class="text-center" style="background-color:#c7e9de; color:#747474; font-weight: bold; font-family: 'roboto';">Data Record</th>
                                                </tr>
                                            </tfoot>
                                            <?php $no = 1; ?>
                                            <?php if ($keyword) { ?>
                                                <b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>" </b>
                                                <br>
                                                "Ditampilkan berdasarkan tanggal"
                                                <p></p>
                                            <?php } ?>
                                            <?php if (empty($data[0]['nama_mood'])) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">Data yang dicari tidak ditemukan.</td>
                                                    </tr>
                                                </tbody>
                                            <?php } else { ?>
                                                <?php foreach ($data as $key) : ?>
                                                    <?php $date = $key['waktu'] ? date('d-M-Y h:i A', strtotime($key['waktu'])) : ''; ?>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $no++ ?></th>
                                                            <td><?php echo $date ?></td>
                                                            <td><?php echo $key['nama_mood'] ?></td>
                                                            <td>
                                                                <div class="btn-btn">
                                                                    <form action="<?= base_url('Cari_mood/frekuensi_mkn/') ?> " method="post">
                                                                        <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <button type="sumbit" class="btn btn-outline-success"><i class="fa fa-eye"> </i> Frekuensi Makanan</button>
                                                                    </form>

                                                                    <form action="<?= base_url('Cari_mood/detail_makanan/') ?> " method="post">
                                                                        <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-eye"> </i> Detail Makanan</button>
                                                                    </form>

                                                                    <form action="<?= base_url('Cari_mood/bab/') ?> " method="post">
                                                                        <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <button type="sumbit" class="btn btn-outline-primary"><i class="fa fa-eye"> </i> BAB</button>
                                                                    </form>

                                                                    <form action="<?= base_url('Cari_mood/tidur/') ?> " method="post">
                                                                        <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <button type="submit" class="btn btn-outline-secondary"><i class="fa fa-eye"> </i> Tidur</button>
                                                                    </form>

                                                                    <form action="<?= base_url('Cari_mood/symptom/') ?> " method="post">
                                                                        <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <button type="sumbit" class="btn btn-outline-warning"><i class="fa fa-eye"> </i> Symptom</button>
                                                                    </form>

                                                                    <form action="<?= base_url('Cari_mood/catatan/') ?> " method="post">
                                                                        <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                                                        <input type="hidden" name="tgl_mood" value="<?= $key['waktu'] ?>">
                                                                        <button type="submit" class="btn btn-outline-success"><i class="fa fa-eye"> </i> Catatan Harian</button>
                                                                    </form>
                                                                </div>
                                                            </td>
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