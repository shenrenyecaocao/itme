<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
    public function index()
    {
        $data['title'] = "后台登录";
        $data['sign_in_email_error'] = '';
        $data['sign_in_password_error'] = '';
        if ($this->input->method() == 'post' && $this->_login_validation()) {
            $this->load->model('bll/Bll_login');
            $this->config->load('login_config');

            $post = $this->input->post();
            $result = $this->Bll_login->check_login($post);
            if ($result === TRUE) {
                $this->session->set_userdata('current_admin', $result);
                redirect('admin/home');
            } elseif ($result == 'email_error') {
                $data['sign_in_email_error'] = $this->config->item('email_error');
            } elseif ($result == 'password_error') {
                $data['sign_in_password_error'] = $this->config->item('password_error');;
            } elseif ($result == 'no_active') {
                $data['sign_in_email_error'] = $this->config->item('no_active');
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