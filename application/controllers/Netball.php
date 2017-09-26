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

       public function clubdetails()
    {
        $data['pageName'] = "CLUB_DETAILS";
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




























// ========================================= Registration Both Club And Plyer ============================================//

    // player registration
     public function playerRegistrationFormdata()
    {
        $model_data = array(
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
        $this->Netballmodel->playerRegistrationFormdata($model_data);

         
            $this->session->set_flashdata('reg_success_msg','Thank you for registering with us');
            redirect('netball');
       
    }


    // club registration
     public function clubRegistrationFormdata()
    {
        
        $model_data = array(
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
        $this->Netballmodel->clubRegistrationFormdata($model_data); 
        
            $this->session->set_flashdata('reg_success_msg','Thank you for registering with us');
            redirect('netball');  
    }

























// ================================================= Login and Logout ==================================================//



    public function loginfrom()
    {
        $model_data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );

        $result = $this->Netballmodel->verify_login($model_data);
        $sess_array = array(
                'name' => $result->user_login_id,
                
            );
        if ($result == '0') {
            $this->session->set_flashdata('error_msg', 'Incorrect credentials');
             redirect('netball');
        } else if ($result == 'NO_USER_FOUND') {
            
            $this->session->set_flashdata('error_msg', 'USER NOT FOUND');
            redirect('netball');
        } else if($result->user_type=="club"){
            $this->session->set_userdata('login_data', $result);
             $this->session->set_flashdata('success_msg', 'login  ');
            redirect('netball/clubdetails');
        }
        else if($result->user_type=="player"){
            $this->session->set_userdata('login_data', $result);
             $this->session->set_flashdata('success_msg', 'login  ');
            redirect('netball');
        }
    }



     // Logout function
    public function logout()
    {
        $this->session->unset_userdata('login_data');
        redirect('netball');
    }


















// =============================================== forgot password ======================================//

     // function for forgot password
    public function forgotpassword() 
    {
        $model_data = array(
            'email' => $this->input->post('email'),
            'token' => bin2hex(random_bytes(25)),

        );
        $status = $this->Netballmodel->addToken($model_data);
        if($status) {
            $from_email = 'mr.ashwin15@gmail.com';
            $to_email = $model_data['email'];
            $token = $model_data['token'];
            $subject = "Reset your password of Netball";
            $url = site_url('netball/resetNewPassword'."?token=".$token);
            $message = "Reset your password of Netball by clicking on link<br/>".$url;

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'mr.ashwin15@gmail.com';
            $config['smtp_pass'] = 'ashwin8109775011';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            $this->email->initialize($config);

            $this->email->from($from_email, 'Netball');
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->send();
            redirect('netball');
        }
    }




    //  // function for opening reset password page
    // public function resetPasswordPage() {
    //     $data['token'] = $this->input->get('token');
    //     //$this->load->view('netball/resetpasswordpage',$data);
    //     $this->load->view('netball',$data);
    // }

    // // function for reseting password
    // public function resetpassword() {
    //     $model_data = array(
    //         'token' => $this->input->post('token'),
    //         'password' => $this->input->post('password'),
    //         'cpassword' => $this->input->post('password_confirmation'),
    //     );

    //     $status = $this->Netballmodel->resetPassword($model_data);

    //     if($status == "notmatched") {

    //         $data['errormsg'] = "Password not matched";
    //         $data['token'] = $model_data['token'];
    //         $data['open_reset'] = "true";
    //         $this->load->view('netball',$data);

    //     } else if($status == "true") {

    //         $data['successmsg'] = "password has been changed successfully Please Login";
    //         $data['open_login'] = "true";
    //         $this->load->view('netball',$data);

    //     } else {

    //         $data['errormsg'] = "Reset password link is expried! Please try again";
    //         $data['open_forget'] = "true";
    //         $this->load->view('netball',$data);

    //     }
    // }
    




}
?>
