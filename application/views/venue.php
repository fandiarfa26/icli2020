<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('_includes/top.php') ?>

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(assets/guest/img/bg-img/videocall.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">Venue</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Venue</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Map Area Start -->
<!-- <section class="what-we-offer-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                    <h4>Hotel Santika Premiere, Malang, East Java, Indonesia</h4>
                </div>
            </div>
        </div>

        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3941149770253!2d112.63479131477412!3d-7.958160181505849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629cc7e38166b%3A0x597cec8e5a265271!2sHotel%20Santika%20Premiere%20Malang!5e0!3m2!1sen!2sid!4v1582511521375!5m2!1sen!2sid" allowfullscreen></iframe>
        </div>
    </div>
</section> -->
<!-- Map Area End -->
<?php $this->load->view('_includes/bottom.php') ?>