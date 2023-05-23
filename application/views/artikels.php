<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css') ?>">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/paper-kit.css?v=2.2.0') ?>">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo base_url('asset/demo/demo.css') ?>">
</head>
<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/paper-kit/index.html" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
          Food Journal  halo puh
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
            <a href="../index.html" title="Home" class="nav-link"><ion-icon name="home-outline"></ion-icon> Home</a>
          </li>
          <li class="nav-item">
            <a href="https://demos.creative-tim.com/paper-kit-2/docs/1.0/getting-started/introduction.html" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> About</a>
          </li>
          <li class="nav-item">
            <a href="../index.html" class="nav-link"><ion-icon name="stats-chart-outline"></ion-icon> Artikel</a>
          </li>
          <li class="nav-item">
            <a href="../index.html" class="nav-link"><ion-icon name="gift-outline"></ion-icon> Benefit</a>
          </li>
          <li class="nav-item">
            <a href="" title="Ingfokan Login terkini" class="btn btn-primary btn-round">Login</a>
            
          </li>
          <li class="nav-item">
            <a href="" title="Mari daftar cuy" class="btn btn-info btn-round">Signin</a>

          <!-- </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://www.github.com/CreativeTimOfficial" target="_blank">
              <i class="fa fa-github"></i>
              <p class="d-lg-none">GitHub</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header page-header-xs" data-parallax="true" style="background-color: white;">
   <div class="filter"></div>
  </div>
  <div class="section profile-content">
    <div class="container ">
      <div class="owner">
        <!-- <div class="avatar">
          <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
        </div> -->
        <div class="name">
          <h4 class="title">Jane Faker
            <br />
          </h4>
          <h6 class="description">Music Producer</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <p>An artist of considerable range, Jane Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
          <br />
          <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
        </div>
      </div>
      <br/>
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">Follows</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#following" role="tab">Following</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Tab panes -->
      <div class="tab-content following">
        <div class="tab-pane active" id="follows" role="tabpanel">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <ul class="list-unstyled follows">
                <li>
                  <div class="row">
                    <div class="col-lg-2 col-md-4 col-4 ml-auto mr-auto">
                      <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-4 col-4  ml-auto mr-auto">
                      <h6>Flume
                        <br/>
                        <small>Musical Producer</small>
                      </h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4  ml-auto mr-auto">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>
                <hr />
                <li>
                  <div class="row">
                    <div class="col-lg-2 col-md-4 col-4 mx-auto ">
                      <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-4 col-4">
                      <h6>Banks
                        <br />
                        <small>Singer</small>
                      </h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-pane text-center" id="following" role="tabpanel">
          <h3 class="text-muted">Not following anyone yet :(</h3>
          <button class="btn btn-warning btn-round">Find artists</button>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer    ">
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