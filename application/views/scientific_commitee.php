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
                    <h2 class="page-title">Scientific Commitee</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Scientific Commitee</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- About Us And Countdown Area Start -->
<section class="what-we-offer-area section-padding-100-70" id="about">
    <div class="container">
        <div class="row align-items-center">
            <!-- About Content -->
            <div class="col-12 ">
                <div class="about-content-text mb-80">
                    
                    <p class="wow fadeInUp" data-wow-delay="300ms">
                        <ol>
                            <?php for($i=0; $i<5; $i++) { ?>
                            <li>{{ $category->name }}</li>
                            <?php } ?>
                        </ol>    
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us And Countdown Area End -->

<?php $this->load->view('_includes/bottom.php') ?>