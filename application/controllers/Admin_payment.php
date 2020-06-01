<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        if($this->admin_model->isNotLogin()) redirect(site_url('admin0/login'));
        $this->load->model('payment_model');
    }

    public function index()
    {
        $payments = $this->payment_model->getAllJoinUser();
        $this->load->view('admin/payment', ['data'=>$payments]);
    }

    public function confirmProof()
    {
        $this->payment_model->confirmProof();
        redirect(site_url('admin0/payment'));
    }
}