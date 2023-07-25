<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cari Nutrisi Makanan</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap4/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/paper-kit.css?v=2.2.0') ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/card.css') ?>">


  <!-- Custom styles for this page -->

  <!-- Custom Style -->
  <style>
    dd {
      text-align: justify;
    }

    h3 {
      text-shadow: 3px 3px #2e2e2e;
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
    <div class="page-header  page-header-small" data-parallax="flase" style="background-image: url('<?php echo base_url('asset/makanan_bg.jpg'); ?>');">
      <div class="filter"></div>
      <div class="container">
        <div class="motto text-center">
          <h2 style="font-weight:light; "><b> Selamat Datang Di Halaman Pencarian Nutrisi Makanan</b></h2>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <h3 class="text-light text-shadow" style="font-weight:bold;">Coba Cari Makanan Disini.</h3>

          <form action="<?= base_url('Guest/cari_makanan_umum') ?>" method="post">
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
          <div>
            <?php if ($keyword) { ?>
              <b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php if (empty($data[0]['nama_makanan'])) { ?>
            <br>
            <h2 style="font-family:roboto; ">Oopss.... Maaf, Makanan yang Anda cari belum tersedia... <i class="fa fa-hourglass"></i> </h2>
            <br>
          <?php } else { ?>

            <!-- MENAMPILKAN CARDS MAKANAN -->

            <div id="cardContainer" class="row">
              <!-- Your card elements here (e.g., card1, card2, card3, etc.) -->
              <?php foreach ($data as $key) : ?>

                <div class="col-md-3 card">
                  <div class="card-sl">
                    <div class="card-image">
                      <img src="<?php echo base_url('asset/upload/' . $key['foto']); ?>" style="width: 260px; height: 250px; object-fit: cover;" />
                    </div>
                    <div class="card-heading">
                      <?php echo $key['nama_makanan'] ?>
                    </div>
                    <div class="card-text text-left">
                      <span>Kalori = <?php echo $key['kalori'] ?> kalori</span><br>
                      <span>Protein = <?php echo $key['protein'] ?> gram</span><br>
                      <span>Lemak = <?php echo $key['lemak'] ?> gram</span><br>
                      <span>Kandungan Makanan : </span><br>
                      <!-- <pre style="font-family:roboto; color:#2e2e2e; font-size:13px;"> -->
                      <?php echo $key['vit_mineral'] ?>
                      <!-- </pre> -->

                    </div>
                    <a class="card-button"></a>
                  </div>
                </div>
              <?php endforeach ?>
            <?php } ?>
            </div>

            <!-- END MENAMPILKAN CARDS MAKANAN -->


            <!-- Pagination -->
            <nav aria-label="Page navigation">
              <ul id="pagination" class="pagination justify-content-center">
                <li class="page-item" id="prevPage">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo; Previous</span>
                  </a>
                </li>
                <li class="page-item" id="nextPage">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">Next &raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- #Pagination -->

            <!-- TEST -->
            <!-- TEST -->

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
      <script>
        $(document).ready(function() {
          // Number of cards per page
          var cardsPerPage = 4;
          var currentPage = 1;

          // Calculate the total number of pages
          var totalCards = $("#cardContainer .card").length;
          var totalPages = Math.ceil(totalCards / cardsPerPage);

          // Hide all cards initially
          $("#cardContainer .card").hide();

          // Show the first page of cards
          showPage(currentPage);

          // Handle previous button click
          $("#prevPage").on("click", function(e) {
            e.preventDefault();
            currentPage--;
            if (currentPage < 1) {
              currentPage = 1;
            }
            showPage(currentPage);
          });

          // Handle next button click
          $("#nextPage").on("click", function(e) {
            e.preventDefault();
            currentPage++;
            if (currentPage > totalPages) {
              currentPage = totalPages;
            }
            showPage(currentPage);
          });

          // Function to show cards for a specific page
          function showPage(page) {
            var startCard = (page - 1) * cardsPerPage;
            var endCard = startCard + cardsPerPage;

            // Hide all cards
            $("#cardContainer .card").hide();

            // Show cards for the selected page
            $("#cardContainer .card").slice(startCard, endCard).show();

            // Disable/enable "Previous" and "Next" buttons
            if (page === 1) {
              $("#prevPage").addClass("disabled");
            } else {
              $("#prevPage").removeClass("disabled");
            }

            if (page === totalPages) {
              $("#nextPage").addClass("disabled");
            } else {
              $("#nextPage").removeClass("disabled");
            }
          }
        });
      </script>

      <!-- <script>
        $(document).ready(function() {
          // Number of cards per page
          var cardsPerPage = 4;

          // Calculate the total number of pages
          var totalCards = $("#cardContainer .card").length;
          var totalPages = Math.ceil(totalCards / cardsPerPage);

          // Hide all cards initially
          $("#cardContainer .card").hide();

          // Show the first page of cards
          showPage(1);

          // Generate page number buttons
          for (var i = 1; i <= totalPages; i++) {
            $("#pagination li:nth-last-child(2)").before('<li class="page-item"><a class="page-link" href="#">' + i + '</a></li>');
          }

          // Handle previous and next button click
          $("#pagination .page-link").on("click", function(e) {
            e.preventDefault();
            var page = $(this).text();

            if (page === "&laquo;") {
              page = parseInt($("#pagination .active a").text()) - 1;
            } else if (page === "&raquo;") {
              page = parseInt($("#pagination .active a").text()) + 1;
            }

            if (page > 0 && page <= totalPages) {
              showPage(page);
            }
          });

          // Function to show cards for a specific page
          function showPage(page) {
            var startCard = (page - 1) * cardsPerPage;
            var endCard = startCard + cardsPerPage;

            // Hide all cards
            $("#cardContainer .card").hide();

            // Show cards for the selected page
            $("#cardContainer .card").slice(startCard, endCard).show();

            // Update active state for pagination links
            $("#pagination li").removeClass("active");
            $("#pagination li:nth-child(" + (page + 1) + ")").addClass("active");
          }
        });
      </script> -->


      <!--  Google Maps Plugin    -->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

      <!-- Page level plugins -->


  </body>

</html>