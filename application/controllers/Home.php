<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Home/index');
        $this->load->view('footer');
    }
    public function comments()
    {
        echo 'Look at this!';
    }
}