<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller
{
    public function index()
    {
        $this->load->view('admin/register/sign_in');
    }

    public function _register_validation()
    {
        $this->form_validation->set_rules('email', '邮箱', 'trim|required|valid_email|is_unique[admin.email]', array(
                'required' => '{field}' . '必填',
                'valid_email' => '{field}' . '不合法',
                'is_unique' => '{field}' . '已存在'
                ));
        $this->form_validation->set_rules('password', '密码', 'trim|required', array('required' => '{field}' . '必填'));
        $this->form_validation->set_rules('passconf', '密码', 'trim|required|matches[password]', array(
            'required' => '{field}' . '必填',
            'matched' => '{field}' . '不匹配'
            ));

        return $this->form_validation->run();
    }

    public function store()
    {
        if ($this->input->method() == 'post') {
            if ($this->_register_validation()) {
                $this->load->model('bll/Bll_register');
                $post = $this->input->post();
                $result = $this->Bll_register->store($post);
                if ($result) {
                    redirect(base_url('admin/login'));
                } else {
                    $this->sign_in();
                }
            } else {
                $this->sign_in();
            }
        } else {
            show_404();
        }
    }
}