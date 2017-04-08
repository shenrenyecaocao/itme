<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Dal_administrators extends MY_Model
{
    private $table = 'administrators';

    public function select_adminInfo($email)
    { 
        $this->db->select('admin_id, name, email, password, role_id, create_data');
        $this->db->form($this->table);
        $this->db->where(array('email' => $email));

        return $this->db->get()->row_array();
    }
}
