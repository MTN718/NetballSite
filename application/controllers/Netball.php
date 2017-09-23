<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Netball extends CI_Controller {
        public function index()
        {
            $data['pageName'] = "HOME";
            $this->load->view("content_handler", $data); 
        }
        public function club()
        {
            $data['pageName'] = "CLUB";
            $this->load->view("content_handler", $data);
        }
        public function mainMenu()
        {
            $this->load->view("admin");

        }
        public function newEvent()
        {
            $this->load->view("new-event");

        }
        public function accountSignUp()
        {
            $data['pageName'] = "ACCOUNT_SIGNUP";
            $this->load->view("content_handler", $data);

        }
        
        public function clubDetail()
        {
            $this->load->view("club-detail");

        }
        public function clubRegistration()
        {
            $data['pageName'] = "CLUB_REGISTRATION";
            $this->load->view("content_handler", $data);

        }
        public function clubRegistrationForm()
        {
            $data['pageName'] = "CLUB_REGISTRATION_FORM";
            $this->load->view("content_handler", $data);
            

        }
        public function helpPassword()
        {
            $data['pageName'] = "HELP_PASSWORD";
            $this->load->view("content_handler", $data);
            

        }
        public function playerRegistration()
        {
            $data['pageName'] = "PLAYER_REGISTRATION";
            $this->load->view("content_handler", $data);
           

        }
        public function profile()
        {
            $data['pageName'] = "PROFILE";
            $this->load->view("content_handler", $data);
            

        }
        public function registerAccType()
        {
            $data['pageName'] = "ACCOUNT_TYPE";
            $this->load->view("content_handler", $data);

        }
        public function resetNewPassword()
        {
            $data['pageName'] = "RESET_NEW_PASS";
            $this->load->view("content_handler", $data);
            

        }
        public function resetPassword()
        {
            $data['pageName'] = "RESET_PASS";
            $this->load->view("content_handler", $data);
            

        }
        public function resetPasswordComplete()
        {
            $data['pageName'] = "RESET_PASS_COMPLETE";
            $this->load->view("content_handler", $data);
            

        }
}
?>
