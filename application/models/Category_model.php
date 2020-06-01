<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{
    private $_table = '2020_category';

    public $id;
    public $name;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}