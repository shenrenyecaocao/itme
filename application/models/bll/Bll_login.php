<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_login extends CI_Model
{
    public function check_login($post)
    {
        $this->load->model('dal/Dal_admin');

        $password = do_hash(md5($post['password']));
        $result = $this->Dal_admin->get_admin_info($post['email']);
        if ($result) {
            if ($result['password'] == $password) {
                if ($result['active_status'] == $this->flg_false) {
                    $this->session->set_userdata('login_error', "no_active");
                    return False;
                }
                unset($result['password']);
                return $result;
            } else {
                $this->session->set_userdata('login_error', "password_error");
                return False;
            }
        } else {
            $this->session->set_userdata('login_error', "email_error");
            return False;
        }
    }

}