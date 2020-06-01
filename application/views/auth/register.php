<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('_includes/top.php') ?>

<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax"
	style="background-image: url(assets/guest/img/bg-img/graca.jpg);">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-12">
				<div class="breadcrumb-content">
					<h2 class="page-title">Registration</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
							<li class="breadcrumb-item"><a href="<?= site_url('choose_register') ?>">Registration</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= ucwords($url) ?> Registration</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="our-ticket-pricing-table-area section-padding-100-0">
	<div class="container">
		<div class="row">
			<!-- Heading -->
			<div class="col-12">
				<div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
					<p>Form Registration</p>
					<h4 style="color:#dc0000"><?= ucwords($url) ?></h4>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-10">
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success wow fadeInUp" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
				<?php if ($this->session->flashdata('fail')): ?>
				<div class="alert alert-danger wow fadeInUp" role="alert">
					<?php echo $this->session->flashdata('fail'); ?>
				</div>
				<?php endif; ?>
				<!-- Contact Form -->
				<div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
					<div class="contact_form">
						<form method="POST" action='<?= site_url($url.'_register') ?>' aria-label="Register">
							<input type="hidden" name="is_speaker" value="<?= substr(strtoupper($url), 0, 1) ?>">
							<div class="contact_input_area">
								<div class="row">
									<!-- Form Group -->
									<div class="col-12">

										<div class="form-group">
											<label for="fullname">Full Name</label>
											<input id="fullname" type="text"
												class="form-control <?= form_error('fullname')? 'is-invalid' : '' ?>"
												name="fullname" required
												autocomplete="fullname" placeholder="ex: John Doe" autofocus>
											
											<span class="invalid-feedback" role="alert">
												<strong><?= form_error('fullname') ?></strong>
											</span>
											
										</div>

										<div class="form-group">
											<label for="email">E-mail</label>
											<input id="email" type="email"
												class="form-control <?= form_error('email')? 'is-invalid':'' ?>" name="email"
												required autocomplete="email"
												placeholder="ex: john.doe@mail.com" autofocus>
											
											<span class="invalid-feedback" role="alert">
												<strong><?= form_error('email') ?></strong>
											</span>
											
										</div>

										<div class="form-group">
											<label for="institution">Institution</label>
											<input id="institution" type="text"
												class="form-control <?= form_error('institution')? 'is-invalid':'' ?>"
												name="institution" required
												autocomplete="institution" placeholder="ex: State University of Malang"
												autofocus>
											<span class="invalid-feedback" role="alert">
												<strong><?= form_error('institution') ?></strong>
											</span>
										</div>

										<div class="form-group">
											<label>Regional</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="local" id="local"
													value="1" checked>
												<label class="form-check-label" for="local">Local</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="local" id="no-local"
													value="0">
												<label class="form-check-label" for="no-local">International</label>
											</div>
											
											<span class="invalid-feedback" role="alert">
												<strong><?= form_error('local') ?></strong>
											</span>
											
										</div>

										<?php if ($url === "speaker") { ?>

										<div class="form-group">
											<label for="category">Category</label>
											<select name="category" id="category" class="custom-select" required>
												<option value="">-- Choose Category --</option>
												<?php foreach ($categories as $category) { ?>
												<option value="<?= $category->id ?>"><?= $category->name ?></option>
                                                <?php } ?>
											</select>
											
											<span class="invalid-feedback" role="alert">
												<strong><?= form_error('category') ?></strong>
											</span>
										</div>

                                        <?php } ?>

										<div class="form-group">
											<label for="phone">Phone</label>
											<input id="phone" type="text"
												class="form-control <?= form_error('phone') ? 'is-invalid':'' ?>" name="phone"
												required autocomplete="phone"
												placeholder="ex: +62 812-3456-7890" autofocus>
											
											<span class="invalid-feedback" role="alert">
												<strong><?= form_error('phone') ?></strong>
											</span>
										</div>

										<div class="form-group">
											<label for="password">Password</label>
											<input id="password" type="password"
												class="form-control <?= form_error('password')? 'is-invalid':'' ?>"
												name="password" required
												autocomplete="password" autofocus>
											
											<span class="invalid-feedback" role="alert">
												<strong><?= form_error('password') ?></strong>
											</span>
										</div>

										<div class="form-group">
											<label for="password_confirmation">Password Confirmation</label>
											<input id="password_confirmation" type="password"
												class="form-control <?= form_error('password_confirmation')? 'is-invalid':'' ?>"
												name="password_confirmation" required autofocus>
											
											<span class="invalid-feedback" role="alert">
												<strong><?= form_error('password_confirmation') ?></strong>
											</span>
										</div>

										<div>
											<button type="submit" class="btn confer-btn btn-block">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</section>

<?php $this->load->view('_includes/bottom.php') ?>
