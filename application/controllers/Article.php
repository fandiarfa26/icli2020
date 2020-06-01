<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('article_model');
        if ($this->user_model->isNotLogin()) redirect(site_url('login'));
        
    }

    public function index()
    {
        if (!$this->session->userdata('user_logged')->is_speaker) show_404();
        $user = $this->session->userdata('user_logged');
        $article = $this->article_model->getByUserId($user->id);
        $this->load->view('user/article', ['user' => $user, 'article' => $article]);
    }

    public function saveArticle()
    {
        $this->article_model->save();
        redirect(site_url('user/article'));
    }
    
}