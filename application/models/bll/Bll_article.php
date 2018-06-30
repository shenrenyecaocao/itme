<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_article extends CI_Model
{
    public function get_article_list()
    {
        $this->load->model('dal/Dal_article');
        return $this->Dal_article->query_article_list();
    }

    public function get_article_list_top3()
    {
        $this->load->model('dal/Dal_article');
        $param = "article_id, title, content, article_image, create_date";
        $where = NULL;
        $limit = 3;
        $offset = 0;
        $order = 'update_date';
        return $this->Dal_article->get_list($param, $where, $limit, $offset, $order);
    }

    public function get_article_list_top6()
    {
        $this->load->model('dal/Dal_article');
        $param = "article_id, title, content, article_image, create_date";
        $where = NULL;
        $limit = 3;
        $offset = 3;
        $order = 'update_date';
        return $this->Dal_article->get_list($param, $where, $limit, $offset, $order);
    }

    public function get_article_detail($article_id)
    {
        $this->load->model('dal/Dal_article');
        $param = 'title, article_image, content, update_date, create_date';
        return $this->Dal_article->find(['article_id' => $article_id], $param);
    }

    public function get_article_by_article_id($article_id)
    {
        $this->load->model('dal/Dal_article');
        return $this->Dal_article->query_article_detail($article_id);
    }

    public function store_article($post)
    {
        $field = 'article_image';
        $data['title'] = $post['title'];
        $data['content'] = $post['content'];
        $data['father_type'] = $post['father_type'];
        $data['child_type'] = $post['child_type'];
        $data['create_date'] = date('Y-m-d H:i:s');
        $data['update_date'] = date('Y-m-d H:i:s');
        $data[$field] = "";
        $files = $_FILES;
        if ($files[$field]['error'] == 0) {
            $this->load->model('bll/Bll_tool');
            $result = $this->Bll_tool->upload_file($field);
            debug($result);
            $data[$field] = $result;
        }
        $this->load->model('dal/Dal_article');
        return $this->Dal_article->insert($data);
    }

    public function update_article($post, $article_id)
    {
        $this->load->model('dal/Dal_article');
        $data['title'] = $post['title'];
        $data['content'] = $post['content'];
        $data['father_type'] = $post['father_type'];
        $data['child_type'] = $post['child_type'];
        $data['update_date'] = date('Y-m-d H:i:s');

        $field = 'article_image';
        $files = $_FILES;
        if ($files[$field]['error'] == 0) {
            $this->load->model('bll/Bll_tool');
            $result = $this->Bll_tool->upload_file($field);
            $data[$field] = $result;
        }
        return $this->Dal_article->update($data, ['article_id' => $article_id]);
    }
}