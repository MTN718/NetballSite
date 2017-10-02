<?php

Class Netballmodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }



//========================================================== Get Data Method ========================================//


    // Get Project data
     public function getclubdatainfo($model_data)
    {  
        $id = $model_data['id'];

        $this->db->select('*');
        $this->db->where('no',$id);
        $this->db->from('tbl_club');
        return $this->db->get()->row();
    }

    // Get Event data
     public function geteventinfolist($model_data)
    {
        $id = $model_data['id'];

        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('club_no',$id);
        $this->db->order_by('date','DESC');
        return $this->db->get()->result();
    }


    // Get Project data
     public function getclubdatalist()
    {  
        $this->db->select('*');
        $this->db->from('tbl_club');
        return $this->db->get()->result();
    } 

    // Get Project data
     public function getplayersdatainfo($model_data)
    {  
        $id = $model_data['id'];

        $this->db->select('*');
        $this->db->where('no',$id);
        $this->db->from('tbl_player');
        return $this->db->get()->row();
    }

    // Get Project data
     public function getcountrylist()
    {  
        $this->db->select('*');
        $this->db->from('tbl_countries');
        return $this->db->get()->result();
    } 

      public function getpostionlist()
    {  
        $this->db->select('*');
        $this->db->from('tbl_position');
        return $this->db->get()->result();
    } 



















//================================================= Login  verify -===================================================//




    // function verify login credentials
    public function verify_login($model_data)
    {
        $this->db->select('*');
        $this->db->from('tbl_player');
        $this->db->where('name', $model_data['username']);
        $resultp = $this->db->get()->row();
        if (!empty($resultp)) { 
            if (password_verify($model_data['password'], $resultp->password)) {
                return $resultp;

            }
        }
        else {
        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->where('name', $model_data['username']);
        $result = $this->db->get()->row();
        if (!empty($result)) { 
            if (password_verify($model_data['password'], $result->password)) {
                return $result;
            }
        }
        else {
            return "NO_USER_FOUND";
            }
        }
    }

    // check user exist or not 
     public function checkUsername($username)
    {
        $this->db->select('*');
        $this->db->from('tbl_player');
        $this->db->where('name', $username);
        $result = $this->db->get();
        $numrows =$result->num_rows();
        if ($numrows == 1) {
           return true;
        }

        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->where('name', $username);
        $result = $this->db->get();
        $numrows =$result->num_rows();
        if ($numrows == 1) {
             return true;
        } 
        return false;
    }

    // check Email for forget password
     public function checkEmail($email_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_player');
        $this->db->where('email', $email_id);
        $result = $this->db->get();
        $numrows =$result->num_rows();
        if ($numrows == 1) {
            return true;
        } 
        else {
            $this->db->select('*');
            $this->db->from('tbl_club');
            $this->db->where('email', $email_id);
            $result2 = $this->db->get();
            $numrows2 =$result2->num_rows();
            if ($numrows2 == 1) {
                return true;
            } 
        }
        return false;
    }


     // Add player Registration Form data 
     public function playerRegistrationFormdata($model_data)
    {
        $image = $model_data['image'];
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
       
    	$sql = "INSERT INTO tbl_player(`name`,`password`,`email`,`birthday`,`address`,`city`,`state`,`postcode`,`country`,`phone`,`mobile`,`position1`,`position2`,`position3`,`user_type`,`photo`)  VALUES('$username','$password','$email','$dateofbirth','$address','$city','$state','$postcode','$country','$phone','$mobile','$position1','$position2','$position3','$value_type','$image')";
    	$result = $this->db->query($sql);
    }


     // Add club Registration Form data 
     public function clubRegistrationFormdata($model_data)
    {
        $image = $model_data['image'];
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
       
        $sql = "INSERT INTO tbl_club(`name`,`password`,`email`,`stablishes_date`,`address`,`city`,`state`,`postcode`,`country`,`phone`,`mobile`,`club_name`,`association_afiliated`,`user_type`,`photo`)  VALUES('$username','$password','$email','$dateofbirth','$address','$city','$state','$postcode','$country','$phone','$mobile','$clubname','$association','$value_type','$image')";
        $result = $this->db->query($sql);
        return $this->db->insert_id();
    }


     // Add club Account option
     public function clubRegistrationPaypalAccount($model_data)
    {
        $club_id = $model_data['club_id'];
        $email13 = $model_data['email13'];
        $type = $model_data['type'];
       
        $sql = "INSERT INTO tbl_club_payment(`type`,`paypal`)  VALUES('$type','$email13')";
        $result = $this->db->query($sql);
        $payment_id = $this->db->insert_id();

        $sql1 = "UPDATE tbl_club SET payment = '$payment_id' WHERE no='$club_id'";
        $this->db->query($sql1);

        return true;
    }


     // Add club Account option
     public function clubRegistrationBankAccount($model_data)
    {
        $club_id = $model_data['club_id'];
        $accountname = $model_data['accountname'];
        $accountbsb = $model_data['accountbsb'];
        $accountnumber = $model_data['accountnumber'];
        $accountbb = $model_data['accountbb'];
        $type = $model_data['type'];
       
        $sql = "INSERT INTO tbl_club_payment(`type`,`name`,`bsb`,`number`,`branch`)  VALUES('$type','$accountname','$accountbsb','$accountnumber','$accountbb')";
        $result = $this->db->query($sql);
        $payment_id = $this->db->insert_id();

        $sql1 = "UPDATE tbl_club SET payment = '$payment_id' WHERE no='$club_id'";
        $this->db->query($sql1);

        return true;
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
        $sql1 = "UPDATE tbl_club SET password = '$password' WHERE email='$email'";
        $this->db->query($sql1);

        $sql2 = "UPDATE tbl_player SET password = '$password' WHERE email='$email'";
        $this->db->query($sql2);

        $sql3 = "DELETE FROM token WHERE token='$token'";
        $this->db->query($sql3);

        return "true";
    }



//============================================ Add Model Data Method =======================================================//

 // Add club Registration Form data 
     public function addeventdata($model_data)
    {
        $id = $model_data['id'];
        $title = $model_data['title'];
        $date = $model_data['date'];
        $venue = $model_data['venue'];
        $starttime = $model_data['starttime'];
        $finishtime = $model_data['finishtime'];
        $requirements = $model_data['requirements'];
        $fee = $model_data['fee'];
        $image = $model_data['image'];
        $package = $model_data['package'];
       
        $sql = "INSERT INTO tbl_event(`club_no`,`title`,`venue`,`date`,`starttime`,`endtime`,`special`,`fee`,`photo`,`package_id`)  VALUES('$id','$title','$venue','$date','$starttime','$finishtime','$requirements','$fee','$image','$package')";
        $result = $this->db->query($sql);
        return $this->db->insert_id();
    }
    

     // Add club Registration Form data 
     public function addeventdatawithoutimg($model_data)
    {
        $id = $model_data['id'];
        $title = $model_data['title'];
        $date = $model_data['date'];
        $venue = $model_data['venue'];
        $starttime = $model_data['starttime'];
        $finishtime = $model_data['finishtime'];
        $requirements = $model_data['requirements'];
        $fee = $model_data['fee'];
       
        $sql = "INSERT INTO tbl_event(`club_no`,`title`,`venue`,`date`,`starttime`,`endtime`,`special`,`fee`)  VALUES('$id','$title','$venue','$date','$starttime','$finishtime','$requirements','$fee')";
        $result = $this->db->query($sql);
        return $this->db->insert_id();
    }





//================================================ Update Data Method =======================================================//

      // Update club Form data 
     public function updateclubdatawithoutimgInfo($model_data)
    {
        $id = $model_data['id'];
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

         $sql = "UPDATE `tbl_club` SET `name` = '$username', `email` = '$email',`stablishes_date` = '$dateofbirth',`address` = '$address',`city` = '$city',
            `state` = '$state',`postcode` = '$postcode',`country` = '$country',`club_name` = '$clubname',`association_afiliated` = '$association',`phone` = '$phone',`mobile` = '$mobile' WHERE no = '$id'";
        $this->db->query($sql);
    }

      // Update club Form data 
     public function updateclubdata($model_data)
    {
        $id = $model_data['id'];
        $image = $model_data['image'];

         $sql = "UPDATE `tbl_club` SET `photo` = '$image' WHERE no = '$id'";
        $this->db->query($sql);
    }



     // Update club Form data 
     public function updateplayerdatawithoutimgInfo($model_data)
    {
        $id = $model_data['id'];
        $email = $model_data['email'];
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

         $sql = "UPDATE `tbl_player` SET `name` = '$username', `email` = '$email',`birthday` = '$dateofbirth',`address` = '$address',`city` = '$city',
            `state` = '$state',`postcode` = '$postcode',`country` = '$country',`position1` = '$position1',`position2` = '$position2',`position3` = '$position3',`phone` = '$phone',`mobile` = '$mobile' WHERE no = '$id'";
        $this->db->query($sql);
    }

     // Update club Form data 
     public function updateplayerdata($model_data)
    {
        $id = $model_data['id'];
        $image = $model_data['image'];

         $sql = "UPDATE `tbl_player` SET `photo` = '$image' WHERE no = '$id'";
        $this->db->query($sql);
    }









}