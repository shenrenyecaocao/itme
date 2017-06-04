<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// smtp settings
$config['protocol']     = 'smtp';
$config['smtp_host']    = 'smtp.exmail.qq.com';
//SMTP user
$config['smtp_user']    = 'wangq@playable.cn';
//SMTP password
$config['smtp_pass']    = 'wq9529520952.';
//SMTP port
$config['smtp_port']    = '465';
//SMTP time limit
$config['smtp_timeout'] = '30';
$config['newline']      = "\r\n";
$config['crlf']         = "\r\n";
$config['mailtype']     = "html";
$config['charset']      = 'utf-8';
$config['smtp_crypto']  = 'ssl';
$config['from'] = 'wangq@playable.cn';
$config['from_name'] = '王琪';
