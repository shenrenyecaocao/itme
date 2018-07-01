<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_blog.php';

class Dashboard extends Base_blog
{
	public function index()
	{
        $data['title'] = "个人博客";
        $this->load->model('bll/Bll_article');
        $this->load->model('bll/Bll_category');
        $data['top3'] = $this->Bll_article->get_article_list_top3();
        $data['top6'] = $this->Bll_article->get_article_list_top6();
        $data['category_list'] = $this->Bll_category->get_category_level_info(1);
  		$this->view('blog/dashboard/index', $data);
	}
}
