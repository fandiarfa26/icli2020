<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $_table = '2020_admin';

    public function doLogin()
    {
        $post = $this->input->post();

        $this->db->where('email', $post['email']);
        $admin = $this->db->get($this->_table)->row();

        if ($admin) {

            $isPasswordTrue = password_verify($post['password'], $admin->password);
            if ($isPasswordTrue) {
                $this->session->set_userdata(['admin_logged' => $admin]);
                return true;
            }
        }

        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('admin_logged') === null;
    }
}