<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_login extends MY_Model
{
    public function check_login($post)
    {
        $this->load->model('dal/Dal_admin');
        
        $password = do_hash(md5($post['password']));
        $result = $this->Dal_admin->get_admin_info($post['email']);        
        if ($result) {
            if ($result['password'] == $password) {
                if ($result['active_status'] == $this->flg_false) {
                    return 'no_active';
                }
                unset($result['password']);
                return TRUE;
            } else {
                return 'password_error';
            }
        } else {
            return 'email_error';
        }
    }

}