<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller 
{
    public function index()
    {
        $data['title'] = '分类列表';
        $this->load->view('admin/category/list', $data);
    }

    public function manage()
    {
        echo "分类管理";
    }

    public function add()
    {
        $data['title'] = "分类添加";
        $this->load->helper('form');
        $this->load->library('form_validation', '', 'validation');
        if ($this->_validation() == false) {
            $this->load->view('admin/category/add', $data);
            // $this->output->_display();
            // die;     
        } else {
            $this->load->model('user_model', 'user');
            if ($this->user->check_login()) {
                redirect('admin/home');
            }
            redirect('admin/login');
        }
    }

    private function _validation()
    {

        return $this->validation->run();
    }
}