<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dal_article extends MY_Model
{
    public $table = 'article';

    public function query_article_list()
    {
        $temp_arr = [];
        $fields = ['child_type', 'father_type'];
        foreach ($fields as $field) {
            $param = 'article_id, content, title, article_image, c.name as ' . $field . '_name, a.update_date, a.create_date';
            $this->db->select($param);
            $this->db->from($this->table . ' as a');
            $this->db->join('category as c', 'a.' . $field . ' = c.category_id', 'LEFT');
            $this->db->order_by('a.update_date', 'DESC');
            $this->db->limit(10, 0);
            $temp_arr[$field] = $this->db->get()->result_array();
        }
        $article_list = $temp_arr[$fields[0]];
        foreach ($temp_arr[$fields[1]] as $index => $value) {
            $article_list[$index]['father_type_name'] = $value['father_type_name'];
        }
        return $article_list;
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


