<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model
{
    private $_table = '2020_payment';

    public $id;
    public $cost;
    public $status;
    public $proof_img;
    public $comment;
    public $user_id;
    public $created_at;

    public function rules()
    {
        return [
            ['field'=>'proof_img','label'=>'Proof Image','rules'=>'required']
        ];
    }

    public function getByUserId($user_id)
    {
        return $this->db->get_where($this->_table, ['user_id'=>$user_id])->row();
    }

    public function getAllJoinUser()
    {
        return $this->db->select('*,'.$this->_table.'.id AS payment_id')
                    ->from($this->_table)
                    ->join('2020_users', '2020_users.id = '.$this->_table.'.user_id')
                    ->get()
                    ->result();
    }

    public function confirmProof()
    {
        $post = $this->input->post();
        $user_id = $post['id'];
        $payment = $this->getByUserId($user_id);
        $cost = $post['cost'];
        $status = ($post['answer']) ? 2:3;
        $comment = $post['comment'];
        $sql = "UPDATE {$this->_table} SET status={$status},cost={$cost},comment='{$comment}'  WHERE id={$payment->id}";
        $this->db->query($sql);
    }

    public function save()
    {
        $post = $this->input->post();

        $user_id = $this->session->userdata('user_logged')->id;
        $payment = $this->getByUserId($user_id);
        if (empty($payment)) {
            $this->status = 1;
            $this->proof_img = $this->_uploadImage();
            $this->user_id = $user_id;
            $this->db->insert($this->_table, $this);
        } else {
            $this->_uploadImage();
            $sql = "UPDATE {$this->_table} SET status=1 WHERE id={$payment->id}";
            $this->db->query($sql);
        }
    }

    private function _uploadImage()
    {
        $config['upload_path']      = './uploads/proof_img/';
        $config['allowed_types']    = 'jpg|jpeg|png';
        $config['file_name']        = 'proof-pay-' . $this->session->userdata('user_logged')->code;
        $config['overwrite']        = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('proof_img')) {
            return $this->upload->data('file_name');
        }

        return null;
    }
}