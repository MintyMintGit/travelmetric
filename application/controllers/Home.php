<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('facebook');
        $this->load->helper('url');
    }


    public function index()
    {
        $data['js_to_load'] = "home.js";
        $this->load->view('header');
        $this->load->view('Home/index');
        $this->load->view('footer', $data);
    }

    public function notKnows()
    {
        $data['js_to_load'] = "notKnows.js";
        $this->load->view('header');
        $this->load->view('Home/notKnows');
        $this->load->view('footer', $data);
    }

    public function knowsAlready()
    {
        $data['js_to_load'] = "knowsAlready.js";
        $this->load->view('header');
        $this->load->view('Home/knowsAlready');
        $this->load->view('footer', $data);

    }
    public function theEnd() {
        $this->load->helper('form');
        $data['js_to_load'] = "theEnd.js";
        $this->load->view('header');
        $this->load->view('Home/theEnd');
        $this->load->view('footer', $data);
    }
}