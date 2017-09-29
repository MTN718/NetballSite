<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->model('adminmodel');
    }

    public function index()
    {
        $data['pageName'] = "LOGINPAGE";
        $this->load->view("content_handler", $data); 
    }



}