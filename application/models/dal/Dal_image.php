<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dal_image extends MY_Model
{
    public $table = 'image';

    public function get_image($start, $page_size)
    {
        $this->db->select('image_id, image_url, support, create_date, update_date');
        $this->db->from($this->table);
        $this->db->where(array('delete_flg' => $this->flg_false));
        $this->db->order_by('support', 'DESC');
        $this->db->order_by('update_date', 'DESC');
        $this->db->limit($page_size, $start);
        return $this->db->get()->result_array();
    }

    public function get_image_count()
    {
        $this->db->select('image_id, image_url, create_date, update_date');
        $this->db->from($this->table);
        $this->db->where(array('delete_flg' => $this->flg_false));
        return $this->db->count_all_results();
    }

    public function support_images($image_ids)
    {
        $this->db->where_in('image_id', $image_ids);
        $this->db->set('support','support + ' . 1, FALSE);
        return $this->db->update($this->table);
    }

    public function update_images($image_ids)
    {
        $this->db->where_in('image_id', $image_ids);
        $this->db->set('delete_flg', 1);
        return $this->db->update($this->table);
    }
}
