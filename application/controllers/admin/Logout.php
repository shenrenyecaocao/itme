<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function index()
    {
        $this->session->unset_userdata('admin_info');
        redirect(site_url('admin/login'));
    }
}