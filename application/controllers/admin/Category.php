<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_admin.php';

class Category extends Base_admin
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
        $this->load->config('category_config', FALSE, TRUE);
        $data['category_level'] = $this->config->item('category_level');
        $this->load->view('admin/category/create', $data);
    }

    public function get_category()
    {
        $level = $this->input->post('level');
        $this->load->model('bll/Bll_category');
        $data = $this->Bll_category->get_category_level_info($level - 1);
        echo json_encode($data);
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
        $this->form_validation->set_rules('name', '分类名称', 'trim|required', ['required' => '{field}' . '必填']);
        $this->form_validation->set_rules('description', '分类描述', 'trim|required', ['required' => '{field}' . '必填']);
        return $this->form_validation->run();
    }
}