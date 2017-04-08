<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "后台登录";
        $this->load->helper('form');
        $this->load->library('form_validation');
        if ($this->input->method() == 'post' && $this->_form_validation()) {
            $this->load->model('bll/Bll_login');
            $post = $this->input->post();
            $result = $this->Bll_login->check_login($post);
            if ($result) {
                $this->load->library('session');
                $this->session->set_userdata('current_admin', $result);
                redirect('admin/home');
            }
        }
        $this->load->view('admin/login/index', $data);
    }

    private function _form_validation()
    {
        $this->form_validation->set_rules('email', '用户', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', '密码', 'trim|required');
        return $this->form_validation->run();
    }

}