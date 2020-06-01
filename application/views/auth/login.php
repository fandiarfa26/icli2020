<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('_includes/top.php') ?>

<section class="our-speaker-area bg-img bg-gradient-overlay" style="background-image: url(assets/guest/img/bg-img/graca.jpg);padding:200px 60px 0px 60px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6">
                <div class="single-ticket-pricing-table text-center mb-100 " >
                    <h2 class="ticket-plan" style="margin-top:-50px;border-radius:50px">ICLI 2020</h2>

                    <div class="contact-form">
                        <form method="POST" action="<?= site_url('login') ?>">
                            

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control <?= form_error('email')? 'is-invalid': '' ?>" name="email" required autocomplete="email" placeholder="E-mail" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control <?= form_error('password')? 'is-invalid':'' ?>" name="password" required placeholder="Password" autocomplete="current-password">
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-md-6 text-right">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn confer-btn btn-block">
                                        Login
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <a href="<?= site_url('choose_register') ?>">Create Account</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('_includes/bottom.php') ?>