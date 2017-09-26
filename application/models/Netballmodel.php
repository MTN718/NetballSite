<?php

Class Netballmodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }




    //==========================================================



    // function verify login credentials
    public function verify_login($model_data)
    {
        $this->db->select('*');
        $this->db->from('tbl_player');
        $this->db->where('name', $model_data['username']);
        $result = $this->db->get();

        $numrows = $result->num_rows();

        if ($numrows == 1) {
            $row = $result->row();
            if (password_verify($password, $row->password)) {
                return $row;
            } else {
                return 0;
            }
        } else {
            return "NO_USER_FOUND";
        }
    }


    // check user exist or not 
     public function checkUsernameclub($username)
    {
        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->where('name', $username);
        $result = $this->db->get();
        $numrows =$result->num_rows();
        if ($numrows == 1) {
            die("user name already exist");
             // return false;
          } 
        else {
            return true;
        }
    }

     // check user exist or not 
     public function checkUsernameplayer($username)
    {
        $this->db->select('*');
        $this->db->from('tbl_player');
        $this->db->where('name', $username);
        $result = $this->db->get();
        $numrows =$result->num_rows();
        if ($numrows == 1) {
            die("user name already exist");
             // return false;
          } 
        else {
            return true;
        }
    }


     // Add player Registration Form data 
     public function playerRegistrationFormdata($model_data)
    {
        $email = $model_data['email'];
        $temppassword = $model_data['newpwd']; 
        $value_type = $model_data['value_type'];
        $username = $model_data['username'];
        $dateofbirth = $model_data['dateofbirth'];
        $address = $model_data['address'];
        $city = $model_data['city'];
        $state = $model_data['state'];
        $postcode = $model_data['postcode'];
        $country = $model_data['country'];
        $phone = $model_data['phone'];
        $mobile = $model_data['mobile'];
        $position1 = $model_data['position1'];
        $position2 = $model_data['position2'];
        $position3 = $model_data['position3'];
        $password = password_hash($temppassword, PASSWORD_BCRYPT);

         $result = $this->checkUsernameclub($username);
         $result = $this->checkUsernameplayer($username);
       
    	$sql = "INSERT INTO tbl_player(`name`,`password`,`email`,`birthday`,`address`,`city`,`state`,`postcode`,`country`,`phone`,`mobile`,`position1`,`position2`,`position3`)  VALUES('$username','$password','$email','$dateofbirth','$address','$city','$state','$postcode','$country','$phone','$mobile','$position1','$position2','$position3')";
    	$result = $this->db->query($sql);
       
     
    }


     // Add club Registration Form data 
     public function clubRegistrationFormdata($model_data)
    {
        $email = $model_data['email'];
        $clubname = $model_data['clubname'];
        $association = $model_data['association'];
        $username = $model_data['username'];
        $dateofbirth = $model_data['dateofbirth'];
        $address = $model_data['address'];
        $city = $model_data['city'];
        $state = $model_data['state'];
        $postcode = $model_data['postcode'];
        $country = $model_data['country'];
        $phone = $model_data['phone'];
        $mobile = $model_data['mobile'];
        $value_type = $model_data['value_type'];
        $temppassword = $model_data['newpwd'];
        $password = password_hash($temppassword, PASSWORD_BCRYPT);

         $result = $this->checkUsernameclub($username);
         $result = $this->checkUsernameplayer($username);
       
        	 $sql = "INSERT INTO tbl_club(`name`,`password`,`email`,`birthday`,`address`,`city`,`state`,`postcode`,`country`,`phone`,`mobile`,`club_name`,`association_afiliated`)  VALUES('$username','$password','$email','$dateofbirth','$address','$city','$state','$postcode','$country','$phone','$mobile','$clubname','$association')";
        	$result = $this->db->query($sql);
        
     
    }



     // public function for adding token
    public function addToken($model_data) {
        $email = $model_data['email'];
        $token = $model_data['token'];
        $sql = "INSERT INTO token VALUES ('$token','$email')";
        $this->db->query($sql);
        return true;
    }


     // function for reseting password
    public function resetPassword($model_data) {
        $token = $model_data['token'];
        $cpassword = $model_data['cpassword'];
        $temppassword = $model_data['password'];
        $password = password_hash($temppassword, PASSWORD_BCRYPT);

        if($cpassword != $temppassword){
            return "notmatched";        
        }

        $sql = "SELECT email from token WHERE token='$token'";
        $row = $this->db->query($sql)->row();
        if(empty($row)) {
            return "false";
        }
        $email = $row->email;

        $sql1 = "UPDATE users SET password = '$password' WHERE email='$email'";
        $this->db->query($sql1);
        return "true";
    }





}