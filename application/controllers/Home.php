<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('Home/index');
        $this->load->view('footer');
    }
    public function comments()
    {
        echo 'Look at this!';
    }
    public function notKnows()
    {
        $this->load->helper('url');
        $data['js_to_load']="notKnows.js";
        $this->load->view('header');
        $this->load->view('Home/notKnows');
        $this->load->view('footer', $data);
    }
}