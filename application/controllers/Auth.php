<?php

defined('BASEPATH') OR exit('No direct script access allowed');
const FILE_NAME = "database.csv";

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('Facebook');
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

    public function storeDataCSV()
    {
        $savingArray = [];


        foreach ($_POST as $key => $value) {
            $value = $this->security->xss_clean($value);
            switch ($key) {
                case "companionsValue":
                    $savingArray[0] = $value;
                    break;
                case "snowValue":
                    $savingArray[1] = $value;
                    break;
                case "historyValue":
                    $savingArray[2] = $value;
                    break;
                case "beachesValue":
                    $savingArray[3] = $value;
                    break;
                case "budgetValue":
                    $savingArray[4] = $value;
                    break;
                case "footerLink":
                    $savingArray[5] = $value;
                    break;
                case "knowsAlready":
                    $savingArray[6] = $value;
                    break;
                case "register_email":
                    $savingArray[7] = $value;
                    break;
                case "register_password":
                    $savingArray[8] = $value;
                    break;
                case "register_username":
                    $savingArray[9] = $value;
                    break;
                case "register_dob_month":
                    $savingArray[10] = $value;
                    break;
                case "register_dob_day":
                    $savingArray[11] = $value;
                    break;
                case "register_dob_year":
                    $savingArray[12] = $value;
                    break;
                case "gender":
                    $savingArray[13] = $value;
                    break;
                case "thirdpartyemail":
                    $savingArray[14] = $value;
                    break;
            }
        }

        if ($this->facebook->is_authenticated())
        {
            $user = $this->facebook->request('get', '/me?fields=id,name,email,gender');
            if (!isset($user['error']))
            {
                $savingArray[7] = $user['email'];
                $savingArray[14] = $user['gender'];
                $savingArray[9] = $user['name'];
            }
            $this->facebook->destroy_session();
        }

        /*put empty values if key not exist*/
        end($savingArray);
        $lastKey = key($savingArray);
        for ($i = 0; $i < $lastKey; $i++) {
            if($savingArray[$i] == null) {
                $savingArray[$i] = "";
            }
        }
        ksort($savingArray);
        $savingArray[15] = $_SERVER['REMOTE_ADDR'];
        $savingArray[16] = date('Y-m-d H:i:s');

        if (!file_exists(FILE_NAME)) {
            $headerString = array();
            $headerString[] = "Who are your travel companions?";
            $headerString[] = "I want Snow and Mountains";
            $headerString[] = "I want History, Culture, Museums";
            $headerString[] = "I want Sunshine, Swimming";
            $headerString[] = "Beaches & Sand, I’m on a Budget. Help me Pinch my Pennies!";
            $headerString[] = "All your info & itineraries in one place!";
            $headerString[] = "Know where you would like to go?";
            $headerString[] = "Email";
            $headerString[] = "password";
            $headerString[] = "username";
            $headerString[] = "register_dob_month";
            $headerString[] = "register_dob_day";
            $headerString[] = "register_dob_year";
            $headerString[] = "gender";
            $headerString[] = "Share my restration data with Gettravely content providers for marketingpurposes";
            $headerString[] = "IP address";
            $headerString[] = "Time Stamp";


            $fp = fopen(FILE_NAME, 'a');
            fputcsv($fp, $headerString);
            fputcsv($fp, $savingArray);
            fclose($fp);
        } else {
            $fp = fopen(FILE_NAME, 'a');
            fputcsv($fp, $savingArray);
            fclose($fp);
        }
    }
}
