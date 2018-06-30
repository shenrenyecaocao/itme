<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_blog extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function view($view, $vars = array(), $top=TRUE, $return=FALSE)
    {
        if ($top == TRUE) {
            $this->load->model('bll/Bll_category');
            $vars['categorys'] = $this->Bll_category->get_category_list();
        }
        $this->load->view($view, $vars, $return);
    }
}