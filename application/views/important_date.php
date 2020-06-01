<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('_includes/top.php') ?>

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(assets/guest/img/bg-img/calendar.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">Important Date</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Important Date</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Our Schedule Area Start -->
<section class="our-schedule-area bg-white section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Tab Content -->
                <div class="tab-content" id="conferScheduleTabContent">
                    <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                        <!-- Single Tab Content -->
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-12">

                                    <?php foreach($important_dates as $item) { ?>
                                        
                                    <!-- Single Schedule Area -->
                                    <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                        <!-- Single Schedule Thumb and Info -->
                                        <div class="single-schedule-tumb-info d-flex align-items-center">
                                            
                                            <!-- Single Schedule Info -->
                                            <div class="single-schedule-info">
                                                <h6><?= $item->activity ?></h6>
                                                
                                            </div>
                                        </div>
                                        <!-- Single Schedule Info -->
                                        <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-time"></i> <?= $item->dates ?></p>
                                        </div>
                                        
                                    </div>

                                    <?php } ?>

                                </div>

                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Schedule Area End -->

<?php $this->load->view('_includes/bottom.php') ?>