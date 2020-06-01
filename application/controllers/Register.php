<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('category_model');
        $this->load->library('form_validation');
    }

    public function choose()
    {
        $this->load->view('auth/choose');
    }

    private function createData()
    {
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()){
            if (!$user->save()){
                return $this->session->set_flashdata('fail', 'Gagal');    
            }       
            return $this->session->set_flashdata('success', 'Registrasi Berhasil!');
        }
    }

    public function addSpeaker()
    {
        $this->createData();   
        $categories = $this->category_model->getAll();
        $this->load->view('auth/register', ['url' => 'speaker', 'categories' => $categories]);
    }

    public function addParticipant()
    {
        $this->createData();
        $this->load->view('auth/register', ['url' => 'participant']);
    }

}