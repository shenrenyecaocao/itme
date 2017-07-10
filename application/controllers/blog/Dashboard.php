<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
        $data['title'] = "个人博客";
		$this->load->view('blog/dashboard/index', $data);
	}
}
