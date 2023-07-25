<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cari Artikel</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap4/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/paper-kit.css?v=2.2.0') ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/card_cari_artikel.css') ?>">


  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('asset/dT_artikel/datatables.min.css'); ?>" rel="stylesheet">

  <!-- Custom Style -->
  <style>
    dd {
      text-align: justify;
    }

    h2 {
      text-shadow: 3px 3px #2e2e2e;
    }

    h3 {
      text-shadow: 3px 3px #2e2e2e;
    }

    .truncate-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 600px;
      /* Adjust the maximum width as needed */
    }
  </style>
  <!-- Custom Style -->

  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('asset/favicon-32x32.png')?>">

</head>

<body>

  <body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    <?php $this->load->view('navbar'); ?>
    <!-- End Navbar -->
    <div class="page-header  page-header-small" data-parallax="flase" style="background-image: url('<?php echo base_url('asset/artikel_bg.jpg'); ?>');">
      <div class="filter"></div>
      <div class="container">
        <div class="motto text-center">
          <h2 class="shadow-lg p-3 mb-5 bg-body rounded"><b> Selamat Datang Di Halaman Pencarian Artikel</b></h2>
          <br>
          <h3 class="text-shadow" style="font-weight:bolder">Coba Cari Artikel Disini.</h3>

          <form action="<?= base_url('Guest/cari_artikel') ?>" method="post">
            <div class="row justify-content-center">
              <div class="col-sm-4">
                <div class="form-group">
                  <input type="text" name="keyword" class="form-control" placeholder="Masukan Kata Kunci...">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 ml-auto mr-auto">
                <button class="btn btn-success btn-lg btn-round" type="submit"><i class="fa fa-search"></i> Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="section text-center">
        <div class="container">
          <!-- TEST -->
          <section class="">
            <div class="container py-2">
              <!-- <div class="h1 text-center text-dark" id="pageHeaderTitle">My Cards Light</div> -->
              <table id="myTable">
                <thead>
                  <tr>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php if ($keyword) { ?>
                    <br>
                    <b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b>
                    <br>
                  <?php } ?>

                  <br>
                  <br>
                  <?php if (empty($data[0]['judul'])) { ?>
                    <h4 style="font-family:roboto; ">Oopss.... Maaf, artikel yang Anda cari belum tersedia... <i class="fa fa-hourglass"></i> </h4>
                    <br>
                    <br>
                  <?php } else { ?>
                    <?php foreach ($data as $key) : ?>
                      <tr>
                        <td>
                          <div class="card" Style="background:#825f40;">
                            <article class="postcard light blue">
                              <a class="postcard__img_link">
                                <img class="postcard__img" src="<?php echo base_url('asset/artikels.jpg'); ?>" alt="Image Title" />
                              </a>
                              <div class="postcard__text t-dark text-left">

                                <span style="font-weight:bolder color:#464646; font-family:roboto; font-size:18px;"><?php echo date('d-M-Y', strtotime($key['waktu'])) ?></span>

                                <h1 class="postcard__title"><a href="#" style="font-weight:bold; font-size:18;"><?php echo $key['judul'] ?></a></h1>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt truncate-text" style="color:#7d7d7d; font-family:roboto; font-size:18px; object-fit: cover;"><?php echo $key['isi'] ?></div>
                                <ul class="postcard__tagbox">
                                  <form action="<?= base_url('guest/detail_artikel/') ?> " method="post" target="_blank">
                                    <input type="hidden" name="keyword" value="<?php echo $keyword; ?>">
                                    <input type="hidden" name="idartikel" value="<?= $key['idartikel'] ?>">


                                    <button data-toggle="tooltip" title="Baca Artikel" class="btn btn-primary" type="submit"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 11px;"> Baca Selengkapnya</span> </button>
                                  </form>

                                </ul>
                              </div>
                            </article>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  <?php } ?>

                </tbody>
              </table>
              <br>
              <br>
            </div>
          </section>
        </div>
      </div>
      <!-- member feature -->
      <div class="section section-dark text-center">
        <div class="container">

        </div>
      </div>
      <footer class="footer   footer-white ">
        <div class="container">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by TRPL
              </span>
            </div>
          </div>
        </div>
      </footer>

      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

      <!--   Core JS Files   -->
      <script src="<?php echo base_url('asset/js/core/jquery.min.js'); ?>" type="text/javascript"></script>
      <script src="<?php echo base_url('asset/js/core/popper.min.js'); ?>" type="text/javascript"></script>
      <script src="<?php echo base_url('asset/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>

      <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
      <script src="<?php echo base_url('asset/js/plugins/bootstrap-switch.js'); ?>"></script>

      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="<?php echo base_url('asset/js/plugins/nouislider.min.js'); ?>" type="text/javascript"></script>

      <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
      <script src="<?php echo base_url('asset/js/plugins/moment.min.js'); ?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>

      <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
      <script src="<?php echo base_url('asset/js/paper-kit.js?v=2.2.0'); ?>" type="text/javascript"></script>

      <!--  Google Maps Plugin    -->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

      <!-- Page level plugins -->
      <script src="<?php echo base_url('asset/dT_artikel/datatables.min.js'); ?>"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#myTable').DataTable({
            "bFilter": false,
            "bSort": false,
            "bLengthChange": false,
            // "bInfo": false,
            // "bPaginate": false,
            // "bFilter": true,
            // "bSortMulti": true,
            // "bInfo": true,
            // "bProcessing": true,
            // "bAutoWidth": true,
            // "bSortClasses": true,
            // "bServerSide": true,
            // "bDeferRender": true

            "lengthMenu": [5, 10, 25, 50],
            "pageLength": 5
          });

        });
      </script>

  </body>

</html>