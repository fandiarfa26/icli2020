<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('_includes/top.php') ?>

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(assets/guest/img/bg-img/keynote.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">Speakers</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Speakers</li>
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
            <?php foreach ($speakers as $speaker) { ?>
                
            <!-- Single Speaker Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Thumb -->
                    <div class="speaker-single-thumb">
                        <img src="<?= base_url('assets/guest/img/'. $speaker['img'] ) ?>" alt="">
                    </div>
                    <!-- Info -->
                    <div class="speaker-info">
                        <h6><?= $speaker['name'] ?></h6>
                        <p>
                            <!-- <?= $speaker['cv'] ?> <br> -->
                            <small><?= $speaker['special'] ?></small>
                            <h5 style="color: white;"><?= $speaker['country'] ?></h5>
                        </p>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</section>
<!-- Our Speakings Area End -->

<?php $this->load->view('_includes/bottom.php') ?>