<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_admin extends MY_Controller 
{
    public $current_admin = NULL;

    public function __construct() 
    {
        parent::__construct();
        $current_admin = $this->session->userdata('current_admin');
        if ($current_admin) {
            $this->current_admin = $current_admin;
        } else {
            redirect('admin/login');
        }
    }
}
