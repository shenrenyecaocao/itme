<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_article extends CI_Model
{
    public function get_article_list($page_size, $category_id=NULL)
    {
        $this->load->model('dal/Dal_article');
        $this->load->model('bll/Bll_tool');
        $keyword = $this->input->get('keyword');
        $article_ids = $this->Dal_article->query_category_of_article_id($category_id);
        $total_rows = $this->Dal_article->article_count(trim($keyword), $article_ids);
        $config = $this->config->item('pagination');
        $config['base_url'] = $_SERVER['REDIRECT_URL'];
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $page_size;
        $current_page = $this->input->get('page') ? $this->input->get('page') : 1;
        $this->Bll_tool->pagination($config);
        $start = ($current_page - 1) * $page_size;
        $temp_arr = [];
        $fields = ['child_type', 'father_type'];
        foreach ($fields as $field) {
            $temp_arr[$field] = $this->Dal_article->query_article_list($field, trim($keyword), $start, $page_size, $article_ids);
        }
        $article_list = $temp_arr[$fields[0]];
        foreach ($temp_arr[$fields[1]] as $index => $value) {
            $article_list[$index]['father_type_name'] = $value['father_type_name'];
        }
        $total_page = ceil($total_rows / $page_size);
        if ($current_page <= 1) {
            $current_page = 1;
        }
        if ($current_page >= $total_page) {
            $current_page = $total_page;
        }
        $data['current_page'] = $current_page;
        $data['total_page'] = $total_page;
        $data['last_page'] = $current_page - 1;
        $data['next_page'] = $current_page + 1;
        $data['article_list'] = $article_list;
        return $data;
    }

    public function get_article_list_top3()
    {
        $this->load->model('dal/Dal_article');
        $param = "article_id, title, content, article_image, create_date";
        $where = NULL;
        $limit = 3;
        $offset = 0;
        $order = 'update_date DESC';
        return $this->Dal_article->get_list($param, $where, $limit, $offset, $order);
    }

    public function get_article_list_top6()
    {
        $this->load->model('dal/Dal_article');
        $param = "article_id, title, content, article_image, create_date";
        $where = NULL;
        $limit = 3;
        $offset = 3;
        $order = 'update_date DESC';
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
            if ($result != FALSE) {
                $data[$field] = $result;
            } else {
                return FALSE;
            }
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
            if ($result != FALSE) {
                $data[$field] = $result;
            } else {
                return FALSE;
            }
        }
        return $this->Dal_article->update($data, ['article_id' => $article_id]);
    }
}