<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Makanan/Minuman</title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('asset/fj/vendor/fontawesome-free/css/all.min.css" rel="stylesheet'); ?>" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('asset/fj/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this page -->
  <!-- <link href="<?php echo base_url('asset/fj/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet"> -->
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
          <h1 class="h3 mb-2 text-gray-800">Data Makanan/Minuman</h1>
          <p class="mb-4">Pada Halaman ini Anda dapat melakukan pencatatan makanan atau minuman yang telah dikonsumsi beserta waktu, jumlah, satuan makanan dan bahan makanan/minuman yang dikonsumsi</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4 ">
            <div class="card-header py-3 d-flex justify-content-between" style="background-color:#a2dbc8;">
              <h5 class="m-3 font-weight-bold text-dark">Tabel Data Makanan/Minuman</h5>
              <!-- Button trigger modal -->
              <button type="button" onclick="window.location.href='<?php echo base_url('Makanan/tambah_makanan') ?>'" class="btn btn-primary">
                <i class="fa fa-plus"></i> Tambah Data
              </button>

            </div>
            <br>
            <div class="container-fluid">
              <div class="card-body">

                <div class="table-responsive">
                  <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Makanan & Minuman</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Jumlah</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Satuan</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Kalori</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Nama Bahan Makanan</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Keterangan</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Opsi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Makanan & Minuman</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Jumlah</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Satuan</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Kalori</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Nama Bahan Makanan</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Keterangan</th>
                        <th scope="col" class="text-center" style="background-color:#dcf1eb; color:#747474; font-weight: bold; font-family: 'roboto';">Opsi</th>
                      </tr>
                    </tfoot>
                    <tbody>

                      <?php $no = 1; ?>
                      <?php foreach ($mkn as $key) : $date = date('d-M-Y H:i', strtotime($key['waktu'])); ?>



                        <tr>
                          <th class="text-center" scope="row"><?php echo $no++ ?></th>
                          <td class="text-center"><?php echo $key['nama_makanan'] ?></td>
                          <td class="text-center"><?php echo $date ?></td>
                          <td class="text-center"><?php echo $key['jumlah'] ?></td>
                          <td class="text-center"><?php echo $key['satuan'] ?></td>
                          <td class="text-center"><?php echo $key['kalori']?></td>
                          <td class="text-center">
                            <?php $bahan = $this->Mmakanan->get_bahan($key['id_makanan_minuman']) ?>
                            <?php foreach ($bahan as $ingridient) : ?>
                              <?php echo $ingridient['bahan']; ?>
                            <?php endforeach; ?>
                          </td>
                          <td class="text-center"><?php echo $key['ket_tambahan'] ?></td>
                          <td class="text-center">
                            <button type="button" onclick="window.location.href = '<?php echo base_url('Makanan/ubah_makanan/' . $key['id_user_makanan']) ?>';" class="btn btn-warning"><i class="fa fa-marker"></i> Edit</button>
                            <button type="button" data-toggle="modal" data-target="#delete<?php echo $key['id_user_makanan'];?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>

                            <!-- hapus Modal-->
                            <div class="modal fade" id="delete<?php echo $key['id_user_makanan'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <a class="btn btn-danger" href="<?php echo base_url('Makanan/hapus_makanan/'. $key['id_user_makanan']) ?>">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end hapus modal-->
                          </td>
                        </tr>


                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <br>
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