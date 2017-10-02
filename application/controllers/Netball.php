<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Netball extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->model('Netballmodel');
    }


// ===================================================== Pages ===========================================================//

    public function index()
    {
        $data['pageName'] = "HOME";
        $this->load->view("content_handler", $data); 
    }

    public function club()
    {
        $data['clubdatalists'] = $this->Netballmodel->getclubdatalist();
        $data['pageName'] = "CLUB";
        $this->load->view("content_handler", $data);
    }

    public function mainMenu()
    {
        $this->load->view("admin");
    }

    public function accountSignUp()
    {
        $data['pageName'] = "ACCOUNT_SIGNUP";
        $this->load->view("content_handler", $data);
    }

    public function clubRegistration()
    {
        $data['pageName'] = "CLUB_REGISTRATION";
        $this->load->view("content_handler", $data);
    }

    public function clubRegistrationForm()
    {
        $data['countrylist'] = $this->Netballmodel->getcountrylist();
        $data['pageName'] = "CLUB_REGISTRATION_FORM";
        $this->load->view("content_handler", $data);
    }

    public function helpPassword()
    {
        $data['pageName'] = "HELP_PASSWORD";
        $this->load->view("content_handler", $data);
    } 

    public function clubdetails()
    {   
        $model_data = array(
            'id'=> $this->input->get('no'),
        );
        $data['clubdatainfo'] = $this->Netballmodel->getclubdatainfo($model_data);
        $data['eventinfos'] = $this->Netballmodel->geteventinfolist($model_data);
        $data['pageName'] = "CLUB_DETAILS";
        $this->load->view("content_handler", $data);
    }

    public function playerRegistration()
    {
        $data['postionlist'] = $this->Netballmodel->getpostionlist();
        $data['countrylist'] = $this->Netballmodel->getcountrylist();
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
        $data['token'] = $this->input->get('token');         
        $data['pageName'] = "RESET_NEW_PASS";
        $this->load->view("content_handler", $data);
    }

    
    public function resetPasswordpage()

    {
        $data['pageName'] = "RESET_PASS";
        $this->load->view("content_handler", $data);
    }

    public function resetPasswordComplete()
    {
        $data['pageName'] = "RESET_PASS_COMPLETE";
        $this->load->view("content_handler", $data);
    }

    public function contact()
    {
        $data['pageName'] = "CONTACT";
        $this->load->view("content_handler", $data);
    }

    public function faq()
    {
        $data['pageName'] = "FAQ";
        $this->load->view("content_handler", $data);
    }

    public function privacy()
    {
        $data['pageName'] = "PRIVACY";
        $this->load->view("content_handler", $data);
    }

    public function pricing()
    {
        $data['pageName'] = "PRICING";
        $this->load->view("content_handler", $data);
    }

    public function partner()
    {
        $data['pageName'] = "PARTNER";
        $this->load->view("content_handler", $data);
    }

    public function working()
    {
        $data['pageName'] = "WORKING";
        $this->load->view("content_handler", $data);
    }










//========================================== Club Dashboard =============================================================

    // Club Dashboard
    public function clubdashboard()
    {   
        $this->is_logged_in();
        $data['pageName'] = "CLUB_DASHBOARD";
        $this->load->view("dashboard_content_handler", $data);
    }

    public function newEvent()
    {
        $this->is_logged_in();
        $userInfo = $this->session->userdata('login_data');
         $model_data = array(
            'id' => $userInfo->no
        );
        $data['clubdatainfo'] = $this->Netballmodel->getclubdatainfo($model_data);
        $data['pageName'] = "NEW_EVENT";
        $this->load->view("dashboard_content_handler", $data);
    }

    public function currentEvent()
    {   
        $this->is_logged_in();
        $userInfo = $this->session->userdata('login_data');
         $model_data = array(
            'id' => $userInfo->no
        );
        $data['eventinfos'] = $this->Netballmodel->geteventinfolist($model_data);
        $data['pageName'] = "CURRENT_EVENT";
        $this->load->view("dashboard_content_handler", $data);
    }

    public function clubProfile()
    {
         $this->is_logged_in();
        $userInfo = $this->session->userdata('login_data');
         $model_data = array(
            'id' => $userInfo->no
        );

        $data['countrylist'] = $this->Netballmodel->getcountrylist();
        $data['clubdatainfo'] = $this->Netballmodel->getclubdatainfo($model_data);  
        $data['pageName'] = "CLUB_PROFILE";
        $this->load->view("dashboard_content_handler", $data);
    }








//========================================== Club Dashboard =============================================================

    // Club Dashboard
    public function playerdashboard()
    {   
        $this->is_logged_in();
         $userInfo = $this->session->userdata('login_data');
         $model_data = array(
            'id' => $userInfo->no
        );
        $data['postionlist'] = $this->Netballmodel->getpostionlist(); 
        $data['countrylist'] = $this->Netballmodel->getcountrylist(); 
        $data['playerdatainfo'] = $this->Netballmodel->getplayersdatainfo($model_data);
        $data['pageName'] = "PLAYER_DASHBOARD";
        $this->load->view("dashboard_player_content_handler", $data);
    }


// ========================================= Registration Both Club And Plyer ============================================//

    // player registration
     public function playerRegistrationFormdata()
    {
         $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            $model_data = array(
                'image' => $data1['upload_data']['file_name'], 
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'newpwd' => $this->input->post('password'),
                'password_two' => $this->input->post('password_two'),
                'value_type' => $this->input->post('value_type'),
                'username' => $this->input->post('username'),
                'dateofbirth' => $this->input->post('dateofbirth'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'postcode' => $this->input->post('postcode'),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
                'position1' => $this->input->post('position1'),
                'position2' => $this->input->post('position2'),
                'position3' => $this->input->post('position3'),
            );
            $email_check = $this->Netballmodel->checkEmail($model_data['email']);
            if($email_check) {
                $this->session->set_flashdata('error_msg','Email already exits');
                redirect('netball/playerRegistration');
            }

            $username_check = $this->Netballmodel->checkUsername($model_data['username']);
            if($username_check) {
                $this->session->set_flashdata('error_msg','User Name already exits');
                redirect('netball/playerRegistration');
            }

            $this->Netballmodel->playerRegistrationFormdata($model_data);
            $this->session->set_flashdata('reg_success_msg','Thank you for registering with us');
            redirect('netball');
        } else {
            $data1 = array('upload_data' => $this->upload->data());
            $model_data = array(
                'image' => $data1['upload_data']['file_name'], 
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'newpwd' => $this->input->post('password'),
                'password_two' => $this->input->post('password_two'),
                'value_type' => $this->input->post('value_type'),
                'username' => $this->input->post('username'),
                'dateofbirth' => $this->input->post('dateofbirth'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'postcode' => $this->input->post('postcode'),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
                'position1' => $this->input->post('position1'),
                'position2' => $this->input->post('position2'),
                'position3' => $this->input->post('position3'),
            );
            $email_check = $this->Netballmodel->checkEmail($model_data['email']);
            if($email_check) {
                $this->session->set_flashdata('error_msg','Email already exits');
                redirect('netball/playerRegistration');
            }

            $username_check = $this->Netballmodel->checkUsername($model_data['username']);
            if($username_check) {
                $this->session->set_flashdata('error_msg','User Name already exits');
                redirect('netball/playerRegistration');
            }

            $this->Netballmodel->playerRegistrationFormdata($model_data);
            $this->session->set_flashdata('reg_success_msg','Thank you for registering with us');
            redirect('netball');
        }    
    }

    // club registration
     public function clubRegistrationFormdata()
    {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            
             $model_data = array(
             'image' => $data1['upload_data']['file_name'],   
             'email' => $this->input->post('email'),
             'newpwd' => $this->input->post('password'),
             'confrimpassword' => $this->input->post('password_two'),
             'clubname' => $this->input->post('clubname'),
             'association' => $this->input->post('association'),
             'username' => $this->input->post('username'),
             'dateofbirth' => $this->input->post('dateofbirth'),
             'address' => $this->input->post('address'),
             'city' => $this->input->post('city'),
             'state' => $this->input->post('state'),
             'postcode' => $this->input->post('postcode'),
             'country' => $this->input->post('country'),
             'phone' => $this->input->post('phone'),
             'mobile' => $this->input->post('mobile'),
             'value_type' => $this->input->post('value_type'),
           );

            $email_check = $this->Netballmodel->checkEmail($model_data['email']);
            if($email_check) {
                $this->session->set_flashdata('error_msg','Email already exits');
                redirect('netball/clubRegistrationForm');
            }

            $username_check = $this->Netballmodel->checkUsername($model_data['username']);
            if($username_check) {
                $this->session->set_flashdata('error_msg','User Name already exits');
                redirect('netball/clubRegistrationForm');
            }
            $club_id = $this->Netballmodel->clubRegistrationFormdata($model_data); 
            $model_data['pageName'] = "CLUB_REGISTRATION";
            $model_data['club_id'] = $club_id;
            $this->load->view("content_handler", $model_data);

        } else {
            $data1 = array('upload_data' => $this->upload->data());
            $model_data = array(
             'image' => $data1['upload_data']['file_name'],   
             'email' => $this->input->post('email'),
             'newpwd' => $this->input->post('password'),
             'confrimpassword' => $this->input->post('password_two'),
             'clubname' => $this->input->post('clubname'),
             'association' => $this->input->post('association'),
             'username' => $this->input->post('username'),
             'dateofbirth' => $this->input->post('dateofbirth'),
             'address' => $this->input->post('address'),
             'city' => $this->input->post('city'),
             'state' => $this->input->post('state'),
             'postcode' => $this->input->post('postcode'),
             'country' => $this->input->post('country'),
             'phone' => $this->input->post('phone'),
             'mobile' => $this->input->post('mobile'),
             'value_type' => $this->input->post('value_type'),
           );

            $email_check = $this->Netballmodel->checkEmail($model_data['email']);
            if($email_check) {
                $this->session->set_flashdata('error_msg','Email already exits');
                redirect('netball/clubRegistrationForm');
            }

            $username_check = $this->Netballmodel->checkUsername($model_data['username']);
            if($username_check) {
                $this->session->set_flashdata('error_msg','User Name already exits');
                redirect('netball/clubRegistrationForm');
            }

            $club_id = $this->Netballmodel->clubRegistrationFormdata($model_data); 
            $model_data['pageName'] = "CLUB_REGISTRATION";
            $model_data['club_id'] = $club_id;
            $this->load->view("content_handler", $model_data); 
        }    
    }


    // club payment data sumit
     public function clubRegistrationPaypalAccount()
    {
        
        $model_data = array(
         'club_id' => $this->input->post('club_id'),
         'email13' => $this->input->post('email13'),
         'confirm_email13' => $this->input->post('confirm_email13'),
         'type' => $this->input->post('type'),
        );

        if($model_data['email13'] == $model_data['confirm_email13']) {
            $this->Netballmodel->clubRegistrationPaypalAccount($model_data); 
            redirect('netball');
        } else {            
            $this->session->set_flashdata('error_msg','Paypal Email not matched');
            $data['pageName'] = "CLUB_REGISTRATION";
            $data['club_id'] = $model_data['club_id'];
            $this->load->view("content_handler", $data);
        }

    }


    // club payment data sumit
     public function clubRegistrationBankAccount()
    {
        
        $model_data = array(
         'club_id' => $this->input->post('club_id'),
         'accountname' => $this->input->post('accountname'),
         'accountbsb' => $this->input->post('accountbsb'),
         'accountnumber' => $this->input->post('accountnumber'),
         'accountbb' => $this->input->post('accountbb'),
         'type' => $this->input->post('type'),
        );

        $this->Netballmodel->clubRegistrationBankAccount($model_data); 
        redirect('netball');

    }






//=====================================Ajax Request =====================
    public function eventfee()
    {   

        $event_id = $_POST["event_id"];

        $this->db->select('*');
        $this->db->where('no',$event_id);
        $this->db->from('tbl_event');
        $result = $this->db->get()->row()->fee;
        
        echo json_encode($result);
    }
















// ================================================= Login and Logout ==================================================//

    // user login
    public function loginfrom()
    {
        $model_data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        $result = $this->Netballmodel->verify_login($model_data);

        if(!empty($result)){
        //    $sess_array = array(
          //      'name' => $result->name,
            //    'user_type' => $result->user_type,
         //   );
            // $this->session->set_userdata('sess_array',$sess_array['name']);

            if ($result == 'NO_USER_FOUND') {
                $this->session->set_flashdata('error_msg', 'username or password is incorrect');
                redirect('netball');
            }        
            else if($result->user_type=="club"){
                 $this->session->set_userdata('login_data', $result);
                $this->session->set_flashdata('success_msg', 'login  ');
                redirect('netball/newEvent');
            }
            else if($result->user_type=="player"){
                 $this->session->set_userdata('login_data', $result);
                 $this->session->set_flashdata('success_msg', 'login  ');
                redirect('netball/playerdashboard');
            }
        }
        else{
             $this->session->set_flashdata('error_msg', 'username or password is incorrect');
             redirect('netball');

        }
    }

    // Logout function
    public function logout()
    {
        $this->session->unset_userdata('login_data');
        session_destroy();
        redirect('netball');
    }























// =============================================== forgot password ======================================//

     // function for forgot password
    public function forgotpassword() 
    {
        $model_data = array(
            'email' => $this->input->post('email'),
            //'token' => bin2hex(random_bytes(25)),
            'token' => "vgr3vb3g54fewvbetg34fvebtg34fwvebg34fegr34ef",
        );

        $email_check = $this->Netballmodel->checkEmail($model_data['email']);
        if(!$email_check) {
            redirect('netball');
        }

        $status = $this->Netballmodel->addToken($model_data);
        if($status) {
            $to_email = $model_data['email'];
            $token = $model_data['token'];
            $subject = "Reset your password of Netball";
            $url = site_url('netball/resetNewPassword'."?token=".$token);
            $message = "Reset your password of Netball by clicking on link<br/>".$url;

            $this->sendEmail($to_email,$subject,$message);            
        }
    }



    public function sendEmail($to,$subject,$message)
    {        
        $this->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'mr.ashwin15@gmail.com';
        $config['smtp_pass'] = 'ashwin8109775011';
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $this->email->initialize($config); 
        $this->email->from('mr.ashwin15@gmail.com', 'Netball');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()){
            redirect('netball');
        }else{
            redirect('netbasdfsfsdfsdfsll');
        }       
    }




    //  // function for opening reset password page
    // public function resetPasswordPage() {
    //     $data['token'] = $this->input->get('token');
    //     //$this->load->view('netball/resetpasswordpage',$data);
    //     $this->load->view('netball',$data);
    // }

    // function for reseting password
    public function resetpassword() {
        $model_data = array(
            'token' => $this->input->post('token'),
            'password' => $this->input->post('password'),
            'cpassword' => $this->input->post('password_confirmation'),
        );


        $status = $this->Netballmodel->resetPassword($model_data);

        if($status == "notmatched") {

            $data['errormsg'] = "Password not matched";
            $data['token'] = $model_data['token'];
            $data['open_reset'] = "true";
            $data['pageName'] = "HOME";
            $this->load->view("content_handler", $data); 

        } else if($status == "true") {

            $data['successmsg'] = "password has been changed successfully Please Login";
            $data['open_login'] = "true";
            $data['pageName'] = "HOME";
            $this->load->view("content_handler", $data); 

        } else {

            $data['errormsg'] = "Reset password link is expried! Please try again";
            $data['open_forget'] = "true";
            $data['pageName'] = "HOME";
            $this->load->view("content_handler", $data); 

        }
    }


//============================================= Add Controller Method ===========================================//

      // player registration
     public function addeventdata()
    {

        $config['upload_path'] = './images/event';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            $data = array(
                'id' => $this->input->post('id'),
                'image' => "",  
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'venue' => $this->input->post('venue'),
                'starttime' => $this->input->post('starttime'),
                'finishtime' => $this->input->post('finishtime'),
                'requirements' => $this->input->post('requirements'),
                'fee' => $this->input->post('fee'),
            );
            $data['pageName'] = "EVENT_PACKAGE";
            $this->load->view("dashboard_content_handler", $data);
        }   
           
        else {
            $data1 = array('upload_data' => $this->upload->data());
            $data = array(
                'id' => $this->input->post('id'),
                'image' => $data1['upload_data']['file_name'],   
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'venue' => $this->input->post('venue'),
                'starttime' => $this->input->post('starttime'),
                'finishtime' => $this->input->post('finishtime'),
                'requirements' => $this->input->post('requirements'),
                'fee' => $this->input->post('fee'),
            );
            $data['pageName'] = "EVENT_PACKAGE";
            $this->load->view("dashboard_content_handler", $data);
        }   
    }


      // player registration
     public function addeventpackagedata()
    {
            $model_data = array(
                'id' => $this->input->post('id'),
                'image' => $data1['upload_data']['file_name'], 
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'venue' => $this->input->post('venue'),
                'starttime' => $this->input->post('starttime'),
                'finishtime' => $this->input->post('finishtime'),
                'requirements' => $this->input->post('requirements'),
                'fee' => $this->input->post('fee'),
                'package' => $this->input->post('package'),
            );

            $this->Netballmodel->addeventdata($model_data);

            $this->session->set_flashdata('success_msg','Event Added successfully');
            redirect('netball/currentEvent');
    }












//============================================= Update Data Method ============================================//


    // function for checking login
    public function is_logged_in($redirect_url = NULL) {
        if(!$this->session->userdata('login_data')) {
            if ( $redirect_url==NULL ) {
                redirect('netball');
            }
        }
    }

    
   // Update Service info
    public function updateclubdata()
    {

        $config['upload_path'] = './images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            $model_data = array(
                'id' => $this->input->post('id'),
                'email' => $this->input->post('email'),
                'clubname' => $this->input->post('clubname'),
                'association' => $this->input->post('association'),
                'username' => $this->input->post('username'),
                'dateofbirth' => $this->input->post('dateofbirth'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'postcode' => $this->input->post('postcode'),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
            );

            $this->Netballmodel->updateclubdatawithoutimgInfo($model_data);
            $this->session->set_flashdata('success_msg', ' Updated Successfully...');
            redirect('netball/clubProfile');

        } else {
            $data1 = array('upload_data' => $this->upload->data());
            $model_data = array(
                'id' => $this->input->post('id'),
                'image' => $data1['upload_data']['file_name'],   
            );

            $this->Netballmodel->updateclubdata($model_data);
            $this->session->set_flashdata('success_msg', 'Info Updated Successfully...');
            redirect('netball/clubProfile');

         }
    }



     // Update Service info
    public function updateplayerdata()
    {

        $config['upload_path'] = './images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            $model_data = array(
                'id' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'dateofbirth' => $this->input->post('dateofbirth'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'postcode' => $this->input->post('postcode'),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
                'position1' => $this->input->post('position1'),
                'position2' => $this->input->post('position2'),
                'position3' => $this->input->post('position3'),
            );

            $this->Netballmodel->updateplayerdatawithoutimgInfo($model_data);
            $this->session->set_flashdata('success_msg', ' Updated Successfully...');
            redirect('netball/playerdashboard');

        } else {
            $data1 = array('upload_data' => $this->upload->data());
            $model_data = array(
                'id' => $this->input->post('id'),
                'image' => $data1['upload_data']['file_name'],   
            );

            $this->Netballmodel->updateplayerdata($model_data);
            $this->session->set_flashdata('success_msg', 'Info Updated Successfully...');
            redirect('netball/playerdashboard');

         }
    }








}




