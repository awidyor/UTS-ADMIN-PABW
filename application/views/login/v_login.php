<!doctype html>
<html lang="en">

<head>
    <link rel="icon" type="<?= base_url();?>image/jpg/png" href="<?= base_url();?>assets/img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Welcome To Sabatour</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .back-img {
            background-image:url("assets/img/banda.jpg");
            background-size:cover;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center back-img">
    <div class="col-md 6">
    <form class="form-signin" action="<?= base_url('login/aksi_login'); ?>" method="post">
       <center> <img src="assets/img/logo.png"  width="100" height="100" ></center>
       <br>
       <h2 class="mb-3" style="font-size: 24px; color:white;" >Login</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="username" class="form-control" placeholder="Email address" required autofocus><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3" style="color:white;">
            <label>
                <input type="checkbox" value="remember-me"> Remember me

        </div>
        <button class="btn btn-lg btn-primary btn-block" value="Login " type="submit"> Login</button>
        <div class="checkbox mb-3"  style="color:white;">
        </label>
        <body>
            <font> Belum punya akun? klik </font> 
        </body>
            <a href="<?= base_url();?>user/tambah">Registrasi<div class="col-md-5">
        </div>
        
        <p class="mt-4 mb-3 text-muted ">&copy; 2022</p>
    </form>
    </div>
</body>


</html>