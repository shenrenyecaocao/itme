<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller 
{
    public function index()
    {
        $this->load->helper('url');
        $data['title'] = "后台首页";
        $this->load->view('admin/home/index', $data);
    }

}