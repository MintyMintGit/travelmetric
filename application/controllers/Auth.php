<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $this->load->view('Auth/index');
    }

    public function register() {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('Auth/register');
        $this->load->view('footer');
    }
    public function login() {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('Auth/login');
        $this->load->view('footer');
    }
    public function storeDataCSV(){
        $fh = fopen("sample.csv", 'a+') or die("Can't create file");
        $list = array (
            array('aaa1', 'bbb1', 'ccc1', 'dddd1'),
            array('123', '456', '789'),
            array('"aaa"', '"bbb"')
        );
        foreach ( $list as $item) {
            fputcsv($fh, $item );
        }
        fclose($fh);
    }
}