<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        if ($this->user_model->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        $user = $this->session->userdata('user_logged');
        $this->load->view('user/profile', ['user' => $user]);
    }
}