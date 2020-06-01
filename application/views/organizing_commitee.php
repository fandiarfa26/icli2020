<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('_includes/top.php') ?>

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(assets/guest/img/bg-img/conference.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">Organizing Commitee</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Organizing Commitee</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Our Speakings Area Start -->
<section class="our-speaker-area section-padding-100">
    <div class="container">
        <div class="row">
                
            <!-- Single Speaker Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Thumb -->
                    <div >
                        <img src="<?= base_url('assets/guest/img/dli-org.jpg') ?>" alt="">
                    </div>
                    <!-- Info -->
                    <div class="speaker-info">
                        <h5>PUIPT DLI</h5>
                        
                    </div>
                </div>
            </div>
            <!-- Single Speaker Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Thumb -->
                    <div>
                        <img src="<?= base_url('assets/guest/img/um-org.jpg') ?>" alt="">
                    </div>
                    <!-- Info -->
                    <div class="speaker-info">
                        <h5>LP3 UM</h5>
                        
                    </div>
                </div>
            </div>
            <!-- Single Speaker Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Thumb -->
                    <div>
                        <img src="<?= base_url('assets/guest/img/um-org.jpg') ?>" alt="">
                    </div>
                    <!-- Info -->
                    <div class="speaker-info">
                        <h5>Universitas Negeri Malang</h5>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Our Speakings Area End -->

<?php $this->load->view('_includes/bottom.php') ?>