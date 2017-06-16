<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{	
        $data['title'] = "个人博客";
		$this->load->view('index/home/index', $data);
	}
}
