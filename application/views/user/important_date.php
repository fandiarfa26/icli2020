<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('user/_includes/top.php'); ?>

<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Timeline </h2>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Timeline</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Activity</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
                        <?php foreach($impDate as $date) { ?>
						<tr>
							<td width="20"><?= $date->id ?></td>
							<td width="300"><?= $date->activity ?></td>
							<td><?= $date->dates ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('user/_includes/bottom.php'); ?>
