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
    <title>Document</title>
</head>
<body>
    <div class="login">
        <a href="#" style="margin-top: 20px;"><--Back</a>
        <h1 class="text-center">Sign Up</h1>
        <form>
        <div class="form-group">
                <label class="form-label" for="name">Fullname</label>
                <input class="form-control" type="text" id="name">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Date of birth</label>
                <input class="form-control" type="date" id="date">
            </div>
            <div class="row">
                <div class="col">
                <p>Gender : </p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Man</label><br>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Woman</label>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" style="margin-top: 20px;"for="email">Email</label>
                <input class="form-control" type="email" id="email">
            </div>
            <div class="form-group">
                <label class="form-label" for="Password">Password</label>
                <input class="form-control" type="password" id="password">
            </div>
            <div class="register">
            <center><p>already have account? <a href="#">login now!</a></p></center>
            </div>
            <input class="btn btn-primary" type="submit" value="Sign Up">
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>