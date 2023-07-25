<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Tidur</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('asset/fj/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/fj/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('asset/dataTables/datatables.min.css'); ?>" rel="stylesheet">
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <span>Data Anda</span>

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
                        <?php $this->load->view('member/userinfo'); ?>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Tidur</h1>
                    <p class="mb-4">Pada Halaman ini Anda dapat melakukan pencatatan kenyamanan tidur</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between" style="background-color:#a2dbc8;" class="text-center">
                            <h5 class="m-3 font-weight-bold text-dark">Tabel Data Tidur</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                                <i class="fa fa-plus"></i> Tambah Data
                            </button>
                        </div>
                        <!-- Modal -->
                        <?php $this->load->view('member/tidur/modal_tidur'); ?>

                        <!-- menampilkan data table tidur -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Kualitas Tidur</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu Mulai</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu Selesai</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Keterangan Tambahan</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Kualitas Tidur</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu Mulai</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu Selesai</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Keterangan Tambahan</th>
                                            <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Opsi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($tdr as $key) : $date = date('d-M-Y H:i', strtotime($key['waktu_mulai'])) ?>
                                            <tr>
                                                <th class="text-center" scope="row"><?php echo $no++ ?></th>
                                                <td class="text-center"><?php echo $key['kualitas_tidur'] ?></td>
                                                <td class="text-center"><?php echo $date ?></td>
                                                <td class="text-center"><?php echo date('d-M-Y H:i', strtotime($key['waktu_selesai'])) ?></td>
                                                <td class="text-center"><?php echo $key['ket_tambahan'] ?></td>
                                                <td class="text-center">
                                                    <button type="submit" data-toggle="modal" data-target="#edit<?php echo $key['id_user_tidur']; ?>" class="btn btn-warning"><i class="fa fa-marker"></i> Edit</button>
                                                    <button type="reset" data-toggle="modal" data-target="#delete<?php echo $key['id_user_tidur']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>

                                                </td>
                                                <!-- modal edit -->
                                                <div class="modal fade" id="edit<?php echo $key['id_user_tidur']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Tidur</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?php echo base_url('tidur/edit_tidur') ?>?>" method="post">
                                                                    <div class="form-group">
                                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $key['id_user_tidur'] ?>">
                                                                        <label for="Satuan">Pilih Mood</label>
                                                                        <select name="kualitas" class="form-control">
                                                                            <option value="<?php echo $key['tidur_idtidur']; ?>"><?php echo $key['kualitas_tidur']; ?></option>
                                                                            <?php foreach ($v2 as $option) : if ($option['idtidur'] != $key['tidur_idtidur']) { ?>
                                                                                    <option value="<?php echo $option['idtidur']; ?>"><?php echo $option['kualitas_tidur']; ?></option>
                                                                            <?php }
                                                                            endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="Waktu">Waktu</label>
                                                                        <input type="datetime-local" class="form-control" name="waktu_m" value="<?php echo $key['waktu_mulai'] ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="Waktu">Waktu</label>
                                                                        <input type="datetime-local" class="form-control" name="waktu_s" value="<?php echo $key['waktu_selesai'] ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="Keterangan">Keterangan Tambahan</label>
                                                                        <textarea class="form-control" name="ket_tambahan" cols="30" rows="10"><?php echo $key['ket_tambahan'] ?></textarea>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end Modal Edit -->



                                                <!-- hapus Modal-->
                                                <div class="modal fade" id="delete<?php echo $key['id_user_tidur']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Yakin Ingin Menghapus Data?</div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                                <a class="btn btn-danger" href="<?php echo base_url('tidur/hapus_tidur/' . $key['id_user_tidur']) ?>">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end hapus modal-->
                                            </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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
                        <span>Copyright &copy; Your Website 2020</span>
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

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('asset/fj/js/demo/datatables-demo.js'); ?>"></script>

</body>

</html>