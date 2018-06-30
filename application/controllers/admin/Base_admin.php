<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_admin extends MY_Controller
{
    public $current_admin = NULL;

    public function __construct()
    {
        parent::__construct();
        if ($this->session->has_userdata('admin_info')) {
            $admin_info = $this->session->userdata('admin_info');
            $this->current_admin = $admin_info['name'];
        } else {
            redirect(site_url('admin/login'));
        }
    }
}
