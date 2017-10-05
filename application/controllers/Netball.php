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


        $data['topclubs'] = $this->Netballmodel->gettopclubs();
        $data['topevents'] = $this->Netballmodel->gettopevents();




        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data); 
    }

    public function club()
    {
        $data['clubdatalists'] = $this->Netballmodel->getclubdatalist();
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
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
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function clubRegistration()
    {
        $data['pageName'] = "CLUB_REGISTRATION";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function clubRegistrationForm()
    {
        $data['countrylist'] = $this->Netballmodel->getcountrylist();
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $data['pageName'] = "CLUB_REGISTRATION_FORM";
        $this->load->view("content_handler", $data);
    }

    public function helpPassword()
    {
        $data['pageName'] = "HELP_PASSWORD";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    } 

    public function clubdetails()
    {   
        $userInfo = $this->session->userdata('login_data');
        
        $model_data = array(
            'id'=> $this->input->get('no'),
        );

        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['clubdatainfo'] = $this->Netballmodel->getclubdatainfo($model_data);
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $data['eventinfos'] = $this->Netballmodel->geteventinfolist($model_data);
        $data['pageName'] = "CLUB_DETAILS";
        $this->load->view("content_handler", $data);
    }

    public function playerRegistration()
    {
        $data['postionlist'] = $this->Netballmodel->getpostionlist();
        $data['countrylist'] = $this->Netballmodel->getcountrylist();
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['pageName'] = "PLAYER_REGISTRATION";
        $this->load->view("content_handler", $data);
    }

    public function profile()
    {
        $data['pageName'] = "PROFILE";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function registerAccType()
    {
        $data['pageName'] = "ACCOUNT_TYPE";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function resetNewPassword()
    {
        $data['token'] = $this->input->get('token');  
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();     
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();  
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $data['pageName'] = "RESET_NEW_PASS";
        $this->load->view("content_handler", $data);
    }

    
    public function resetPasswordpage()

    {
        $data['pageName'] = "RESET_PASS";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function resetPasswordComplete()
    {
        $data['pageName'] = "RESET_PASS_COMPLETE";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function contact()
    {
        $data['pageName'] = "CONTACT";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function faq()
    {
        $data['pageName'] = "FAQ";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo(); 
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $data['faqsinfolist'] = $this->Netballmodel->getfaqsinfolist();
        $this->load->view("content_handler", $data);
    }

    public function privacy()
    {
        $data['pageName'] = "PRIVACY";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['privacyinfo'] = $this->Netballmodel->getprivacyinfo(); 
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function pricing()
    {
        $data['pageName'] = "PRICING";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['pricinginfo'] = $this->Netballmodel->getpricinginfo(); 
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function partner()
    {
        $data['pageName'] = "PARTNER";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data);
    }

    public function working()
    {
        $data['pageName'] = "WORKING";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
        $data['howitworkinfo'] = $this->Netballmodel->gethowitworkinfo();
        $this->load->view("content_handler", $data);
    }

     public function terms_condition()
    {
        $data['pageName'] = "TERMANDCONDITION";
        $data['aboutusinfo'] = $this->Netballmodel->getaboutusinfo();
        $data['contactusinfo'] = $this->Netballmodel->getcontactusinfo();
        $data['termconditioninfo'] = $this->Netballmodel->gettermconditioninfo(); 
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist();
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

    public function clubProfile($tab="profile")
    {
        $this->is_logged_in();
        $userInfo = $this->session->userdata('login_data');
        $model_data = array(
            'id' => $userInfo->no
        );
        $data['tab'] = $tab;
        $data['countrylist'] = $this->Netballmodel->getcountrylist();
        $data['clubdatainfo'] = $this->Netballmodel->getclubdatainfo($model_data);  
        $data['pageName'] = "CLUB_PROFILE";
        $this->load->view("dashboard_content_handler", $data);
    }

    public function view_current_event()
    {
        $model_data = array(
            'id'=> $this->input->get('no'),
        );
        $data['eventinfo'] = $this->Netballmodel->geteventinfo($model_data);
        $data['registerplayerinfos'] = $this->Netballmodel->geteventregisterplayerinfos($model_data);
        $data['pageName'] = "VIEW_CURRENT_EVENT";
        $this->load->view("dashboard_content_handler", $data);
    }








//========================================== Club Dashboard =============================================================

    // Club Dashboard
    public function playerdashboard($tab="profile")
    {   
        $this->is_logged_in();
         $userInfo = $this->session->userdata('login_data');
         $model_data = array(
            'id' => $userInfo->no
        );
        $data['tab'] = $tab;
        $data['postionlist'] = $this->Netballmodel->getpostionlist(); 
        $data['countrylist'] = $this->Netballmodel->getcountrylist(); 
        $data['playerdatainfo'] = $this->Netballmodel->getplayersdatainfo($model_data);
        $data['playereventlist'] = $this->Netballmodel->getplayereventlist($model_data);
        $data['sociallinkdatalist'] = $this->Netballmodel->getsociallinkdatalist(); 
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
             'image' => "",   
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
<<<<<<< HEAD

        $event_id = $_POST["event_id"];

=======

        $event_id = $_POST["event_id"];

>>>>>>> 8b5d58b578d7af9fbaf2db0e862f274d7496dc01
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
            $data['eventpackagelist'] = $this->Netballmodel->geteventpackagelist();
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
            $data['eventpackagelist'] = $this->Netballmodel->geteventpackagelist();
            $data['pageName'] = "EVENT_PACKAGE";
            $this->load->view("dashboard_content_handler", $data);
        }   
    }


      // player registration
     public function addeventpackagedata()
    {
            $model_data = array(
                'id' => $this->input->post('id'),
                'image' => $this->input->post('image'), 
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


      // player registration
     public function addeventproposal()
    {
            $model_data = array(
                'eventid' => $this->input->post('eventid'),
                'club_id' => $this->input->post('club_id'),
                'playerid' => $this->input->post('playerid'), 
            );

            $this->Netballmodel->addeventproposal($model_data);
            $this->session->set_flashdata('success_msg','successfully');
            redirect('netball/clubdetails?no='.$model_data['club_id']);
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

           $status = $this->Netballmodel->updateclubdatawithoutimgInfo($model_data);
           if ($status == false) {
               $this->session->set_flashdata('error_msg', ' Same UserName Type is already exists');
           }
            redirect('netball/clubProfile');

        } else {
            $data1 = array('upload_data' => $this->upload->data());
            $model_data = array(
                'id' => $this->input->post('id'),
                'image' => $data1['upload_data']['file_name'],   
            );

            $this->Netballmodel->updateclubdata($model_data);
            $this->session->set_flashdata('success_msg', 'Info Updated Successfully...');
            redirect('netball/clubProfile/picture');

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
                'username' => $this->input->post('username12'),
                'email' => $this->input->post('email'),
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

            $status = $this->Netballmodel->updateplayerdatawithoutimgInfo($model_data);
            if ($status == false) {
                $this->session->set_flashdata('error_msg', 'Same UserName Type is already exists');
            }
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

     public function updateclubpassword()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'password' => $this->input->post('password'),
            'password_two' => $this->input->post('password_two'),
        );
        $this->Netballmodel->updateclubpassword($model_data);
        $this->session->set_flashdata('error_msg', 'Password and Confirm Password Does Not Match');
        redirect('netball/clubProfile/password');
    }
<<<<<<< HEAD

     public function updateplayerpassword()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'password' => $this->input->post('password'),
            'password_two' => $this->input->post('password_two'),
        );

        $this->Netballmodel->updateplayerpassword($model_data);
        $this->session->set_flashdata('error_msg', 'Password and Confirm Password Does Not Match');
        redirect('netball/playerdashboard/password');
    }





    //============================== ajax request ====================

    // Ajax Inline Update
    public function updateInline($task="")
    {
        $model_data = array(
            'val' => $_POST['val'],
            'index' => $_POST['index'],
            'id' => $_POST['id'],
        );

        if ($task == "position") 
            $status = $this->Netballmodel->updateregplayerposition($model_data);
        if ($task == "currenteventstatus") 
            $status = $this->Netballmodel->updatecurrenteventstatus($model_data);


        if ($status == true) {
            $msg = array('msg' => 'success');
        } else {
            $msg = array('msg' => 'error');
        }
        echo json_encode($msg);
    }  


    //ajax search fr horse
    public function ajaxSearchClub()
    {
        $clubname = $_POST['clubname'];  

        $sql = "";
        if ($clubname == '')
            $sql = "select no as club_id from tbl_club where status = 1";            
        else 
            $sql = "select no as club_id from tbl_club where club_name like '%".$clubname."%' and status = 1";          
        $club_ids = $this->db->query($sql)->result();

        $array1 = array();
        foreach ($club_ids as $club_id) 
            $array1[] = $club_id->club_id;    

        $clubArray = $array1;        
        if (count($clubArray) == 0)
        {
            $result = array();
            $result['clubs'] = array();
            $result['result'] = 200;
            echo json_encode($result);
            return;
        } 
        $sqlIn = "";
        foreach ($clubArray as $club) {
            $sqlIn = $sqlIn . $club . ",";
        }
        $sqlIn = substr($sqlIn, 0, strlen($sqlIn) - 1);

        $sql = "select * from tbl_club where no in (".$sqlIn.")";
        $clubs = $this->db->query($sql)->result();                     
        $result = array();
        $result['clubs'] = $this->generateClubArray($clubs);
        $result['result'] = 200;
        echo json_encode($result);
    }


    // get array format 
    public function generateClubArray($clubs) {
        $rstArray = array();
        $index = 0;
        foreach ($clubs as $club) {

            $sql = "select * from tbl_club where no = $club->no and status = 1";
            $clubdata = $this->db->query($sql)->row();

            $no = $clubdata->no;
            $photo = $clubdata->photo;
            $name = $clubdata->club_name;
            $association_afiliated = $clubdata->association_afiliated;
            $stablishes_date = $clubdata->stablishes_date;


            $rstExtend = (object) array_merge((array) array('no' => $no,'photo' => $photo,'name' => $name,'association_afiliated' => $association_afiliated,'stablishes_date' => $stablishes_date));
            $rstArray[$index] = $rstExtend;

            $index++;
        }
        return $rstArray;
    }
=======

     public function updateplayerpassword()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'password' => $this->input->post('password'),
            'password_two' => $this->input->post('password_two'),
        );

        $this->Netballmodel->updateplayerpassword($model_data);
        $this->session->set_flashdata('error_msg', 'Password and Confirm Password Does Not Match');
        redirect('netball/playerdashboard/password');
    }





    //============================== ajax request ====================

    // Ajax Inline Update
    public function updateInline($task="")
    {
        $model_data = array(
            'val' => $_POST['val'],
            'index' => $_POST['index'],
            'id' => $_POST['id'],
        );

        if ($task == "position") 
            $status = $this->Netballmodel->updateregplayerposition($model_data);
        if ($task == "currenteventstatus") 
            $status = $this->Netballmodel->updatecurrenteventstatus($model_data);


        if ($status == true) {
            $msg = array('msg' => 'success');
        } else {
            $msg = array('msg' => 'error');
        }
        echo json_encode($msg);
    }  
>>>>>>> 8b5d58b578d7af9fbaf2db0e862f274d7496dc01






}




