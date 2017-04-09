<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dal_admin extends MY_Model
{
    private $table = 'admin';

    public function get_admin_info($email)
    { 
        $this->db->select('admin_id, name, email, password, role_id, create_data');
        $this->db->from($this->table);
        $this->db->where(array('email' => $email));
        return $this->db->get()->row_array();
    }
}
