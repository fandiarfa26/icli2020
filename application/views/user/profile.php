<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('user/_includes/top.php'); ?>

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Profile</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active"><a href="#!" class="breadcrumb-link">Dashboard</a></li>
                      <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->

<div class="row">
    <!-- ============================================================== -->
    <!-- submited article  -->
    <!-- ============================================================== -->
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary ">
                <h3 class="mb-0 text-white"><i class="fa fa-user-circle"></i> Profile</h3>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                  <tbody><tr>
                    <td width="150">ID User</td>
                    <td width="400"><b><?= $user->code ?></b></td>
                  </tr>
                  <tr>
                    <td>Fullname</td>
                    <td><?= strtoupper($user->fullname) ?></td>
                  </tr>
                  <tr>
                    <td>Institution</td>
                    <td><?= $user->institution ?></td>
                  </tr>
                
                  <tr>
                    <td>Email</td>
                    <td><?= $user->email ?></td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td><?= $user->phone ?></td>
                  </tr>
                </tbody></table>
            </div>    
        </div>
    </div>
</div>

<?php $this->load->view('user/_includes/bottom.php'); ?>