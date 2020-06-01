<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('login'));
        $this->load->model("important_date_model");
    }

    public function index()
    {
        $user = $this->session->userdata('user_logged');
        $this->load->view('user/dashboard', ['user'=>$user]);
    }

    public function importantDate()
    {
        $impDate = $this->important_date_model->getAll();
        $this->load->view('user/important_date', ['impDate' => $impDate]);
    }
}