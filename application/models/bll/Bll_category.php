<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_category extends CI_Model
{
    public function get_category_list()
    {
        $this->load->model('dal/Dal_category');
        $categorys = $this->Dal_category->query_category_list();
        $data = [];
        foreach ($categorys as $index => $category) {
            array_push($data, $category);
            foreach ($categorys as $k => $v) {
                if ($category['category_id'] == $v['fid']) {
                    array_push($data, $v);
                }
            }
            if (count($data) == count($categorys)) {
                break;
            }
        }
        return $data;
    }

    public function get_category_level_info($level)
    {
        $this->load->model('dal/Dal_category');
        $param = 'name, category_id';
        return $this->Dal_category->get_list($param=$param, $where=['level' => $level]);
    }

    public function store_category($post)
    {
        $this->load->model('dal/Dal_category');
        $data['name'] = $post['name'];
        $data['description'] = $post['description'];
        $data['fid'] = $post['fid'] ? $post['fid'] : 0;
        $data['level'] = $post['level'];
        $data['update_date'] = date("Y-m-d H:i:s");
        $data['create_date'] = date("Y-m-d H:i:s");
        return $this->Dal_category->insert($data);
    }
}