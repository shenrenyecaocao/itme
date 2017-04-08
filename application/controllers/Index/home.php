<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
	}
	public function index()
	{	
        $data['title'] = "个人博客";
		$this->load->view('index/home/index', $data);
	}
}
