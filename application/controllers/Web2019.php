<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web2019 extends CI_Controller
{
    public function index() {
        $this->load->view('2019/home');
    }
    
    public function callforpaper() {
        $this->load->view('2019/callforpaper');
    }
    
    public function topic() {
        $this->load->view('2019/topic');
    }
    
    public function keynotespeakers() {
        $this->load->view('2019/keynotespeakers');
    }
    
    public function importantdate() {
        $this->load->view('2019/importantdate');
    }
    
    public function venue() {
        $this->load->view('2019/venue');
    }
    
    public function organizing() {
        $this->load->view('2019/organizing');
    }
    
    public function advisory() {
        $this->load->view('2019/advisory');
    }
    
    public function scientific() {
        $this->load->view('2019/scientific');
    }
    
    public function contribution() {
        $this->load->view('2019/contribution');
    }


}