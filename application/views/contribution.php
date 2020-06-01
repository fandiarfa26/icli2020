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
                    <h2 class="page-title">Conference Contribution</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Conference Contribution</li>
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
        <div class="row">
            <!-- Single Ticket Pricing Table -->
            <div class="col-12 col-lg-3">
                <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                <h6 class="ticket-plan">Presenter</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?= base_url('assets/guest/img/conference.png') ?>" alt="">
                        </div>
                        <h4 class="ticket-price"><span>IDR</span>500.023</h4>
                        <!-- <a href="#!" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a> -->
                        <!-- Ticket Pricing Table Details -->
                        <hr>
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Facility 1</p>
                            <p><i class="zmdi zmdi-check"></i> Facility 2</p>
                            <p><i class="zmdi zmdi-check"></i> Facility 3</p>
                        </div>
                </div>
            </div>

            <!-- Single Ticket Pricing Table -->
            <div class="col-12 col-lg-3">
                <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="ticket-plan">Workshop</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?= base_url('assets/guest/img/workshop.png') ?>" alt="">
                        </div>
                        <h6 class="ticket-price"><span>IDR</span>500.023</h6>
                        <!-- <a href="#!" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a> -->
                        <!-- Ticket Pricing Table Details -->
                        <hr>
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Facility 1</p>
                            <p><i class="zmdi zmdi-check"></i> Facility 2</p>
                            <p><i class="zmdi zmdi-check"></i> Facility 3</p>
                        </div>
                </div>
            </div>

            <!-- Single Ticket Pricing Table -->
            <div class="col-12 col-lg-3">
                <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                <h6 class="ticket-plan">Presenter & Workshop</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?= base_url('assets/guest/img/both2.png') ?>" alt="">
                        </div>
                        <h4 class="ticket-price"><span>IDR</span>750.023</h4>
                        <!-- <a href="#!" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a> -->
                        <!-- Ticket Pricing Table Details -->
                        <hr>
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Facility 1</p>
                            <p><i class="zmdi zmdi-check"></i> Facility 2</p>
                            <p><i class="zmdi zmdi-check"></i> Facility 3</p>
                        </div>
                </div>
            </div>

            <!-- Single Ticket Pricing Table -->
            <div class="col-12 col-lg-3">
                <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                <h6 class="ticket-plan">Participant</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?= base_url('assets/guest/img/participant.png') ?>" alt="">
                        </div>
                        <h4 class="ticket-price"><span>IDR</span>50.023</h4>
                        <small style="color:#FF5400">Minimal Donation <br> for Covid19</small>
                        <!-- <a href="#!" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a> -->
                        <!-- Ticket Pricing Table Details -->
                        <hr>
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Facility 1</p>
                            <p><i class="zmdi zmdi-check"></i> Facility 2</p>
                            <p><i class="zmdi zmdi-check"></i> Facility 3</p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <!-- About Content -->
            <div class="col-12 col-md-5">
                <div class="about-content-text mb-80 text-center">
                    <h3 class="wow fadeInUp" data-wow-delay="300ms">Payment Method</h3>
                    <p class="wow fadeInUp" data-wow-delay="300ms">
                        <table class="table wow fadeInUp">
                            <tr>
                                <th>Bank Name</th>
                                <td>BNI</td>
                            </tr>
                            <tr>
                                <th>Account Number</th>
                                <td>0188361406</td>
                            </tr>
                            <tr>
                                <th>Account Holder</th>
                                <td>Maulia Wijiyanti Hidayah</td>
                            </tr>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Ticket Pricing Table Area End -->

<?php $this->load->view('_includes/bottom.php') ?>