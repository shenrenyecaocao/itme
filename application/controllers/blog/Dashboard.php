<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_blog.php';

class Dashboard extends Base_blog
{
	public function index()
	{
        $data['title'] = "个人博客";
        $this->load->model('bll/Bll_article');
        $data['top3'] = $this->Bll_article->get_article_list_top3();
        $data['top6'] = $this->Bll_article->get_article_list_top6();
  		$this->view('blog/dashboard/index', $data);
	}
}
