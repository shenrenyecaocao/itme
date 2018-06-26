<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_register extends CI_Model
{
    public function store($post)
    {
        $this->load->model('bll/Bll_tool');
        $this->load->model('dal/Dal_admin');

        $token = token(16);
        $data['email'] = $post['email'];
        $data['password'] = do_hash(md5($post['email']));
        $data['active_token'] = $token;
        $subject = 'Active Accounts';
        $link = base_url("admin/login/index/{$token}");
        $message = $this->load->view('email/active_email', $data, TRUE);
        $status = 1;//$this->Bll_tool->seed_email($subject, $message, $post['email']);
        if ($status) {
            return $this->Dal_admin->insert($data);
        }
        return FALSE;
    }
}
