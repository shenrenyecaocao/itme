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
        $page_size = 5;
        $articles = $this->Bll_article->get_article_list($page_size);
        $data['article_list'] = $articles['article_list'];
        $data['current_page'] = $articles['current_page'];
        $data['total_page'] = $articles['total_page'];
        $data['last_page'] = $articles['last_page'];
        $data['next_page'] = $articles['next_page'];
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
        $data['title'] = '文章编辑';
        $data['article'] = $this->_check_article($article_id);
        $this->load->model('bll/Bll_category');
        $data['categorys'] = $this->Bll_category->get_category_level_info(1);
        $data['child_type'] = $data['article']['child_type'];
        $data['father_type'] = $data['article']['father_type'];
        $data['article_id'] = $article_id;
        $this->load->view('admin/article/edit', $data);
    }

    public function update($article_id)
    {
        if ($this->input->method() == 'post') {
            if ($this->_validation_article()) {
                $post = $this->input->post();
                $result = $this->Bll_article->update_article($post, $article_id);
                if ($result) {
                    redirect(site_url('admin/article'));
                } else {
                    $this->create($article_id);
                }
            } else {
                $this->edit($article_id);
            }
        } else {
            redirect(site_url('admin/article/edit/' . $article_id));
        }
    }

    public function show($article_id)
    {
        $data['title'] = '文章详情';
        $data['article'] = $this->_check_article($article_id);
        $this->load->view('admin/article/show', $data);
    }

    private function _check_article($article_id)
    {
        $article_info = $this->Bll_article->get_article_detail($article_id);
        if (empty($article_info)) {
            show_404();
        } else {
            return $this->Bll_article->get_article_by_article_id($article_id);
        }
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