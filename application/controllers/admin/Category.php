<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_admin.php';

class Category extends Base_admin
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bll/Bll_category');
        $this->load->config('category_config', FALSE, TRUE);
    }

    public function index()
    {
        $data['title'] = '分类列表';
        $data['categorys'] = $this->Bll_category->get_category_list();
        $data['category_level'] = $this->config->item('category_level');
        $this->load->view('admin/category/index', $data);
    }

    public function create()
    {
        $data['title'] = "分类添加";
        $data['category_level'] = $this->config->item('category_level');
        $this->load->view('admin/category/create', $data);
    }

    public function get_category()
    {
        $level = $this->input->post('level');
        $data = $this->Bll_category->get_category_level_info($level - 1);
        echo json_encode($data);
    }

    public function get_category_level_2()
    {
        $category_id = $this->input->post('category_id');
        $data = $this->Bll_category->get_category_leve2_by_fid($category_id);
        echo json_encode($data);
    }

    public function create_complete()
    {
        redirect(site_url('admin/category'));
    }

    public function store()
    {
        if ($this->input->method() == 'post') {
            if ($this->_validation()) {
                $post = $this->input->post();
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

    public function edit($category_id)
    {
        $data['title'] = "编辑分类";
        $data['category_info'] = $this->check_category($category_id);
        $data['category_level'] = $this->config->item('category_level');
        $data['category_id'] = $category_id;
        if ($this->input->method() == 'post') {
            $data['fid'] = $this->session->flashdata('fid');
        } else {
            $data['fid'] = $data['category_info']['fid'];
        }
        $this->load->view('admin/category/edit',$data);
    }

    public function update($category_id)
    {
        if ($this->input->method() == 'post') {
            if ($this->_validation()) {
                $post = $this->input->post();
                $result = $this->Bll_category->update_category($category_id, $post);
                if ($result) {
                    redirect(site_url('admin/category'));
                } else {
                    $this->edit($category_id);
                }
            } else{
                $this->edit($category_id);
            }
        } else {
            redirect(site_url('admin/category/edit/' . $category_id));
        }
    }

    private function _validation()
    {
        $this->form_validation->set_rules('level', '分类级别', 'trim|required', ['required' => '{field}' . '必填']);
        $this->form_validation->set_rules('fid', '父级别', 'callback_fid_check');
        $this->form_validation->set_rules('name', '分类名称', 'trim|required', ['required' => '{field}' . '必填']);
        $this->form_validation->set_rules('description', '分类描述', 'trim|required', ['required' => '{field}' . '必填']);
        return $this->form_validation->run();
    }

    public function fid_check($str)
    {
        if ($this->input->post('level') > 1) {
            $fid = $this->input->post('fid');
            if (trim($fid) == '') {
                $this->session->set_flashdata('fid', $fid);
                $this->form_validation->set_message('fid_check', '{field}' . '必填');
                return FALSE;
            }
        }
        return TRUE;
    }

    private function check_category($category_id)
    {
        $this->load->model('bll/Bll_category');
        $category_info = $this->Bll_category->query_category_by_id($category_id);
        if (empty($category_info)) {
            show_404();
        } else {
            return $category_info;
        }
    }
}