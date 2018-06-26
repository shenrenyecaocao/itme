<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bll_tool extends CI_Model
{
    public function seed_email($subject, $message, $email)
    {
        $this->load->library('email');

        $this->config->load('email_config');
        $from = $this->config->item('from');
        $name = $this->config->item('from_name');

        $this->email->from($from, $name);
        if (is_array($email) && !empty($email)) {
            $email = implode(',', $email);
        }
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);

        return $this->email->send();
    }

    public function pagination($config)
    {
        $this->load->library('pagination');
        $this->pagination->initialize($config);
    }
}