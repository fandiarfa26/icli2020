<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('_includes/top.php') ?>

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(assets/guest/img/bg-img/graca.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">Registration</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registration</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Our Ticket Pricing Table Area Start -->
<section class="our-ticket-pricing-table-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-around">
            <!-- Single Ticket Pricing Table -->
            <div class="col-12 col-lg-4">
                <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="ticket-plan">Speakers</h6>
                    <!-- Ticket Icon -->
                    <div class="ticket-icon mb-4">
                        <img src="<?= base_url('assets/guest/img/speakers-reg.jpg') ?>" alt="">
                    </div>
                    <a href="<?= site_url('speaker_register') ?>" class="btn confer-btn mb-30">Speakers Registration<i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>

            <!-- Single Ticket Pricing Table -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-ticket-pricing-table style-2 active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="ticket-plan">Non Speakers</h6>
                    <!-- Ticket Icon -->
                    <div class="ticket-icon mb-4">
                        <img src="<?= base_url('assets/guest/img/non-speakers-reg.jpg') ?>" alt="">
                    </div>
                    <a href="<?= site_url('participant_register') ?>" class="btn confer-btn mb-30" style="font-size:7pt">Non Speakers Registration<i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Ticket Pricing Table Area End -->

<?php $this->load->view('_includes/bottom.php') ?>