    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->library(array('session'));
            $this->load->model('adminmodel');
        }

        public function index()
        {            
            $this->is_logged_in();
            $data['pageName'] = "ADMIN_PAGE1";
            $this->load->view("content_handler", $data); 
        }
        public function userManagement()
        {
            $this->is_logged_in();
            $data['playerdatalists'] = $this->adminmodel->getplayerdatalist();
            $data['pageName'] = "USER";
            $this->load->view("content_handler", $data); 
        }
        public function clubManagement()
        {
            $this->is_logged_in();
            $data['clubdatalists'] = $this->adminmodel->getclubdatalist();
            $data['pageName'] = "CLUB";
            $this->load->view("content_handler", $data); 
        }
        public function eventManagement()
        {
            $this->is_logged_in();
            $data['pageName'] = "EVENT";
            $data['eventList'] = $this->adminmodel->geteventLists();
            $this->load->view("content_handler", $data); 
        }
        public function transaction()
        {
            $this->is_logged_in();
            $data['pageName'] = "TRANSACTION";
            $this->load->view("content_handler", $data); 
        }
        public function settings($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "SETTINGS";
            $this->load->view("content_handler", $data); 
        }











        public function position($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "POSITION";
            $this->load->view("content_handler", $data); 
        }
        public function aboutUs($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "ABOUTUS";
            $this->load->view("content_handler", $data); 
        }
        public function contactUs($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "CONTACTUS";
            $this->load->view("content_handler", $data); 
        }
        public function privacyPolicy($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "PRIVACYPOLICY";
            $this->load->view("content_handler", $data); 
        }
        public function pricingPolicy($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "PRICINGPOLICY";
            $this->load->view("content_handler", $data); 
        }
        public function termAndCondition($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "TERMCONDITION";
            $this->load->view("content_handler", $data); 
        }
        public function howItsWork($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "HOWITSWORK";
            $this->load->view("content_handler", $data); 
        }
        public function faqs($tab="")
        {
            $this->is_logged_in();
            $data['pageName'] = "FAQS";
            $this->load->view("content_handler", $data); 
        }




        public function loginfrom()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result = $this->adminmodel->verify_login($username, $password);

            if ($result == '0') {
                $this->session->set_flashdata('error_msg', 'Incorrect credentials');
                redirect('login');
            } else if ($result == 'NO_USER_FOUND') {
                $this->session->set_flashdata('error_msg', 'USER NOT FOUND');
                redirect('login');
            } else {
                $this->session->set_userdata('admin_data', $result);
                redirect('admin');
            }
        }





     // Logout function
    public function logout()
    {
        $this->session->unset_userdata('admin_data');
        session_destroy();
        redirect('login');
    }



            // function for checking login
        public function is_logged_in() 
        {
            if(!$this->session->userdata('admin_data')) 
            {
                redirect('login');
            }
        }

            // Ajax Inline Update
        public function updateInline($task="")
        {
            $model_data = array(
                'val' => $_POST['val'],
                'index' => $_POST['index'],
                'id' => $_POST['id'],
            );
            if ($task == "eventstatus") 
                $status = $this->adminmodel->updateeventInline($model_data);
            if($task == "clubdelete")
                $status = $this->adminmodel->clubdeleteInline($model_data);
            if($task == "playerdelete")
                $status = $this->adminmodel->playerdeleteInline($model_data);

            if ($status == true) {
                $msg = array('msg' => 'success');
            } else {
                $msg = array('msg' => 'error');
            }
            echo json_encode($msg);
        }  







    }