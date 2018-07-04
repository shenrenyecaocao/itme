<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function debug($item)
{
    if(ENVIRONMENT == 'development')
    {
        $file = APPPATH . 'logs/debug_log.log';
        ob_start();
        var_dump($item);
        $item = date("Y-m-d H:i:s") . "\n" . ob_get_contents();
        $item = str_replace("=>\n", "=>", $item);
        $result = file_put_contents($file, $item."\n", FILE_APPEND | LOCK_EX);
        ob_end_clean();
    }
}

function token($num = 10)
{
    $str = 'abmlotwwpiutywucnbmcsbdusuhebwEWBWETERIOPLMBDZCVDD2345678654098765432';
    $token = '';
    for ($i = 0; $i < $num; $i++) {
        $token .= $str[mt_rand(0, strlen($str) - 1)];
    }
    return $token;
}

function load_image($image_name, $path='')
{
    if ($image_name) {
        $root_path = "uploads/";
        if ($path == '') {
            $image_path = $root_path . $image_name;
        } else {
            $image_path = $root_path . $path . '/' . $image_name;
        }
        return $image_path;
    } else {
        return "static/admin/images/article1.jpg";
    }
}

function html_encode($str)
{
    $str = str_replace(" ", "&nbsp;", $str);
    $str = str_replace("<", "&lt;", $str);
    $str = str_replace(">", "&gt;", $str);
    $str = str_replace("&", "&amp;", $str);
    return nl2br($str);
}