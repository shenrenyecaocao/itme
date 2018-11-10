<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dal_category extends MY_Model
{
    public $table = 'category';

    public function query_category_list()
    {
        $param = 'category_id, name, description, fid, level';

        return $this->db->select($param)
            ->from($this->table)
            ->where('delete_flg', $this->flg_false)
            ->order_by('level')
            ->get()
            ->result_array();
    }
}
