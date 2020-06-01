<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICLI 2020</title>

    <link rel="icon" href="<?= base_url('assets/guest/img/favicon.png') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/auth/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/auth/libs/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/auth/vendor/fonts/fontawesome/css/fontawesome-all.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/auth/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/auth/vendor/fonts/flag-icon-css/flag-icon.min.css') ?>">
</head>
<body>
    
    <!-- MAIN WRAPPER -->
    <div class="dashboard-main-wrapper">
        <!-- NAVBAR -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a href="<?= site_url('user/home') ?>" class="navbar-brand">
                    <img src="<?= base_url('assets/guest/img/logo_icli.jpeg') ?>" style="height: 50px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-ws fa-chevron-down"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item nav-user">
                            <a href="<?= site_url('user/logout') ?>" class="nav-link nav-user-img">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- /NAVBAR -->

        <!-- SIDEBAR -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="#" class="d-xl-none d-lg-none">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">Menu</li>
                            <li class="nav-item">
                                <a href="<?= site_url('user/home') ?>" class="nav-link">
                                    <i class="fa fa-fw fa-columns"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <?php if ($this->session->userdata('user_logged')->is_speaker) { ?>
                            <li class="nav-item">
                                <a href="<?= site_url('user/article') ?>" class="nav-link">
                                    <i class="fa fa-fw fa-file-alt"></i>
                                    <span>Submit Article</span>
                                </a>
                            </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a href="<?= site_url('user/payment') ?>" class="nav-link">
                                    <i class="fa fa-fw fa-dollar-sign"></i>
                                    <span>Payment</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('user/important_date') ?>" class="nav-link">
                                    <i class="fa fa-fw fa-calendar-alt"></i>
                                    <span>Important Date</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('user/profile') ?>" class="nav-link">
                                    <i class="fa fa-fw fa-user-circle"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /SIDEBAR -->
        
        <!-- WRAPPER -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">