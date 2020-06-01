<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin ICLI</title>
    <link rel="icon" href="<?= base_url('assets/guest/img/favicon.png') ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/auth/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/auth/vendor/fonts/circular-std/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/auth/libs/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/auth/vendor/fonts/fontawesome/css/fontawesome-all.css') ?>">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"> <h2 class="mb-0"><a href="<?= site_url() ?>"> ICLI 2020 </a></h2> </div>
            <div class="card-body">
                <form method="POST" action="<?= site_url('admin0/login') ?>" aria-label="Login">

                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" id="email" name="email" required autocomplete="email" placeholder="E-mail">
                        
                    </div>
                    <div class="form-group">
                        <input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
  
    <script src="<?= base_url('assets/auth/vendor/jquery/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/auth/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>
</body>
 
</html>