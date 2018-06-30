<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_article extends CI_Model
{
    public function get_article_list()
    {
        $this->load->model('dal/Dal_article');
        $param = 'article_id, content, title, article_image, update_date, create_date';
        return $this->Dal_article->get_list($param);
    }

    public function get_article_detail($article_id)
    {
        $this->load->model('dal/Dal_article');
        $param = 'title, article_image, content, update_date, create_date';
        return $this->Dal_article->find(['article_id' => $article_id], $param);
    }

    public function store_article($post)
    {
        $files = $_FILES;
        $field = 'article_image';
        if ($files[$field]['error'] == 0) {
            $this->load->model('bll/Bll_tool');
            $this->Bll_tool->upload_file($field);
        }

        debug($post);die;
    }
}