<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dal_admin extends MY_Model
{
    public $table = 'admin';

    public function get_admin_info($email)
    {
        $this->db->select('admin_id, name, email, password, role_id, active_status, create_date');
        $this->db->from($this->table);
        $this->db->where(array('email' => $email));
        return $this->db->get()->row_array();
    }
}
