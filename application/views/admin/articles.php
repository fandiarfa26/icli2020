<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('admin/_includes/top.php'); ?>


<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Article Management</h2>
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
            <h5 class="card-header">User's Article table</h5>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>Title</th>
                            <th>Abstract</th>
                            <th>Article</th>
                            <th>Author</th>
                            <th>Presenter</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $dt) { ?>
                        <tr>
                            <td><?= $dt->code ?></td>
                            <td><?= $dt->title ?></td>
                            <td>
                            	<a href="<?= base_url('uploads/abstract/'.$dt->abstract_file) ?>" target="_blank" class="btn btn-info">
                            		<?= $dt->abstract_file ?>
                            	</a>
                            </td>
                            <td>
                           	<?php if ($dt->full_article_file) { ?>
                           		<a href="<?= base_url('uploads/abstract/'.$dt->full_article_file) ?>" target="_blank">
                            		<?= $dt->full_article_file ?>
                            	</a>
                            <?php } else { 
                            	echo "-";
                            }
                            ?> 
                            </td>
                            <td><?= $dt->author ?></td>
                            <td><?= $dt->presenter ?></td>
                            <td><?php if ($dt->status==0) {
                            		echo "-";
                            	} else if ($dt->status==1){
                            		echo "Accept";
                            	} else if ($dt->status ==2) {
                            		echo "Rejected";
                            	}
                            ?>		
                            </td>

                            <?php if ($dt->status==0) { ?>
                            <td style="display: flex; justify-content: space-around;">
								<form method="POST" action="<?= site_url('admin0/articles/confirm') ?>" >
									<input type="hidden" name="user_id" value="<?= $dt->user_id ?>">
									<button name="flag" value="1" class="btn btn-success">Accept</button> 
								</form>
								<form method="POST" action="<?= site_url('admin0/articles/confirm') ?>">
									<input type="hidden" name="user_id" value="<?= $dt->user_id ?>">
									<button name="flag" value="2" class="btn btn-danger">Reject</button>
								</form>
                            </td>
                            <?php } else {
                            	echo "<td></td>";
                            }  ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/_includes/bottom.php'); ?>