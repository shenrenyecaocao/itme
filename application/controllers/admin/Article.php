<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_admin.php';

class Article extends Base_admin
{
    public function __construct()
    {
        parent::__construct();
        $this->load->config('category_config', FALSE, TRUE);
        $this->load->model('bll/Bll_article');
    }

    public function index()
    {
        $data['title'] = '文章管理';
        $data['articles'] = $this->Bll_article->get_article_list();
        $this->load->view('admin/article/index', $data);
    }

    public function create()
    {
        $data['title'] = "添加文章";
        $this->load->model('bll/Bll_category');
        $data['categorys'] = $this->Bll_category->get_category_level_info(1);
        $this->load->view('admin/article/create', $data);
    }

    public function store()
    {
        if ($this->input->method() == 'post') {
            if ($this->_validation_article()) {
                $post = $this->input->post();
                $result = $this->Bll_article->store_article($post);
                if ($result) {
                    redirect(site_url('admin/article'));
                } else {
                    $this->create();
                }
            } else {
                $this->create();
            }
        } else {
            redirect(site_url('admin/article/create'));
        }
    }

    public function edit($article_id)
    {
        $data['title'] = '文章详情';
        $data['article'] = $this->Bll_article->get_article_detail($article_id);
        $this->load->view('admin/article/edit', $data);
    }

    private function _validation_article()
    {
        $this->form_validation->set_rules('title', '标题', 'trim|required', ['required' => '{field}' . '必填']);
        $this->form_validation->set_rules('content', '内容', 'trim|required', ['required' => '{field}' . '必填']);
        $this->form_validation->set_rules('father_type', '一级分类', 'trim|required', ['required' => '{field}' . '必填']);
        $this->form_validation->set_rules('child_type', '二级分类', 'trim|required', ['required' => '{field}' . '必填']);
        return $this->form_validation->run();
    }
}