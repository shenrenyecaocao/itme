<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_blog.php';

class Music extends Base_blog
{
    public function index()
    {
        $data['title'] = "音乐";
        $this->view('blog/music/index', $data);
    }
}