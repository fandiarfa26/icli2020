<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('user/_includes/top.php'); ?>

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Payment</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active">Payment</li>
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
                <h3 class="mb-0 text-white"><i class="fa fa-file-alt"></i> Payment</h3>
            </div>
            <div class="card-body">
                <table>
                <tbody>
                    <tr>
                        <td width="150">ID</td>
                        <td width="15">:</td>
                        <td><b><?= $user->code ?></b></td>
                    </tr>
                    <tr>
                        <td width="120">Name</td>
                        <td width="15">:</td>
                        <td><?= $user->fullname ?></td>
                    </tr>
                    <tr>
                        <td width="120">Email</td>
                        <td width="15">:</td>
                        <td><?= $user->email ?></td>
                    </tr>
                    <tr>
                        <td width="120">Institution</td>
                        <td width="15">:</td>
                        <td><?= $user->institution ?></td>
                    </tr>
                    <tr>
                        <td width="120" valign="top">Contribution Cost</td>
                        <td width="15">:</td>
                        <td>
                            <font size="5">
                                <strong>
                                <?= (empty($payment) || $payment->cost === "")? "Not Set" : $payment->cost ?>
                                </strong>
                            </font><br>
                            <a href="#!">[View Detail]</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="120" valign="top">Status</td>
                        <td width="15" valign="top">:</td>
                        <td>
                            <strong>
                                <?php if (empty($payment)) { 
                                    echo "Payment has not been made or proof of payment has not been sent.";
                                }else{
                                    switch($payment->status){
                                        case 1:
                                            echo "Waiting for confirmation";
                                            break;
                                        case 2:
                                            echo "Paid";
                                            break;
                                        case 3:
                                            echo "Rejected";
                                            break;
                                        default:
                                            echo "Not Set";
                                    }
                                } ?>
                            </strong>
                            <br><hr><font size="2">If payment has not been made, please kindly do so with the amount stated above (<b>Not Set </b>) and make a bank trasfer to: 
                            <br><b>Bank Name: BNI 
                            <br>Acc. No: 0814 0093 40 
                            <br>SWIFT Code: BNINIDJAXX 
                            <br>Acc. Name: ELLA FARIDATI ZEN </b>
                            <br>Next, please send proof of payment by clicking the following button.
                            <hr>
                        </td>
                    </tr>
                    <?php if (!empty($payment && $payment->status === 3)) { ?>
                        <tr>
                            <td>Comment</td>
                            <td>:</td>
                            <td><?= $payment->comment ?></td>
                        </tr>
                    <?php } ?>
                    <?php if (empty($payment) || $payment->status === 3) { ?>
                    <form method="POST" action="<?= site_url('user/payment/sendproof') ?>" enctype="multipart/form-data">
                        
                        <tr>
                            <td>Proof of Payment</td>
                            <td>:</td>
                            <td>
                                <input type="file" name="proof_img" id="proof_img" class="form-control" accept="image/*">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right">
                                <button class="btn btn-primary mt-3" type="submit">Upload</button>
                            </td>
                        </tr>
                    </form>
                    <?php } ?>
                    
                </tbody>
                </table>
            </div>    
        </div>
    </div>
</div>

<?php $this->load->view('user/_includes/bottom.php'); ?>
