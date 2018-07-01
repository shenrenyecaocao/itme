<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_admin.php';

class Image extends Base_admin
{
    public function index($type='client')
    {
        if ($type == 'album') {
            $data['title'] = '相册管理';
            $this->load->model('bll/Bll_image');
            $image_info = $this->Bll_image->get_image_per_page_list();
            $data = array_merge($data, $image_info);
        } else {
            $data['title'] = '图片管理';
        }
        $data['type'] = $type;
        $this->load->view('admin/image/index', $data);
    }
}