<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap4/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/paper-kit.css?v=2.2.0') ?>">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="<?php echo base_url('asset/demo/demo.css') ?>">
</head>
<body>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/paper-kit/index.html" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
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
  <div class="page-header" data-parallax="false" style="background-image: url('<?php echo base_url('11.png'); ?>');">
    <div class="filter"></div>
    <div class="container">
      <div class="motto text-center">
        <h2><b> Welcome to food journal website</b></h2>
        <h3>Find your food nutrition here.</h3>
        <br />
        <form action="" method="post">
        <div class="row justify-content-center">
          <div class="col-sm-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Food">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto">
            <button class="btn btn-success btn-lg btn-round">Search</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">About Website</h2>
            <h5 class="description"><b>This website for food journaling but you must sign-in first if you want to use website feature. </b></h5>
            <br>
            <a href="#paper-kit" class="btn btn-danger btn-round">See Details</a>
          </div>
        </div>
        <br/>
        <br/>
        <!-- <div class="row">
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-album-2"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Beautiful Gallery</h4>
                <p class="description">Spend your time generating new ideas. You don't have to think of implementing.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-bulb-63"></i>
              </div>
              <div class="description">
                <h4 class="info-title">New Ideas</h4>
                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-chart-bar-32"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Statistics</h4>
                <p>Choose from a veriety of many colors resembling sugar paper pastels.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-sun-fog-29"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Delightful design</h4>
                <p>Find unique and handmade delightful designs related items directly from our sellers.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <!-- member feature -->
    <div class="section section-dark text-center">
      <div class="container">
        <h2 class="title">Benefit Join Member</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="../assets/img/faces/clem-onojeghuo-3.jpg" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Henry Ford</h4>
                    <h6 class="card-category">Product Manager</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  Teamwork is so important that it is virtually impossible for you to reach the heights of your capabilities or make the money that you want without becoming very good at it.
                </p>
              </div>
              <div class="card-footer text-center">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="../assets/img/faces/joe-gardner-2.jpg" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Sophie West</h4>
                    <h6 class="card-category">Designer</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.
                </p>
              </div>
              <div class="card-footer text-center">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="../assets/img/faces/erik-lucatero-2.jpg" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Robert Orben</h4>
                    <h6 class="card-category">Developer</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.
                </p>
              </div>
              <div class="card-footer text-center">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
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