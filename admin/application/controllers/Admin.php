<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

     public function __construct()
    {
      parent::__construct();
      $this->load->library(array('session'));
      $this->load->model('netballmodel');
    }

        public function index()
        {
            $data['pageName'] = "LOGINPAGE";
            $this->load->view("content_handler", $data); 
        }

         public function home()
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

         public function loginfrom()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //  echo password_hash($password, PASSWORD_DEFAULT)."\n";

        $result = $this->netballmodel->verify_login($username, $password);
        $sess_array = array(
                'name' => $result->user_login_id,
                
            );
        if ($result == '0') {
            $this->session->set_flashdata('error_msg', 'Incorrect credentials');
             redirect('admin');
        } else if ($result == 'NO_USER_FOUND') {
            
            $this->session->set_flashdata('error_msg', 'USER NOT FOUND');
            redirect('admin');
        } else if($result->user_type=="admin"){
            $this->session->set_userdata('login_data', $result);
             $this->session->set_flashdata('success_msg', 'login  ');
            redirect('admin/home');
        }
        else if($result->user_type=="player"){
            $this->session->set_userdata('login_data', $result);
             $this->session->set_flashdata('success_msg', 'login  ');
            redirect('netball/clubRegistrationForm');
        }
    }

     // Logout function
    public function logout()
    {
        $this->session->unset_userdata('login_data');
        redirect('netball');
    }

        
        
}
?>
