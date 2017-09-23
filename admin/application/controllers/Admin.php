<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
        public function index()
        {
            $data['pageName'] = "ADMIN_PAGE1";
            $this->load->view("content_handler", $data); 
        }
        
        public function newEvent()
        {
            $this->load->view("new-event");

        }
       
        
        public function adminPage2()
        {
            $this->load->view("admin-page2");

        }
        
        
}
?>
