<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model
{
    private $_table = '2020_articles';

 	public $id;
    public $title;
    public $abstract_file;
    public $full_article_file;
    public $author;
    public $presenter;
    public $presentation_place;


    public function rules()
    {
        return [
            ['field' => 'title','label' => 'title','rules' => 'required'],
            ['field' => 'abstract_file','label' => 'abstract_file','rules' => 'required'],
            ['field' => 'author','label' => 'author','rules' => 'required'],
            ['field' => 'presenter','label' => 'presenter','rules' => 'required']
        ];
    }

    public function getByUserId($user_id)
    {
        return $this->db->get_where($this->_table, ['user_id'=>$user_id])->row();
    }

    public function getAllJoinUser()
    {
        return $this->db->select('*,'.$this->_table.'.id AS article_id')
                    ->from($this->_table)
                    ->join('2020_users', '2020_users.id = '.$this->_table.'.user_id')
                    ->get()
                    ->result();
    }

    public function confirm(){
    	$post = $this->input->post();
    	$article = $this->getByUserId($post['user_id']);
    	$sql = "UPDATE {$this->_table} SET status={$post['flag']} WHERE id={$article->id}";
        $this->db->query($sql);
    }

    public function save()
    {
        $post = $this->input->post();


        $user_id = $this->session->userdata('user_logged')->id;
        $category_id = $this->db->get_where('2020_users', ['id'=>$user_id])->row()->category;
		
        $article = $this->getByUserId($user_id);
        if (empty($article)) {
            $this->title =	$post['title'] ;
			$this->author =	$post['author'] ;
			$this->presenter =	$post['presenter'] ;
			$this->presentation_place =	null ;
            $this->abstract_file = $this->_uploadAbstractFile();
            $this->full_article_file = $this->_uploadFullArticleFile();
            $this->user_id = $user_id;
            $this->category_id = $category_id;
            $this->db->insert($this->_table, $this);
        } else {

            $this->title =	($post['title']!='') ? $post['title'] : $article->title;
			$this->author =	($post['author']!='') ? $post['author'] : $article->author;
			$this->presenter =	($post['presenter']!='') ? $post['presenter'] : $article->presenter ;
			$this->presentation_place =	null ;
            $this->abstract_file = (isset($post['abstract_file'])) ? $this->_uploadAbstractFile() : $article->abstract_file;
            $this->full_article_file = (isset($post['full_article_file'])) ? $this->_uploadFullArticleFile() : $article->full_article_file;
            $this->user_id = $user_id;
            $this->category_id = $category_id;
            $this->db->where(['id'=>$article->id]);
            $this->db->update($this->_table,$this);
            ;
        }
    }

    private function _uploadAbstractFile()
    {
        $config['upload_path']      = './uploads/abstract/';
        $config['allowed_types']    = 'doc|docx|pdf';
        $config['file_name']        = 'abstract-' . $this->session->userdata('user_logged')->code;
        $config['overwrite']        = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('abstract_file')) {
            return $this->upload->data('file_name');
        }

        return null;
    }

    private function _uploadFullArticleFile()
    {
        $config['upload_path']      = './uploads/article/';
        $config['allowed_types']    = 'doc|docx|pdf';
        $config['file_name']        = 'article-' . $this->session->userdata('user_logged')->code;
        $config['overwrite']        = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('full_article_file')) {
            return $this->upload->data('file_name');
        }

        return null;
    }
    
}