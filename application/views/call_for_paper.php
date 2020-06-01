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
                    <h2 class="page-title">Call For Paper</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Call For Paper</li>
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
                    <!-- <h6 class="wow fadeInUp" data-wow-delay="300ms">About Conference</h6> -->
                    <!-- <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to the Project Management</h3> -->
                    <p class="wow fadeInUp" data-wow-delay="300ms">The annual International Conference on Learning Innovation (ICLI) hosted by Universitas Negeri Malang, Indonesia in collaboration with the Islamic Development Bank (IsDB) and Indonesian Consortium for Learning Innovation Research (ICLIR). It aims to gather researchers, practitioners, students, experts, consultants, teachers and lecturers to share their insights and experiences on research not only in constructing innovations in learning but also the knowledge of learner’s capability. The learners who are characterized as creative and competent by having the ability to understand what they have learned and capable of taking initiative and thinking critically. In addition, ICLI is organized on the basis of the trend in the 21st century, categorized by the increasing complexity of technology and the emergence of a corporate restructuring movement.</p>
                    <p class="wow fadeInUp" data-wow-delay="300ms">The aim of the conference is to provide a platform to the researchers, experts and practitioners from academia, governments, NGOs, research institutes, and industries to meet and share cutting-edge progress in the fields of Education.</p>
                <p class="wow fadeInUp" data-wow-delay="300ms">This <?= $info['ordinal'] ?> <b>ICLI will be held on <?= $info['date'] ?>. </b>The big theme for this year would be “<?= $info['theme'] ?>”. This big theme has some subdivisions which hopefully brings the new development related to Industrial Era 4.0 into our system of education. This way, our university are prepared for giving the young generation brighter future.</p>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us And Countdown Area End -->

<?php $this->load->view('_includes/bottom.php') ?>