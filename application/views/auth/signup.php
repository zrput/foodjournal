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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/signup.css');?>">
    <!--end of bootstrap 5-->
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="login">
        <a href="<?php echo base_url('guest/home') ?>" style="margin-top: 20px;"><--Back</a>
        <h1 class="text-center">Sign Up</h1>
        <form action="<?php echo base_url('auth/signup') ?>" method="post">
        <div class="form-group">
                <label class="form-label" for="name">Fullname</label>
                <input name="name" class="form-control" type="text" id="name">
                <h6 class="text-danger"><?php echo form_error('name')?></h6>
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Date of birth</label>
                <input name="date" class="form-control" type="date" id="date">
                <h6 class= "text-danger"><?php echo form_error('date')?></h6>
            </div>
            <div class="row">
                <div class="col">
                <p>Gender : </p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" value="laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Man</label><br>
                    <input class="form-check-input" type="radio" name="gen" value="perempuan">
                    <label class="form-check-label" for="inlineRadio2">Woman</label>
                </div>
                </div>
                <h6 class="text-danger ms-2"><?php echo form_error('gen')?></h6>
            </div>
            <div class="form-group">
                <label class="form-label" style="margin-top: 20px;"for="email">Email</label>
                <input name="email" class="form-control" type="email" id="email">
            </div>
            <div class="form-group">
                <label class="form-label" for="Password">Password</label>
                <input name="password" class="form-control" type="password" id="password">
                <h6 class= "text-danger"><?php echo form_error('password')?></h6>
            </div>
            <div class="register">
            <center><p>sudah punya akun? <a href="<?php echo base_url('auth')?>">login disini!</a></p></center>
            </div>
            <input class="btn btn-primary" type="submit" value="Sign Up">
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>