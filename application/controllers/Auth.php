<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->library('facebook');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['js_to_load'] = "authIndex.js";
        $this->load->view('header');
        $this->load->view('Auth/index');
        $this->load->view('footer', $data);
    }

    public function register()
    {
        $this->load->view('header');
        $this->load->view('Auth/register');
        $this->load->view('footer');
    }

    public function login()
    {
        $this->load->view('header');
        $this->load->view('Auth/login');
        $this->load->view('footer');
    }

    public function pageAfterFacebook()
    {
        $data['js_to_load'] = "pageAfterFacebook.js";
        if ($this->facebook->is_authenticated())
        {
            $user = $this->facebook->request('get', '/me?fields=id,name,email');
            if (!isset($user['error']))
            {
                $data['user'] = $user;
            }
        }
        $this->load->view('header');
        $this->load->view('Auth/pageAfterFacebook', $data);
        $this->load->view('footer', $data);
    }

    public function storeDataCSV()
    {
        $fh = fopen("sample.csv", 'a+') or die("Can't create file");
        $list = array(array('aaa1', 'bbb1', 'ccc1', 'dddd1'), array('123', '456', '789'), array('"aaa"', '"bbb"'));
        foreach ($list as $item) {
            fputcsv($fh, $item);
        }
        fclose($fh);
    }
}