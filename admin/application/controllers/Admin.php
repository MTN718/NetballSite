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
        $data['transactioninfolist'] = $this->adminmodel->gettransactioninfolist();
        $this->load->view("content_handler", $data); 
    }

    public function settings($tab="profile")
    {
        $model_data = array(
            'id'=> $this->input->get('faq_id'),
        );
        $this->is_logged_in();
        $data['pageName'] = "SETTINGS";
        $data['tab'] = $tab;
        $data['aboutusinfo'] = $this->adminmodel->getaboutusinfo();
        $data['termconditioninfo'] = $this->adminmodel->gettermconditioninfo();
        $data['pricinginfo'] = $this->adminmodel->getpricinginfo();
        $data['privacyinfo'] = $this->adminmodel->getprivacyinfo();
        $data['howitworkinfo'] = $this->adminmodel->gethowitworkinfo();
        $data['adminbasicinfo'] = $this->adminmodel->getadminbasicinfo(); 
        $data['contactusinfo'] = $this->adminmodel->getcontactusinfo();
        $data['positioninfolist'] = $this->adminmodel->getpositioninfolist(); 
        $data['faqsinfolist'] = $this->adminmodel->getfaqsinfolist();
        $data['faqsupadatedata'] = $this->adminmodel->getfaqsupadatedata($model_data);
        $data['sociallinkdatalist'] = $this->adminmodel->getsociallinkdatalist();
        $this->load->view("content_handler", $data); 
    }




    public function position($tab="")
    {
        $this->is_logged_in();
        $data['pageName'] = "POSITION";
        $data['tab'] = $tab;
        $this->load->view("content_handler", $data); 
    }

    public function aboutUs($tab="")
    {
        $this->is_logged_in();
        $data['pageName'] = "ABOUTUS";
        $data['tab'] = $tab;
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
        $data['tab'] = $tab;
        $this->load->view("content_handler", $data); 
    }

    public function pricingPolicy($tab="")
    {
        $this->is_logged_in();
        $data['pageName'] = "PRICINGPOLICY";
        $data['tab'] = $tab;
        $this->load->view("content_handler", $data); 
    }

    public function termAndCondition($tab="")
    {
        $this->is_logged_in();
        $data['pageName'] = "TERMCONDITION";
        $data['tab'] = $tab;
        $this->load->view("content_handler", $data); 
    }

    public function howItsWork($tab="")
    {
        $this->is_logged_in();
        $data['pageName'] = "HOWITSWORK";
        $data['tab'] = $tab;
        $this->load->view("content_handler", $data); 
    }

    public function faqs($tab="")
    {
        $this->is_logged_in();
        $data['pageName'] = "FAQS";
        $data['tab'] = $tab;
        $this->load->view("content_handler", $data); 
    }

    public function addposition()
    {
        $this->is_logged_in();
        $data['pageName'] = "ADDPOSITION";
        $this->load->view("content_handler", $data); 
    }

    public function addfaqs()
    {
        $this->is_logged_in();
        $data['pageName'] = "ADDFAQS";
        $this->load->view("content_handler", $data); 
    }

    public function updatefaqs()
    {
        $model_data = array(
            'id'=> $this->input->get('faq_id'),
        );
        $this->is_logged_in();
        $data['faqsupadatedata'] = $this->adminmodel->getfaqsupadatedata($model_data);
        $data['pageName'] = "UPDATEFAQS";
        $this->load->view("content_handler", $data); 
    }

    public function package()
    {
        $this->is_logged_in();
        $data['packagedatalist'] = $this->adminmodel->getpackagedatalist();
        $data['pageName'] = "PACKAGE";
        $this->load->view("content_handler", $data); 
    }

    public function addpackage()
    {
        $this->is_logged_in();
        $data['pageName'] = "ADDPACKAGE";
        $this->load->view("content_handler", $data); 
    }

    public function updatepackage()
    {
        $model_data = array(
            'id'=> $this->input->get('package_id'),
        );
        $this->is_logged_in();
        $data['pageName'] = "UPDATEPACKAGE";
        $data['packageupadatedata'] = $this->adminmodel->getpackageupadatedata($model_data);
        $this->load->view("content_handler", $data); 
    }

     public function addsociallink()
    {
        $data['pageName'] = "ADDSOCIALLINK";
        $this->load->view("content_handler", $data); 
    }

    public function cluboverview()
    {
         $model_data = array(
        'id'=> $this->input->get('no'),
        );
        $data['cluboverviewdata'] = $this->adminmodel->getcluboverviewdata($model_data);
        $data['cluboverviewclubinfo'] = $this->adminmodel->getcluboverviewclubinfo($model_data);
        $data['pageName'] = "CLUBOVERVIEW";
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
//============================================== Add Controller Request Method ==========================================//

    // About us settings tabs
    public function addpositiondata()
    {
        $model_data = array(
            'position' => $this->input->post('position'),
        );
        $this->adminmodel->addpositiondata($model_data);
        redirect('admin/settings/Position');
    }

    // About us settings tabs
    public function addfaqsdata()
    {
        $model_data = array(
            'question' => $this->input->post('question'),
            'answer' => $this->input->post('answer'),
        );
        $this->adminmodel->addfaqsdata($model_data);
        redirect('admin/settings/faqs');
    }

    // About us settings tabs
    public function addpackagedata()
    {
        $model_data = array(
            'packagename' => $this->input->post('packagename'),
            'numberofplayer' => $this->input->post('numberofplayer'),
            'pereventfee' => $this->input->post('pereventfee'),
            'playerregisatrationfee' => $this->input->post('playerregisatrationfee'),
        );


        $this->adminmodel->addpackagedata($model_data);
        redirect('admin/package');
    }
     

     // About us settings tabs
    public function addsociallinkdata()
    {
        $model_data = array(
            'title' => $this->input->post('title'),
            'icon' => $this->input->post('icon'),
            'link' => $this->input->post('link'),
        );

        $this->adminmodel->addsociallinkdata($model_data);
        redirect('admin/settings/social');
    }



//========================================== Update controller Method =================================================//

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
        if($task == "positionstatus")
            $status = $this->adminmodel->updatepositionstatusInline($model_data); 
        if($task == "packagedelete")
            $status = $this->adminmodel->packagedeleteInline($model_data); 
        if($task == "faqsdelete")
            $status = $this->adminmodel->faqsdeleteInline($model_data); 
        if($task == "social")
            $status = $this->adminmodel->updateInlinesocial($model_data); 
        if($task == "socialstatus")
            $status = $this->adminmodel->updatetesocialstatusInline($model_data);  
        


        if ($status == true) {
            $msg = array('msg' => 'success');
        } else {
            $msg = array('msg' => 'error');
        }
        echo json_encode($msg);
    }  



    // update About us settings tabs
    public function updateaboutus()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'description' => $this->input->post('description'),
        );
        if (!empty($model_data['id']))
            $this->adminmodel->updateaboutus($model_data);
        else
            $this->adminmodel->addaboutus($model_data);
        $this->session->set_flashdata('success_msg', 'About Us Info Updated Successfully...');
        redirect('admin/settings/about');
    }


    // update About us settings tabs
    public function updateprivacy()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'description' => $this->input->post('description'),
        );
        if (!empty($model_data['id']))
            $this->adminmodel->updateprivacy($model_data);
        else
            $this->adminmodel->addprivacy($model_data);
        $this->session->set_flashdata('success_msg', 'About Us Info Updated Successfully...');
        redirect('admin/settings/privacytab');
    }

    // update About us settings tabs
    public function updatepricing()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'description' => $this->input->post('description'),
        );
        if (!empty($model_data['id']))
            $this->adminmodel->updatepricing($model_data);
        else
            $this->adminmodel->addpricing($model_data);
        $this->session->set_flashdata('success_msg', 'About Us Info Updated Successfully...');
        redirect('admin/settings/pricing');
    }

    // update About us settings tabs
    public function updatetermcondition()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'description' => $this->input->post('description'),
        );
        if (!empty($model_data['id']))
            $this->adminmodel->updatetermcondition($model_data);
        else
            $this->adminmodel->addtermcondition($model_data);
        $this->session->set_flashdata('success_msg', 'About Us Info Updated Successfully...');
        redirect('admin/settings/term');
    }


    public function adminprofileupdate()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'password_two' => $this->input->post('password_two'),
        );
        $this->adminmodel->adminprofileupdate($model_data);
        $this->session->set_flashdata('error_msg', 'Password and Confirm Password Does Not Match');
        redirect('admin/settings/profile');
    }


    // update About us settings tabs
    public function updatecontactus()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
        );
        if (!empty($model_data['id']))
            $this->adminmodel->updatecontactus($model_data);
        else
            $this->adminmodel->addcontactus($model_data);
        $this->session->set_flashdata('success_msg', 'About Us Info Updated Successfully...');
        redirect('admin/settings/contact');
    }


    // // update About us settings tabs
    // public function updatehowitwork()
    // {
    //     $model_data = array(
    //         'id' => $this->input->post('id'),
    //         'description' => $this->input->post('description'),
    //         'description1' => $this->input->post('description1'),
    //     );
    //     if (!empty($model_data['id']))
    //         $this->adminmodel->updatehowitwork($model_data);
    //     else
    //         $this->adminmodel->addhowitwork($model_data);
    //         $this->session->set_flashdata('success_msg', 'About Us Info Updated Successfully...');
    //         redirect('admin/settings/how');
    // }    


        public function updatehowitwork()
        {
            $config['upload_path'] = './images/howitwork/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 0;
            $config['max_width'] = 0;
            $config['max_height'] = 0;
            $this->load->library('upload');
            $this->upload->initialize($config);

            $model_data = array(
                'id' => $this->input->post('id'),
                'description' => $this->input->post('description'),
                'description1' => $this->input->post('description1'),
            );


            if ($this->upload->do_upload('image1') ) {                
                $model_data1['image1'] = $this->upload->data();
                $model_data['image1'] = $model_data1['image1']['file_name'];
            } else {                
                $model_data['image1'] = "";
            }

            if (!empty($model_data['id']))
                $this->adminmodel->updatehowitwork($model_data);
            else
                $this->adminmodel->addhowitwork($model_data);



            $this->session->set_flashdata('success_msg', 'Info Updated Successfully...');
            redirect('admin/settings/how');


        }






     // update faqs data settings tabs
    public function updatefaqsdata()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'question' => $this->input->post('question'),
            'answer' => $this->input->post('answer'),
        );
        $this->adminmodel->updatefaqsdata($model_data);
        redirect('admin/settings/faqs');
    }  

         // update faqs data settings tabs
    public function updatepackagedata()
    {
        $model_data = array(
            'id' => $this->input->post('id'),
            'packagename' => $this->input->post('packagename'),
            'numberofplayer' => $this->input->post('numberofplayer'),
            'pereventfee' => $this->input->post('pereventfee'),
            'playerregisatrationfee' => $this->input->post('playerregisatrationfee'),
        );
        $this->adminmodel->updatepackagedata($model_data);
        redirect('admin/package');
    }   





}