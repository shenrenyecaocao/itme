<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller
{
    public function index()
    {
        $data['title'] = '分类列表';
        $this->load->model('bll/Bll_category');
        $data['categorys'] = $this->Bll_category->get_category_list();
        $this->load->view('admin/category/index', $data);
    }

    public function create()
    {
        $data['title'] = "分类添加";

    }

    public function create_complete()
    {

    }

    public function store()
    {
        if ($this->input->method() == 'post') {
            if ($this->_validation()) {
                $post = $this->input->post();
                $this->load->model('bll/Bll_category');
                $result = $this->Bll_category->store_category($post);
                if ($result) {
                    redirect('admin/category/create_complete');
                } else {
                    $this->create();
                }
            } else {
                $this->create();
            }
        } else {
            redirect('admin/category/create');
        }
    }

    private function _validation()
    {
        $this->form_validation_->set_rules();
        return $this->validation->run();
    }
}