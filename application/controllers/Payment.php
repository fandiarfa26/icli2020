<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        if ($this->user_model->isNotLogin()) redirect(site_url('login'));
        $this->load->model('payment_model');
    }

    public function index()
    {
        $user = $this->session->userdata('user_logged');
        $payment = $this->payment_model->getByUserId($user->id);
        $this->load->view('user/payment', ['user' => $user, 'payment' => $payment]);
    }

    public function sendProof()
    {
        $this->payment_model->save();
        redirect(site_url('user/payment'));
    }

}