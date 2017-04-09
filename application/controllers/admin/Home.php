<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_admin.php';

class Home extends Base_admin 
{
    public function index()
    {
        $data['title'] = "后台首页";
        $this->load->view('admin/home/index', $data);
    }

}