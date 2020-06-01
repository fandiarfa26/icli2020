<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('admin/_includes/top.php'); ?>

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Payment Management</h2>
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
            <h5 class="card-header">User's Payment table</h5>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Cost</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $dt) { ?>
                        <tr>
                            <th scope="row"><?= $dt->code ?></th>
                            <td><?= $dt->fullname ?></td>
                            <td>
                                <?php if ($dt->is_speaker) { ?>
                                    <span class="badge badge-info">Speaker</span>
                                <?php }else{ ?>
                                    <span class="badge badge-warning">Participant</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php switch($dt->status) {
                                    case 1:
                                        echo "Pending";
                                        break;
                                    case 2:
                                        echo "Paid";
                                        break;
                                    case 3:
                                        echo "Rejected";
                                        break;
                                    default:
                                        echo "Unpaid";
                                    } ?>
                            </td>
                            <td><?= (!empty($dt->cost))? $dt->cost: "-" ?></td>
                            <td>
                                <?php if (!empty($dt->status) && $dt->status == "1") { ?>
                                    <a href="<?= base_url('uploads/proof_img/'.$dt->proof_img) ?>" target="_blank" class="btn btn-primary">View</a>
                                    <a href="#!" class="btn btn-success" data-toggle="modal" data-target="#view-<?= $dt->id ?>">Confirm</a> 
                                    <!-- Modal -->
                                    <div class="modal fade" id="view-<?= $dt->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">  
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Payment - <?= $dt->fullname ?></h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>

                                            <form method="POST" action="<?= site_url('admin0/payment/confirmproof') ?>" enctype="multipart/form-data">
                                                
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" id="p_id" value="<?= $dt->user_id ?>">
                                                    <div class="form-group">
                                                        <label for="cost">Cost</label>
                                                        <input class="form-control" type="text" name="cost" id="cost">
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <label for="answer">Answer</label>
                                                        </div>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" class="custom-control-input" name="answer" id="accept" value="1"> 
                                                            <span class="custom-control-label">Accept</span>
                                                        </label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" class="custom-control-input" name="answer" id="reject" value="0"> 
                                                            <span class="custom-control-label">Reject</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comment">Comment</label>
                                                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            
                                            </form>
                                            
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
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