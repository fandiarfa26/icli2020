<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>International Conference Learning Innovation (ICLI) 2020</title>

	<link rel="icon" href="<?= base_url('assets/guest/img/favicon.png') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/guest/style.css') ?>">

	<style>
		
		.our-schedule-area .schedule-tab .nav-tabs .nav-item .nav-link{
			background-color:black !important;
			border:none
		}
		.our-schedule-area .schedule-tab .nav-tabs .nav-item .nav-link.active{
			background-color:grey !important
		}
	</style>
</head>

<body>
	<div id="app">
		<!-- Preloader -->
		<div id="preloader">
			<div class="loader"></div>
		</div>
		<!-- /Preloader -->

		<!-- Header Area Start -->
		<header class="header-area">
			<div class="classy-nav-container breakpoint-off">
				<div style="margin: 0px 20px">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-around" id="conferNav">

						<!-- Logo -->
						<a class="nav-brand " href="<?= site_url() ?>"><img
								src="<?= base_url('assets/guest/img/logo_icli.jpeg') ?>" style="height: 50px;" alt=""></a>

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
						<div class="classy-menu">
							<!-- Menu Close Button -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>
							<!-- Nav Start -->
							<div class="classynav">
								<ul id="nav">
									<li><a href="<?= site_url() ?>">Home</a></li>
									<li><a href="#">Conference</a>
										<ul class="dropdown">
											<li><a href="<?= site_url('call_for_paper') ?>">Call For Paper</a></li>
											<li><a href="<?= site_url('topic') ?>">Topic</a></li>
											<li><a href="<?= site_url('keynote_speakers') ?>">Keynote Speakers</a></li>
											<li><a href="<?= site_url('important_date') ?>">Important Date</a></li>
											<li><a href="<?= site_url('venue') ?>">Venue (Online)</a></li>
											<li><a href="<?= site_url('workshop') ?>">Workshop</a></li>
											<!-- <li><a href="<?= site_url('dli_challenge') ?>">DLI Challenge</a></li> -->
										</ul>
									</li>
									<li><a href="#">Commitee</a>
										<ul class="dropdown" style="width:230px">
											<li><a href="<?= site_url('organizing_commitee') ?>">Organizing Commitee</a>
											</li>
											<li><a href="<?= site_url('advisory_commitee') ?>">Advisory Commitee</a>
											</li>
											<li><a href="<?= site_url('scientific_commitee') ?>">Scientific Commitee</a>
											</li>
										</ul>
									</li>
									<li><a href="#">Download</a>
										<ul class="dropdown" style="width:290px">
											<li><a href="<?= base_url('assets/guest/img/poster_icli2020.jpeg') ?>" target="_blank">ICLI 2020
													Brochure</a></li>
											<li><a href="<?= site_url('guide_book') ?>" target="_blank">Guide Book</a>
											</li>
											<li><a href="<?= site_url('article_template') ?>" target="_blank">Abstract
													and Article Template</a></li>
										</ul>
									</li>
									<li><a href="#">Registration</a>
										<ul class="dropdown" style="width:260px">
											<li><a href="<?= site_url('contribution') ?>">Conference Contribution</a>
											</li>
											<li><a href="<?= site_url('choose_register') ?>">Registration</a></li>
										</ul>
									</li>
									<li><a href="<?= site_url('2019') ?>">ICLI 2019</a></li>
								</ul>
								<ul>
									<li><a class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5"
											href="<?= site_url('login') ?>">Login</a></li>
								</ul>

							</div>
							<!-- Nav End -->
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- Header Area End -->

		<main>