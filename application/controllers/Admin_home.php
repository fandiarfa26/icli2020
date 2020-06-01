<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        if($this->admin_model->isNotLogin()) redirect(site_url('admin0/login'));
    }

    public function index()
    {
        $this->load->view('admin/dashboard');
    }
}