<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller 
{
    public function index()
    {
        $this->load->library('session');
        $this->load->helper('url');
        unset($_SESSION['admin_userinfo']);
        redirect('admin/login');
    }
}