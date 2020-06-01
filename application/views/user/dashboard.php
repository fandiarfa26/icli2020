<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('user/_includes/top.php'); ?>

<!-- PAGEHEADER -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">[<?= ($user->is_speaker)? 'Speaker':'Participant' ?>] ID: <?= $user->code ?> | <?= $user->fullname ?></h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="#" class="breadcrumb-link">Dashboard</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /PAGEHEADER -->

<div class="row">
    
    <?php if($user->is_speaker) { ?>
    <!-- SUBMITED ARTICLE -->
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header p-4 bg-primary">
                <h3 class="mb-0 text-white">
                    <i class="fa fa-file-alt"></i>
                    <span>Submitted Article</span>
                </h3>
            </div>
            <div class="card-body">
                <div class="d-none">
                    <h3 class="text-dark mb-1">M. Fandi Arfabuma</h3>
                    <div>Author :</div>
                    <h5 class="my-3">Review Information</h5>
                    <div>Article Status :</div>
                    <div>Decision : Publish to ()</div>
                    <div>Revision : ()</div>
                    <div>Decision Date: 0000-00-00</div>
                </div>
                <div>
                    <h1 class="text-dark">Not Set</h1>
                    <div>Upload article first</div>
                </div>
            </div>
            <div class="card-footer bg-white text-right">
                <a href="#" class="btn btn-primary"><i class="fa fa-upload"></i> Upload paper</a>
                <a href="#" class="btn btn-success d-none"><i class="fa fa-eye"></i> View detail paper</a>
            </div>
        </div>
    </div>
    <!-- /SUBMITED ARTICLE -->
    <?php } ?>
    <!-- CONTRIBUTION -->
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header p-4 bg-warning">
                <h3 class="mb-0 text-white"><i class="fa fa-dollar-sign"></i> Contribution Fee</h3>
            </div>
            <div class="card-body">
                <h1 class="text-dark">Not Set</h1>
                <div>Status: Payment has not been made or proof of payment has not been sent</div>
            </div>
            <div class="card-footer bg-white">
                <div>Payment Deadline: </div>
                <div>a. Early Birds Registration: September, 5th, 2019</div>
                <div>b. Regular Registration Deadline: September, 30th, 2019</div>
            </div>
        </div>
    </div>
    <!-- /CONTRIBUTION -->

    <!-- INFORMATION -->
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header p-4 bg-success">
                <h3 class="mb-0 text-white"><i class="fa fa-calendar-alt"></i> Important Date</h3>
            </div>
            <div class="card-body">
                <b>Conference Date: October, 9th-10th, 2019</b>
            </div>
            <div class="card-footer bg-white">
                <b>Venue: Aria Gajayana Hotel, Malang, East Java, Indonesia</b>
            </div>
        </div>
    </div>
    <!-- /INFORMATION -->
</div>


<?php $this->load->view('user/_includes/bottom.php'); ?>