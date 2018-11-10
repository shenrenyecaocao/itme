<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
    public function index()
    {
        $data['title'] = "后台登录";
        $data['sign_in_email_error'] = '';
        $data['sign_in_password_error'] = '';
        $data['no_active'] = '';
        if ($this->input->method() == 'post' && $this->_login_validation()) {
            $this->load->model('bll/Bll_login');
            $this->config->load('login_config');
            $post = $this->input->post();
            $result = $this->Bll_login->check_login($post);
            if ($result == TRUE) {
                $this->session->set_userdata('admin_info', $result);
                redirect(site_url('admin/dashboard'));
            } else {
                $login_error = $this->session->userdata('login_error');
                if ($login_error == 'email_error') {
                    $data['sign_in_email_error'] = $this->config->item('email_error');
                } elseif ($result == 'password_error') {
                    $data['sign_in_password_error'] = $this->config->item('password_error');;
                } elseif ($result == 'no_active') {
                    $data['no_active'] = $this->config->item('no_active');
                }
            }
        }
        $this->load->view('admin/login/index', $data);
    }

    private function _login_validation()
    {
        $this->form_validation->set_rules('email', '邮箱', 'trim|required|valid_email', array('required' => '{field}' . '必填', 'valid_email' => '{field}' . '不合法'));
        $this->form_validation->set_rules('password', '密码', 'trim|required', array('required' => '{field}' . '必填'));

        return $this->form_validation->run();
    }

}