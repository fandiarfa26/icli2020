<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Important_date_model extends CI_Model
{
    private $_table = '2020_important_date';

    public $id;
    public $activity;
    public $dates;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}