<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller
{
    public function index()
    {
        $data['title'] = "相册";
        $this->load->model('bll/Bll_image');
        $image_info = $this->Bll_image->get_image_per_page_list();
        $data = array_merge($data, $image_info);
        $this->load->view('blog/album/index', $data);
    }
}
