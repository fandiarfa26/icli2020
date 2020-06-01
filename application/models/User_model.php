<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = '2020_users';

    public $id;
    public $code;
    public $fullname;
    public $email;
    public $institution;
    public $local;
    public $phone;
    public $is_speaker;
    public $category;
    public $email_verified_at = 0;
    public $password;
    public $last_login;
    public $is_active = 1;
    public $created_at;

    public function rules()
    {
        return [
            ['field' => 'fullname','label' => 'Fullname','rules' => 'required'],
            ['field' => 'email','label' => 'E-mail','rules' => 'required'],
            ['field' => 'institution','label' => 'Institution','rules' => 'required'],
            ['field' => 'local','label' => 'Local','rules' => 'required'],
            ['field' => 'password','label' => 'Password','rules' => 'required'],
            ['field' => 'password_confirmation','label' => 'Password Confirmation','rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getWhere($condition)
    {
        return $this->db->get_where($this->_table, $condition)->result();
    }

    public function setActive(){
        $post = $this->input->post();
        $flag = $post['flag'];
        $user_id = $post['users_id'];   
        if ($flag) {
            $sql = "UPDATE {$this->_table} SET is_active= 0 WHERE id={$user_id}";
            $this->db->query($sql);
        } else {
            $sql = "UPDATE {$this->_table} SET is_active= 1 WHERE id={$user_id}";
            $this->db->query($sql);
        }
    }

    public function save()
    {
        $post = $this->input->post();
        
        $code_1 = (isset($post['category'])) ? $post['category'] : '0';
        $code_2 = sprintf("%03d", count($this->db->get_where($this->_table, ['category' => $code_1])->result()) + 1);
        $code_3 = sprintf("%03d", rand(1, 500));
        $code_4 = ($post['local']) ? '1':'2';
        
        $this->code = $post['is_speaker'] . $code_1 . "-" . $code_2 . "-" . $code_3 . "-" . $code_4;
        $this->fullname = $post['fullname'];
        $this->email = $post['email'];
        $this->institution = $post['institution'];
        $this->local = $post['local'];
        $this->phone = $post['phone'];
        $this->is_speaker = ($post['is_speaker'] === 'S') ? 1 : 0;
        $this->category = (isset($post['category'])) ? $post['category'] : 0;
        $this->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $this->created_at = date("Y-m-d H:i:s");

        if ($this->db->insert($this->_table, $this)) {
            return true;
        } else {
            return false;
        }
    }

    public function doLogin()
    {
        $post = $this->input->post();

        $this->db->where('email', $post['email']);
        $user = $this->db->get($this->_table)->row();

        if ($user) {
            $isPasswordTrue = password_verify($post['password'], $user->password);

            if ($isPasswordTrue) {
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->id);
                return true;
            }
        }

        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE id={$user_id}";
        $this->db->query($sql);
    }
}
