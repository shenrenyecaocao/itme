<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller
{
    public function index()
    {
        $data['title'] = '文章管理';
        $this->load->model('bll/Bll_article');
        $data['articles'] = $this->Bll_article->get_article_list();
        $this->load->view('admin/article/index', $data);
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
                $this->load->model('bll/Bll_article');
                $result = $this->Bll_article->store_article($post);
                if ($result) {
                    redirect('admin/article/create_complete');
                } else {
                    $this->create();
                }
            } else {
                $this->create();
            }
        } else {
            redirect('admin/article/create');
        }
    }

    public function edit($article_id)
    {
        $data['title'] = '文章详情';
        $this->load->model('bll/Bll_article');
        $data['article'] = $this->Bll_article->get_article_detail($article_id);
        $this->load->view('admin/article/edit', $data);
    }

    private function _validation()
    {
        $this->form_validation_->set_rules();
        return $this->validation->run();
    }
}