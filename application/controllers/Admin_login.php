<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
    }

    public function index()
    {
        if ($this->input->post()) {
            if ($this->admin_model->doLogin()) redirect(site_url('admin0'));
        }

        $this->load->view("admin/login");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('admin0/login'));
    }
}