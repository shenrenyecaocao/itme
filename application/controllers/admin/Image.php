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
            $page_size = 18;
            $image_info = $this->Bll_image->get_image_per_page_list($page_size);
            $data = array_merge($data, $image_info);
        } else {
            $data['title'] = '图片管理';
            $this->load->model('bll/Bll_category');
            $data['categorys'] = $this->Bll_category->get_category_level_info(1);
        }
        $data['type'] = $type;
        $this->load->view('admin/image/index', $data);
    }

    public function category($category_id)
    {
        if ($this->input->method() == 'post') {
            $this->_cheack_category_id($category_id);
            $this->load->model('bll/Bll_category');
            $result = $this->Bll_category->upload_category_image($category_id);
            if ($result) {
                redirect(site_url('admin/image/index/client'));
            } else {
                $this->index();
            }
        } else {
            redirect(site_url('admin/image/index/client'));
        }
    }

    public function action()
    {
        $image_ids = $this->input->post('image_id');
        $action = $this->input->post('action');
        if ( ! empty($image_ids) && in_array($action, ["delete", "support"])) {
            $data['action'] = $action;
            $this->load->model('bll/Bll_image');
            if ($action == "delete") {
                $data['result'] = $this->Bll_image->delete_image($image_ids);
            } else {
                $data['result'] = $this->Bll_image->support_image($image_ids);
            }
            echo json_encode($data);
        }
    }

    private function _cheack_category_id($category_id)
    {
        $this->load->model('bll/Bll_category');
        $category_info = $this->Bll_category->cheack_category_level_1($category_id);
        if (empty($category_info)) {
            show_404();
        }
    }
}