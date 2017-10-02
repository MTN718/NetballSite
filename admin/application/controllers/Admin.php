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

    public function settings($tab="profile")
    {
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

 // update About us settings tabs
public function updatehowitwork()
{
    $model_data = array(
        'id' => $this->input->post('id'),
        'description' => $this->input->post('description'),
    );
    if (!empty($model_data['id']))
        $this->adminmodel->updatehowitwork($model_data);
    else
        $this->adminmodel->addhowitwork($model_data);
        $this->session->set_flashdata('success_msg', 'About Us Info Updated Successfully...');
        redirect('admin/settings/how');
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











    }