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

    public function show($image_id, $current_page=NULL)
    {
        $image_info = $this->check_image($image_id);
        $data['title'] = "照片";
        $data['image_url'] = $image_info['image_url'];
        $data['current_page'] = $current_page;
        $this->load->view('blog/album/show', $data);
    }

    private function check_image($image_id)
    {
        $this->load->model('bll/Bll_image');
        $image_info = $this->Bll_image->query_image_by_id($image_id);
        if (empty($image_info)) {
            show_404();
        } else {
            return $image_info;
        }
    }
}
