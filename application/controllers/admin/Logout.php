<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller 
{
    public function index()
    {
        unset($_SESSION['admin_userinfo']);
        redirect('admin/login');
    }
}