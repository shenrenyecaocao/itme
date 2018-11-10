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

    public function query_all_category()
    {
        $this->load->model('dal/Dal_category');
        return $this->Dal_category->get_list("category_id, name");
    }

    public function get_category_level_info($level)
    {
        $this->load->model('dal/Dal_category');
        $param = 'name, category_id, category_image, description';
        return $this->Dal_category->get_list($param=$param, $where=['level' => $level]);
    }

    public function get_category_leve2_by_fid($fid)
    {
        $this->load->model('dal/Dal_category');
        $param = 'name, category_id';
        return $this->Dal_category->get_list($param=$param, $where=['fid' => $fid]);
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

    public function query_category_by_id($category_id)
    {
        $this->load->model('dal/Dal_category');
        return $this->Dal_category->find(["category_id" => $category_id], ["name", "description", "fid", "level"]);
    }

    public function update_category($category_id, $post)
    {
        $this->load->model('dal/Dal_category');
        $data['level'] = $post['level'];
        $data['fid'] = $post['fid'];
        $data['name'] = $post['name'];
        $data['description'] = $post['description'];
        $data['update_date'] = date("Y-m-d H:i:s");
        return $this->Dal_category->update($data, ['category_id' => $category_id]);
    }

    public function cheack_category_level_1($category_id)
    {
        $this->load->model('dal/Dal_category');
        return $this->Dal_category->find(['category_id' => $category_id, 'level' => 1]);
    }


    public function upload_category_image($category_id)
    {
        $this->load->model('bll/Bll_tool');
        $field = 'category_image';
        $result = $this->Bll_tool->upload_file($field, 'category');
        if ($result != FALSE) {
            $this->load->model('Dal_category');
            return $this->Dal_category->update(['category_image' => $result], ['category_id' => $category_id]);
        } else {
            return FALSE;
        }
    }
}