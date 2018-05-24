<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_article extends MY_Model
{
    public function get_article_list()
    {
        $this->load->model('dal/Dal_article');
        $param = 'article_id, title, image, update_data, create_data';
        return $this->Dal_article->get_list($param);
    }

    public function get_article_detail($article_id)
    {
        $this->load->model('dal/Dal_article');
        $param = 'title, image, content, update_data, create_data';
        return $this->Dal_article->find(['article_id' => $article_id], $param);
    }
}