<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_blog.php';

class Article extends Base_blog
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bll/Bll_article');
        $this->load->model('bll/Bll_category');
        $this->all_category = $this->Bll_category->query_all_category();
    }

    public function index($category_id=NULL)
    {
        $data['title'] = "个人博客";
        $page_size = 2;
        $article_list_info = $this->Bll_article->get_article_list($page_size, $category_id);
        $data['article_list'] = $article_list_info['article_list'];
        $data['current_page'] = $article_list_info['current_page'];
        $data['total_page'] = $article_list_info['total_page'];
        $data['last_page'] = $article_list_info['last_page'];
        $data['next_page'] = $article_list_info['next_page'];
        $data['all_category'] = $this->all_category;
        $this->view('blog/article/index', $data);
    }

    public function show($article_id)
    {
        $data['title'] = "文章详情";
        $data['article_info'] = $this->_checkarticle($article_id);
        $data['all_category'] = $this->all_category;
        $this->view('blog/article/show', $data);
    }

    private function _checkarticle($article_id)
    {
        $article_info = $this->Bll_article->get_article_by_article_id($article_id);
        if (empty($article_info)) {
            show_404();
        } else {
            return $article_info;
        }

    }
}
