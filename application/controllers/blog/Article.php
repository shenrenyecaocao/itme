<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_blog.php';

class Article extends Base_blog
{
    public function index()
    {
        $data['title'] = "个人博客";
        $this->load->model('bll/Bll_article');
        $data['article_list'] = $this->Bll_article->get_article_list();
        $this->view('blog/article/index', $data);
    }

    public function show($article_id)
    {
        $data['title'] = "文章详情";
        $data['article_info'] = $this->_checkarticle($article_id);
        $this->view('blog/article/show', $data);
    }

    private function _checkarticle($article_id)
    {
        $this->load->model('bll/Bll_article');
        $article_info = $this->Bll_article->get_article_by_article_id($article_id);
        if (empty($article_info)) {
            show_404();
        } else {
            return $article_info;
        }

    }
}
