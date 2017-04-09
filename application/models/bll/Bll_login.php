<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_login extends CI_Model 
{
    public function check_login($post)
    {
        $password = do_hash($post['password']);
        $this->load->model('dal/Dal_admin');
        $result = $this->Dal_admin->get_admin_info($post['email']);
        if ($result && $result['password'] == $password) {
            unset($result['password']);
            return $result;
        }
        return FALSE;
    }

}