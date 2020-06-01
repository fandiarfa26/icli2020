<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('_includes/top.php') ?>
<!-- Welcome Area Start -->
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-welcome-slide bg-img bg-overlay jarallax"
            style="background-image: url(assets/guest/img/bg-img/conference.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12">
                        <div class="welcome-text text-right">
                            <h2 data-animation="fadeInUp" data-delay="300ms">ICLI 2020 </h2>
                            <font data-animation="fadeInUp" data-delay="500ms" color="white" size="5pt">
                                International
                                Conference Learning Innovation</font><br><br>
                            <h6 data-animation="fadeInUp" data-delay="700ms"><?= $info['venue'] ?></h6>
                            <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                <a href="<?= site_url('call_for_paper') ?>" class="btn confer-btn">More
                                    Information <i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single-welcome-slide bg-img bg-overlay jarallax"
            style="background-image: url(assets/guest/img/bg-img/educator.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12">
                        <div class="welcome-text-two text-center">
                            <h5 data-animation="fadeInUp" data-delay="100ms">Conference Theme :</h5>
                            <h2 data-animation="fadeInUp" data-delay="300ms"><?= $info['theme'] ?></h2>
                            <div data-animation="fadeInUp" data-delay="300ms">
                                <font size="4pt" color="white">
                                    This big theme has some subdivisions which hopefully brings the new
                                    development
                                    related to Industrial Era 4.0 into our system of education. This way,
                                    our university
                                    are prepared for giving the young generation brighter future.
                                </font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-welcome-slide bg-img bg-overlay jarallax"
            style="background-image: url(assets/guest/img/bg-img/calendar.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12">
                        <div class="welcome-text-two text-center">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Call of paper</h2>
                            <div class="event-group">
                                <?php foreach ($important_dates as $item) { ?>
                                <!-- Event Meta -->
                                <div class="event-meta " data-animation="fadeInUp" data-delay="500ms">
                                    <font class="event-author"> <?= $item->activity ?></font>
                                    <font class="event-date"> <?= $item->dates ?></font>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-welcome-slide bg-img bg-overlay jarallax"
            style="background-image: url(assets/guest/img/bg-img/keynote.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12">
                        <div class="welcome-text-two text-center">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Keynote Speaker :</h2>
                            <div data-animation="fadeInUp" data-delay="300ms">
                                <?php foreach ($speakers as $speaker) { ?>
                                    <font size="4pt" color="white">
                                        <?= $speaker['name']." (".$speaker['country'].")" ?>
                                    </font><br>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-welcome-slide bg-img bg-overlay jarallax"
            style="background-image: url(assets/guest/img/bg-img/videocall.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12">
                        <div class="welcome-text-two text-center">
                            <h2 data-animation="fadeInUp" data-delay="100ms">venue :</h2>
                            <div data-animation="fadeInUp" data-delay="300ms">
                                <font size="4pt" color="white">
                                    Online
                                </font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Scroll Icon -->
    <div class="icon-scroll" id="scrollDown"></div>
</section>
<!-- Welcome Area End -->

<!-- About Us And Countdown Area Start -->
<section class="about-us-countdown-area section-padding-100-0" id="about">
    <div class="container">
        <div class="row align-items-center">
            <!-- About Content -->
            <div class="col-12">
                <div class="about-content-text mb-80">
                    <h6 class="wow fadeInUp" data-wow-delay="300ms">About Conference</h6>
                    <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to ICLI 2020</h3>
                    <p class="wow fadeInUp" data-wow-delay="300ms">
                        ICLI is an annual International Conference on Learning Innovation (ICLI) hosted by Universitas
                        Negeri Malang, Indonesia in collaboration with the Islamic Development Bank (IsDB) and
                        Indonesian Consortium for Learning Innovation Research (ICLIR). It aims to gather researchers,
                        practitioners, students, experts, consultants, teachers and lecturers to share their insights
                        and experiences on research not only in constructing innovations in learning but also the
                        knowledge of learner’s capability. The learners who are characterized as creative and competent
                        by having the ability to understand what they have learned and capable of taking initiative and
                        thinking critically. In addition, ICLI is organized on the basis of the trend in the 21st
                        century, categorized by the increasing complexity of technology and the emergence of a corporate
                        restructuring movement.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="300ms">
                        The aim of the conference is to provide a platform to the researchers, experts and practitioners
                        from academia, governments, NGOs, research institutes, and industries to meet and share
                        cutting-edge progress in the fields of Education.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="300ms">
                        This <?= $info['ordinal'] ?> <b>ICLI will be held on <?= $info['date'] ?>. </b>The big theme
                        for this year would be “<?= $info['theme'] ?>”. This big theme has some subdivisions which
                        hopefully brings the new development related to Industrial Era 4.0 into our system of education.
                        This way, our university are prepared for giving the young generation brighter future.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="300ms">
                        <b> Papers will be published at: </b>
                        <br>
                        <br>    
                        <img src="assets/guest/img/logo_ijim.png" style="height: 70px;margin-bottom: 5px">
                        <br>1. International Journal of Interactive Mobile Technologies (iJIM, Scopus Indexed)
                        <br>
                        <br>    
                        <img src="assets/guest/img/logo_jodli.png" style="height: 70px;margin-bottom: 5px">
                        <br>2. Journal of Disruptive Learning Innovation (JODLI)
                        <br>
                        <br>    
                        <img src="assets/guest/img/logo_google-scholar.png" style="height: 70px;margin-bottom: 5px">
                        <br>3. Google Scholar
                    </p>
                    <a href="<?= site_url('login') ?>" class="btn confer-btn mt-50 wow fadeInUp"
                        data-wow-delay="300ms">Interested <i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Counter Up Area -->
    <div class="countdown-up-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                    <!-- Countdown Text -->
                    <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6>Conference Date</h6>
                        <h4>Count Every Second Until the Event</h4>
                    </div>
                </div>

                <div class="col-12 col-md-9">
                    <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div id="clock"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us And Countdown Area End -->

<!-- Our Speakings Area Start -->
<section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60"
    style="background-image: url(assets/guest/img/bg-img/graca.jpg);">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                    <p>Our Speakings</p>
                    <h4>Who’s speaking</h4>
                </div>
            </div>
        </div>

        <div class="row">
            
            <?php foreach ($speakers as $speaker) { ?>
            <!-- Single Speaker Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                    <!-- Thumb -->
                    <div class="speaker-single-thumb">
                        <img src="assets/guest/img/<?= $speaker['img'] ?>" alt="">
                    </div>
                    <!-- Info -->
                    <div class="speaker-info">
                        <h6><?= $speaker['name'] ?><?php if ($speaker['verified'] == true) { ?> <small>✔️</small> <?php } ?></h6>
                        
                    </div>
                </div>
            </div>

            <?php } ?>

            <div class="col-12">
                <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                    <a class="btn confer-btn-white" href="<?= site_url('keynote_speakers') ?>">View Detail of Speakers <i
                            class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Speakings Area End -->

<!-- Our Schedule Area Start -->
<section class="our-schedule-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">

                    <h4>Important Date</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">


                <!-- Tab Content -->
                <div class="tab-content" id="conferScheduleTabContent">
                    <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                        <!-- Single Tab Content -->
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-12">


                                    <?php foreach ($important_dates as $item) { ?> 
                                    

                                    <!-- Single Schedule Area -->
                                    <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp"
                                        data-wow-delay="300ms">
                                        <!-- Single Schedule Thumb and Info -->
                                        <div class="single-schedule-tumb-info d-flex align-items-center">
                                            <!-- Single Schedule Info -->
                                            <div class="single-schedule-info">
                                                <h6><?= $item->activity ?></h6>
                                            </div>
                                        </div>
                                        <!-- Single Schedule Info -->
                                        <div class="schedule-time-place">
                                            <p>
                                                <i class="zmdi zmdi-time"></i> <?= $item->dates ?> <br>
                                            </p>
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

<!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(assets/guest/img/bg-img/conference2.jpg);">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>Choose a Ticket</p> -->
                        <h4>Fee Information</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-3">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Presenter</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?= base_url('assets/guest/img/conference.png') ?>" alt="">
                        </div>
                        <h4 class="ticket-price"><span>IDR</span>500.000</h4>
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
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Workshop</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?= base_url('assets/guest/img/workshop.png') ?>" alt="">
                        </div>
                        <h6 class="ticket-price"><span>IDR</span>500.000</h6>
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
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Presenter & Workshop</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?= base_url('assets/guest/img/both2.png') ?>" alt="">
                        </div>
                        <h4 class="ticket-price"><span>IDR</span>750.000</h4>
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
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Participant</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?= base_url('assets/guest/img/participant.png') ?>" alt="">
                        </div>
                        <h4 class="ticket-price"><span>IDR</span>50.000</h4>
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
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->


<!-- Our Sponsor And Client Area Start -->
<section class="our-sponsor-client-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Partners &amp; Sponsors</p>
                        <h4>Associate</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                        <?php
                            $assocs = ['KEMENDIKBUD.png','UM.png','IsDB.png','iJIM.png','GOOGLE SCHOLAR.png','UNEJ.png','UNMUL.png','UNTIRTA.png'];
                            foreach ($assocs as $assoc) {
                        ?>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="<?= base_url('assets/guest/img/associate/'.$assoc) ?>" alt=""></a>
                        </div>
                        <?php } ?>

                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- Our Sponsor And Client Area End -->

    

<?php $this->load->view('_includes/bottom.php') ?>