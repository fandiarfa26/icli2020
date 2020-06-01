<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        if($this->admin_model->isNotLogin()) redirect(site_url('admin0/login'));
        $this->load->model('user_model');
    }

    public function index()
    {
        $users = $this->user_model->getAll();
        $this->load->view('admin/users', ['users'=>$users]);
    }

    public function usersActive()
    {
        $this->user_model->setActive();
        redirect(site_url('admin0/users'));
    }
}