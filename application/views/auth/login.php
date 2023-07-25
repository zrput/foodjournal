<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bde1ebf728.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/signup.css'); ?>">
    <!--end of bootstrap 5-->
    <title><?php echo $title; ?></title>
    <style>
        body {
            background-image: url("<?php echo base_url('asset/1.jpg'); ?>");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('asset/favicon-32x32.png')?>">
</head>


<body>
    <div class="login">
        <a href="<?php echo base_url('guest/home') ?>"><button type="button" class="btn-close" disabled aria-label="Close"></button></a>
        <h1 class="text-center">Login</h1>
        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger text-center"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
        <form action="<?php echo base_url('auth') ?>" method="post">
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input name="email" class="form-control" type="email" id="email" placeholder="Email">
                <h6 class="text-danger"><?php echo form_error('email') ?></h6>
            </div>
            <div class="form-group">
                <label class="form-label" for="Password">Password</label>
                <input name="password" class="form-control" type="password" id="password" placeholder="password">
                <h6 class="text-danger"><?php echo form_error('password') ?></h6>
            </div>
            <div style="text-align:right;">
                <pre style=" font-family:roboto; font-size:13px;">Lupa Password?<a href="https://wa.me/6288987455175" target="blank"> <ion-icon name="mail-outline" class="text-gray-600"></ion-icon> Hubungi Admin      </pre>
                <br>
                <br>
                </a>

            </div>
            <div class="register">
                <center>
                    <p>Belum punya akun? <a href="<?php echo base_url('auth/signup') ?>"> daftar disini!</a></p>
                </center>
            </div>

            <input class="btn btn-primary" type="submit" value="Login">
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>