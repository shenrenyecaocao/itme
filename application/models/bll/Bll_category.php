<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_category extends CI_Model
{
    public function get_category_list()
    {
        $this->load->model('dal/Dal_category');
        $param = 'category_id, name';
        return $this->Dal_category->get_list($param);
    }
}