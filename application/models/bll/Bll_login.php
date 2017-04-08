<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_login extends CI_Model 
{
    public function check_login($post)
    {
        $this->load->helper('security');
        $password = do_hash(md5($post['password']));
        $this->load->model('dal/Dal_administrators');
        $result = $this->Dal_administrators->select_adminInfo($post['email']);
        if ($result && $result['password'] == $password) {
            unset($result['password']);
            return $result;
        }
        return FALSE;
    }

}