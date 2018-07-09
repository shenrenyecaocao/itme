<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dal_article extends MY_Model
{
    public $table = 'article';

    public function query_article_list($field, $start, $page_size, $article_ids)
    {
        $param = 'article_id, content, title, article_image, c.name as ' . $field . '_name, a.update_date, a.create_date';
        if ( ! empty($article_ids)) {
            $this->db->select($param);
            $this->db->from($this->table . ' as a');
            $this->db->join('category as c', 'a.' . $field . ' = c.category_id', 'LEFT');
            $this->db->where_in('article_id', $article_ids, FALSE);
            $this->db->order_by('a.update_date', 'DESC');
            $this->db->limit($page_size, $start);
            return $this->db->get()->result_array();
        } else {
            return [];
        }
    }

    public function article_count($article_ids)
    {
        if ( ! empty($article_ids)) {
            $this->db->select('article_id');
            $this->db->from($this->table);
            $this->db->where_in('article_id', $article_ids, FALSE);
            return $this->db->count_all_results();
        } else {
            return 0;
        }
    }

    public function query_article_id($keyword, $category_id)
    {
        $this->load->model('dal/Dal_article');
        $this->db->select('article_id');
        $this->db->from($this->table);
        if ($keyword) {
            $this->db->like('title', $keyword);
            $this->db->or_like('content', $keyword);
        }
        if ($category_id) {
            $this->db->or_where(['child_type' => $category_id, 'father_type' => $category_id]);
        }
        $article_ids = $this->db->get()->result_array();
        $articles = [];
        foreach ($article_ids as $key => $value) {
            $articles[] = $value['article_id'];
        }
        return $articles;
    }

    public function query_article_detail($article_id)
    {
        $temp_arr = [];
        $fields = ['child_type', 'father_type'];
        foreach ($fields as $field) {
            $param = 'article_id, content, title, article_image, child_type, father_type, c.name as ' . $field . '_name, a.update_date, a.create_date';
            $this->db->select($param);
            $this->db->from($this->table . ' as a');
            $this->db->join('category as c', 'a.' . $field . ' = c.category_id', 'LEFT');
            $this->db->where(['article_id' => $article_id]);
            $this->db->order_by('a.update_date');
            $this->db->limit(10, 0);
            $temp_arr[$field] = $this->db->get()->row_array();
        }
        $article_info = $temp_arr[$fields[0]];
        $article_info['father_type_name'] = $temp_arr[$fields[1]]['father_type_name'];
        return $article_info;
    }
}


