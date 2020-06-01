<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_articles extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        if($this->admin_model->isNotLogin()) redirect(site_url('admin0/login'));
        $this->load->model('article_model');
    }

    public function index()
    {
        $article = $this->article_model->getAllJoinUser();
        $this->load->view('admin/articles', ['data'=>$article]);
    }

    public function confirm()
    {
        $this->article_model->confirm();
        redirect(site_url('admin0/articles'));
    }
}