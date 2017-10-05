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
        $this->db->order_by('date','ASC');
        return $this->db->get()->result();
    }

    // Get Top Clubs
     public function gettopclubs()
    {  
        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->order_by('reg_count','desc');
<<<<<<< HEAD
        $this->db->where('status', 1);
=======
>>>>>>> 8b5d58b578d7af9fbaf2db0e862f274d7496dc01
        $this->db->limit(4);
        return $this->db->get()->result();
    } 

    // Get Top Clubs
     public function gettopevents()
    {  
        $currentdate = date('m/d/Y');

        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->join('tbl_club', 'tbl_club.no = tbl_event.club_no');
        $this->db->where('tbl_event.date >=',$currentdate);
        $this->db->order_by('reg_player_count','desc');
        return $this->db->get()->result();
    } 


    // Get Project data
     public function getclubdatalist()
    {  
        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->where('status',1 );
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

    public function geteventinfo($model_data)
    {  
        $id = $model_data['id'];

        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('no',$id);
        // $this->db->where('status',1); 
        return $this->db->get()->row();
    }

    public function geteventregisterplayerinfos($model_data)
    {  
        $id = $model_data['id'];

        $this->db->select('*');
        $this->db->from('tbl_event_player_register');
        $this->db->join('tbl_player', 'tbl_player.no = tbl_event_player_register.player_id');
        $this->db->where('tbl_event_player_register.event_id',$id);
        return $this->db->get()->result();
    }

    public function geteventclubdata($eventid)
    {  
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->join('tbl_club', 'tbl_club.no = tbl_event.club_no');
        $this->db->where('tbl_event.no',$eventid);
        return $this->db->get()->row();
    } 

    public function geteventpackagelist()
    {  
        $this->db->select('*');
        $this->db->from('tbl_package');
        return $this->db->get()->result();
    } 












    public function getediteventpositioninfo($model_data)
    {  
        $id = $model_data['id'];

        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('no',$id);
        return $this->db->get()->result();
    } 

    public function getediteventpackageinfo($model_data)
    {  
        $package_id = $model_data['package_id'];

        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('no',$id);
        return $this->db->get()->result();
    } 

    public function getediteventclubinfo($model_data)
    {  
        $club_no = $model_data['club_no'];

        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('no',$id);
        return $this->db->get()->result();
    } 


    //  Get About us data
     public function getaboutusinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_about_us');
        return $this->db->get()->row();
    }

    //  Get About us data
     public function getcontactusinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_contact_us');
        return $this->db->get()->row();
    }

    //  Get About us data
     public function gettermconditioninfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_term_condition');
        return $this->db->get()->row();
    }

    //  Get About us data
     public function getpricinginfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_pricing_policy');
        return $this->db->get()->row();
    }

    //  Get About us data
     public function getprivacyinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_privacy_policy');
        return $this->db->get()->row();
    }

    //  Get About us data
     public function getfaqsinfolist()
    {
        $this->db->select('*');
        $this->db->from('tbl_faqs');
        return $this->db->get()->result();
    }

     //  Get About us data
     public function getplayereventlist($model_data)
    {
        $id = $model_data['id'];

        $this->db->select('*');
        $this->db->from('tbl_event_player_register');
        $this->db->where('player_id',$id);
        $this->db->join('tbl_event', 'tbl_event.no = tbl_event_player_register.event_id'); 
        return $this->db->get()->result();
    }

     //  Get About us data
     public function getsociallinkdatalist()
    {
        $this->db->select('*');
        $this->db->from('tbl_social_link');
        $this->db->where('status',1);
        return $this->db->get()->result();
    }

     //  Get About us data
     public function gethowitworkinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_how_its_work');
        return $this->db->get()->row();
    }




















//================================================= Login  verify -===================================================//




    // function verify login credentials
    public function verify_login($model_data)
    {
        $this->db->select('*');
        $this->db->from('tbl_player');
        $this->db->where('name', $model_data['username']);
        $this->db->where('status', '1');
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
        $this->db->where('status', '1');
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
    

      // Add club Registration Form data 
     public function addeventproposal($model_data)
    {
        $eventid = $model_data['eventid'];
        $playerid = $model_data['playerid'];
       
        $sql = "INSERT INTO tbl_event_player_register(`event_id`,`player_id`)  VALUES('$eventid','$playerid')";
        $result = $this->db->query($sql);
        $this->db->insert_id();

        $club_data = $this->geteventclubdata($eventid);
        $count = $club_data->reg_count + 1;
        $sql = "UPDATE `tbl_club` SET `reg_count` = '$count' WHERE no = '$club_data->no'";
        $this->db->query($sql);

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


        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->where('name', $username);
        $result = $this->db->get();
        $numrows =$result->num_rows();
        if ($numrows == 1) {
           return false;
        }

        else {
            $sql = "UPDATE `tbl_club` SET `name` = '$username', `email` = '$email',`stablishes_date` = '$dateofbirth',`address` = '$address',`city` = '$city',
            `state` = '$state',`postcode` = '$postcode',`country` = '$country',`club_name` = '$clubname',`association_afiliated` = '$association',`phone` = '$phone',`mobile` = '$mobile' WHERE no = '$id'";
             $result = $this->db->query($sql); 
            return true;
        }    
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


        $this->db->select('*');
        $this->db->from('tbl_player');
        $this->db->where('name', $username);
        $result = $this->db->get();
        $numrows =$result->num_rows();
        if ($numrows == 1) {
           return false;
        }
        else{

            $sql = "UPDATE `tbl_player` SET `name` = '$username', `email` = '$email',`birthday` = '$dateofbirth',`address` = '$address',`city` = '$city',
                `state` = '$state',`postcode` = '$postcode',`country` = '$country',`position1` = '$position1',`position2` = '$position2',`position3` = '$position3',`phone` = '$phone',`mobile` = '$mobile' WHERE no = '$id'";
            $result = $this->db->query($sql); 
            return true;
        }    

    }

     // Update club Form data 
     public function updateplayerdata($model_data)
    {
        $id = $model_data['id'];
        $image = $model_data['image'];

         $sql = "UPDATE `tbl_player` SET `photo` = '$image' WHERE no = '$id'";
        $this->db->query($sql);
    }

    // change password of user
    public function updateclubpassword($model_data) {

        $id = $model_data['id'];
        $temppassword = $model_data['password'];
        $password = password_hash($temppassword, PASSWORD_BCRYPT);

        $sql = "UPDATE `tbl_club` SET `password` = '$password' WHERE no = '$id'";
        $result = $this->db->query($sql); 
        return true;
    }

    // change password of user
    public function updateplayerpassword($model_data) {

        $id = $model_data['id'];
        $temppassword = $model_data['password'];
        $password = password_hash($temppassword, PASSWORD_BCRYPT);

        $sql = "UPDATE `tbl_player` SET `password` = '$password' WHERE no = '$id'";
        $result = $this->db->query($sql); 
        return true;
    }









    // ===================================== ajax operation ===============================


    // Update event reg Inline data
    public function updateregplayerposition($model_data) {
        $columns = array(
            0 => 'position',
        );
        $colVal = '';
        $colIndex = $rowid = 0;
         
        if(isset($model_data)){
            if(isset($model_data['val']) && !empty($model_data['val'])) {
                $colVal =  preg_replace('/\s+/S', " ", $model_data['val']);
            }

            if(isset($model_data['index']) && $model_data['index'] >= 0) {
              $colIndex = $model_data['index'];
            }

            if(isset($model_data['id']) && $model_data['id'] != NULL) {
              $rowid = $model_data['id'];
            }


            $sql = "UPDATE `tbl_event_player_register` SET ".$columns[$colIndex]." = '".$colVal."' WHERE no='".$rowid."'";

            $this->db->query($sql);
            return true;
        }
        return false;
    }

     // Update clients Inline data
    public function updatecurrenteventstatus($model_data) {
        $columns = array(
            1 => 'reg_status',
        );
        $colVal = '';
        $colIndex = $rowid = 0;
         
        if(isset($model_data)){
            if(isset($model_data['val']) && !empty($model_data['val'])) {
                $colVal =  preg_replace('/\s+/S', " ", $model_data['val']);
            }

            if(isset($model_data['index']) && $model_data['index'] >= 0) {
              $colIndex = $model_data['index'];
            }

            if(isset($model_data['id']) && $model_data['id'] != NULL) {
              $rowid = $model_data['id'];
            }

                $sql = "UPDATE  `tbl_event_player_register` SET ".$columns[$colIndex]." = '".$colVal."' WHERE  no='".$rowid."'";

            $this->db->query($sql);
            return true;
        }
        return false;
    }




}