<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artikel</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap4/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/paper-kit.css?v=2.2.0') ?>">

  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('asset/favicon-32x32.png')?>">
  <style>
    dd {
      text-align: justify;
    }

    .pre-custom {
      white-space: pre-wrap;
      overflow: hidden;
    }

    .column-1 {
      width: 300px;
    }

    .column-2 {
      width: 200px;

    }

    .card-overflow {
      white-space: pre-wrap;
      overflow: hidden;
    }
  </style>

</head>

<body>

  <body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top ">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="PBL Project By TRPL" data-placement="bottom" target="_blank">
            Food Journal saya
          </a>
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="Home" class="nav-link"><ion-icon name="home-outline"></ion-icon> Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="Tentang Website Ini" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> About</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('guest/landing_artikel') ?>" data-toggle="tooltip" title="Cari Artikel" class="nav-link" style="color:#5bddf4; font-size:16px"><ion-icon name="stats-chart-outline"></ion-icon> Artikel</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('guest/landing_makanan_umum') ?>" data-toggle="tooltip" title="Cari Nutrisi Makanan" class="nav-link"><ion-icon name="pizza"></ion-icon> Nutrisi Makanan</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="Keuntungan Menjadi Member" class="nav-link"><ion-icon name="gift-outline"></ion-icon> Benefit</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('auth') ?>" data-toggle="tooltip" title="Login" class="btn btn-primary btn-round">Login</a>

            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('auth/signup') ?>" data-toggle="tooltip" title="Ayo bergabung dengan Kami" class="btn btn-info btn-round">Sign Up</a>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header page-header-small" data-parallax="flase" style="  background-image: url('<?php echo base_url('asset/1.jpg'); ?>');">
      <div class="filter"></div>
      <div class="container">
        <div class="motto text-center">
          <h2 class="bg-info text-align text-white p-3 rounded" style="font-weight:bold; ">"<?php foreach ($artikel as $key) : ?>
            <?php echo $key['judul']; ?> "
          <?php endforeach; ?></h2>
          <br>


          </form>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="section text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <!-- <img src="<?php echo base_url('asset/1.jpg'); ?>" style="width: 600x; height: 400px;" alt="Image Alt Text"> -->

              <br>
              <br>
              <p class="text-left" style="font-weight:bolder; color:#585858; font-family:lato; font-size:larger;"><?php foreach ($artikel as $article) : ?>
                  <span class="text-left" style="font-weight:bold; color:#3b3b3b;">Ditulis Oleh : </span> <?php echo $article['penulis']; ?>
                <?php endforeach; ?>
              </p>

              <p class="text-left" style="font-weight:bolder; color:#585858; font-family:lato; font-size:larger;"><?php foreach ($artikel as $article) : ?>
                  <span class="text-left" style="font-weight:bold; color:#3b3b3b;">Tanggal : </span><?php echo   date('l, d F Y', strtotime($article['waktu'])) ?>
                <?php endforeach; ?>
              </p>


              <dd>
                <hr class="bg-danger border-2 border-top border-primary">
                <br>
                <br>
                <h5 class="description"><?php foreach ($artikel as $article) : ?>
                    <div class="card-image text-center">
                      <img src="<?php echo base_url('asset/upload/' . $article['foto']); ?>" style="width: 600px; height: 400px; object-fit: cover;" />
                    </div>
                    <br>
                    <pre id="output-text" class="pre-custom" style="color:#515151; font-family:roboto; font-size:;"><?php echo $article['isi']; ?></pre>
                  <?php endforeach; ?>
                </h5>
                <br>
                <br>
                <hr class="bg-danger border-2 border-top border-primary">
              </dd>
              <br>
              <br>

              <a href="#paper-kit" class="btn btn-info btn-round" data-toggle="tooltip" title="Mari bagikan artikel ini"><i class="fa fa-share-nodes"></i> Share Artikel</a>
            </div>
          </div>
          <br />
          <br />
        </div>
      </div>
      <!-- member feature -->
      <div class="section section-dark text-center">
        <div class="container">
          <h2 class="title">Artikel Terbaru</h2>
          <div class="row">

            <?php
            $no = 1;
            ?>
            <?php foreach ($all_artikel as $article) :  ?>
              <?php $no++;
              if ($no <= 4) {
              ?>
                <div class="col-md-4">
                  <div class="card" style="width: 18rem; height: 33rem; ">
                    <img src="<?php echo base_url('asset/new_artikel.jpg'); ?>" class="card-img-top" alt="Image Alt Text">
                    <div class="card-body">
                      <h5 class="card-text text-left" style="color:#171717; font-weight:bolder;"><?php echo $article['waktu']; ?></h5>
                      <h5 class="card-title " style="color:#171717; font-weight:bold;"><?php echo $article['judul']; ?></h5>
                      <br>
                      <p class="card-text text-truncate" style="color:#494949; font-weight:bolder;"><?php echo $article['isi']; ?></p>

                      <form action="<?= base_url('guest/detail_artikel/') ?> " method="post" target="_blank">
                        <input type="hidden" name="idartikel" value="<?= $article['idartikel'] ?>">

                        <button data-toggle="tooltip" title="Baca Artikel" class="btn btn-primary" type="submit"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 14px;"> Baca Selengkapnya</span> </button>
                      </form>
                    </div>
                  </div>
                </div>
              <?php } ?>
            <?php endforeach ?>

          </div>
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
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
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

  </body>

</html>