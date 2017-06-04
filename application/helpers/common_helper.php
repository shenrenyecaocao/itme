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