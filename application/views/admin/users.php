<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('admin/_includes/top.php'); ?>

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">User Management</h2>
            <hr>
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
            <h5 class="card-header">Table Speakers/Participants</h5>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th>Full Name</th>
                            <th>Institution</th>
                            <th>Role</th>
                            <th>Last Login</th>
                            <th>Verified</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $sp) { ?>
                        <tr>
                            <td> <?= $sp->code ?> </td>
                            <td> <?= $sp->fullname ?> </td>
                            <td> <?= $sp->institution ?> </td>
                            <td> 
                                <?php if ($sp->is_speaker) { ?>
                                    <span class="badge badge-info">Speaker</span>
                                <?php }else{ ?>
                                    <span class="badge badge-warning">Participant</span>
                                <?php } ?>
                            </td>
                            <td> <?= $sp->last_login ?> </td>
                            <td> <?= (empty($sp->email_verified_at))? "No":"Yes" ?> </td>
                            <td>
                                <form method="POST" action="<?= site_url('admin0/users/setActive')?>">
                                    <input type="hidden" name="users_id" value="<?= $sp->id ?>">
                                <?php if (!empty($sp->is_active)) { ?>
                                    <input type="hidden" name="flag" value='1'>
                                    <button class="btn btn-sm btn-danger">Nonactive</button>
                                <?php }else{ ?>
                                    <input type="hidden" name="flag" value='0'>
                                    <button class="btn btn-sm btn-success">Active</button>
                                <?php } ?>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/_includes/bottom.php'); ?>