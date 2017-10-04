<?php

Class Adminmodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

//=======================================================Get Data Model  Method ==========================================//

    // Get Project data
    public function getplayerdatalist()
    {  
        $this->db->select('*');
        $this->db->from('tbl_player');
        return $this->db->get()->result();
    }

    // Get Project data
    public function getclubdatalist()
    {  
        $this->db->select('*');
        $this->db->from('tbl_club');
        return $this->db->get()->result();
    }

    // function get list of events
    public function geteventLists()
    {
        $this->db->select('*');
        $this->db->from('tbl_event');
        return $this->db->get()->result();
    }

    // function get list of events
    public function getclubdata($club_no)
    {
        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->where('no',$club_no);
        return $this->db->get()->row();
    }

     //  Get About us data
     public function getaboutusinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_about_us');
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
     public function gethowitworkinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_how_its_work');
        return $this->db->get()->row();
    }

     //  Get About us data
     public function getadminbasicinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_base_admin');
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
     public function getpositioninfolist()
    {
        $this->db->select('*');
        $this->db->from('tbl_position');
        return $this->db->get()->result();
    }

    //  Get About us data
     public function getfaqsinfolist()
    {
        $this->db->select('*');
        $this->db->from('tbl_faqs');
        return $this->db->get()->result();
    }

     // Get Services data
     public function getfaqsupadatedata($model_data)
    {   $id = $model_data['id'];

        $this->db->select('*');
        $this->db->where('faq_id',$id);
        $this->db->from('tbl_faqs');
        return $this->db->get()->row();
    } 

    //  Get About us data
     public function gettransactioninfolist()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaction');
        return $this->db->get()->result();
    }

     //  Get About us data
     public function getpackagedatalist()
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        return $this->db->get()->result();
    }

     // Get Services data
     public function getpackageupadatedata($model_data)
    {   $id = $model_data['id'];

        $this->db->select('*');
        $this->db->where('package_id',$id);
        $this->db->from('tbl_package');
        return $this->db->get()->row();
    } 

     //  Get About us data
     public function getsociallinkdatalist()
    {
        $this->db->select('*');
        $this->db->from('tbl_social_link');
        return $this->db->get()->result();
    }

    

     // Get Services data
     public function getcluboverviewdata($model_data)
    {   $id = $model_data['id'];

        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->where('tbl_club.no',$id);
        $this->db->join('tbl_event', 'tbl_event.club_no = tbl_club.no');
        $this->db->order_by('tbl_event.date','DESC');
        return $this->db->get()->result();
    }  

     // Get Services data
     public function getcluboverviewclubinfo($model_data)
    {   $id = $model_data['id'];

        $this->db->select('*');
        $this->db->from('tbl_club');
        $this->db->where('no',$id);
        return $this->db->get()->row();
    } 















//=============================================== Check login =============================================//


     // function verify login credentials
    public function verify_login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_base_admin');
        $this->db->where('user', $username);
        $result = $this->db->get();

        $numrows = $result->num_rows();
            
        if ($numrows == 1) {
            $row = $result->row();

            if (password_verify($password, $row->pw)) {
                return $row;
            } else {
                return 0;
            }
        } else {
            return "NO_USER_FOUND";
        }
    }





//=========================================================== Add Model Method ==========================================//

    // Add About us Settings tabs data 
    public function addaboutus($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];
     
        $sql = "INSERT INTO tbl_about_us(`description`)  VALUES('$description')";
        $this->db->query($sql);
    }

    // Add About us Settings tabs data 
    public function addprivacy($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];
     
        $sql = "INSERT INTO tbl_privacy_policy(`description`)  VALUES('$description')";
        $this->db->query($sql);
    }

    // Add About us Settings tabs data 
    public function addpricing($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];
     
        $sql = "INSERT INTO tbl_pricing_policy(`description`)  VALUES('$description')";
        $this->db->query($sql);
    }

    // Add About us Settings tabs data 
    public function addtermcondition($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];
     
        $sql = "INSERT INTO tbl_term_condition(`description`)  VALUES('$description')";
        $this->db->query($sql);
    }

    // Add About us Settings tabs data 
    public function addhowitwork($model_data)
    {

        print_r($model_data);
        exit();
        
        $description = $model_data['description'];
        $description1 = $model_data['description1'];
        $image1 = $model_data['image1'];
        $image2 = $model_data['image2'];
        $image3 = $model_data['image3'];
     
        $sql = "INSERT INTO tbl_how_its_work(`description`,`description1`,`image1`,`image2`,`image3`)  VALUES('$description','$description1','$image1','$image2','$image3')";
        $this->db->query($sql);
    }

     // Update About us data
    public function addcontactus($model_data)
    {
        $id = $model_data['id'];
        $email = $model_data['email'];
        $phone = $model_data['phone'];
        $address = $model_data['address'];

        $sql = "INSERT INTO tbl_contact_us(`email`,`phone`,`address`)  VALUES('$email','$phone','$address')";
        $this->db->query($sql);
    }



     // Update About us data
    public function addpositiondata($model_data)
    {
        $position = $model_data['position'];

        $sql = "INSERT INTO tbl_position(`position_title`)  VALUES('$position')";
        $this->db->query($sql);
    }


      // Update About us data
    public function addfaqsdata($model_data)
    {
        $question = $model_data['question'];
        $answer = $model_data['answer'];

        $data['question'] = $question;
        $data['answer'] = $answer;  
        $this->db->INSERT('tbl_faqs',$data);
    }

    // Update About us data
    public function addpackagedata($model_data)
    {
        $packagename = $model_data['packagename'];
        $numberofplayer = $model_data['numberofplayer'];
        $pereventfee = $model_data['pereventfee'];
        $playerregisatrationfee = $model_data['playerregisatrationfee'];

        $sql = "INSERT INTO tbl_package(`package_name`,`number_of_player`,`per_event_fee`,`player_regisatration_fee`)  VALUES('$packagename','$numberofplayer','$pereventfee','$playerregisatrationfee')";
        $this->db->query($sql);
    }


    // Update About us data
    public function addsociallinkdata($model_data)
    {
        $title = $model_data['title'];
        $icon = $model_data['icon'];
        $link = $model_data['link'];

        $sql = "INSERT INTO tbl_social_link(`title`,`icon`,`link`)  VALUES('$title','$icon','$link')";
        $this->db->query($sql);
    }





//=========================================================== Inline Update Model Method ===============================//

    // Update clients Inline data
    public function updateeventInline($model_data) {
        $columns = array(
            1 => 'status',
            2 => 'delete',
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

            if($colIndex == 2)
                 $sql = "DELETE FROM tbl_event WHERE no='".$rowid."'";
            else
                $sql = "UPDATE  tbl_event SET ".$columns[$colIndex]." = '".$colVal."' WHERE no='".$rowid."'";

            $this->db->query($sql);
            return true;
        }
        return false;
    }


    // Update clients Inline data
    public function clubdeleteInline($model_data) {
        $columns = array(
            1 => 'status',
            2 => 'delete',
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
                 if($colIndex == 2)
                 $sql = "DELETE FROM tbl_club WHERE no='".$rowid."'";
            else
                $sql = "UPDATE  tbl_club SET ".$columns[$colIndex]." = '".$colVal."' WHERE no='".$rowid."'";


            $this->db->query($sql);
            return true;
        }
        return false;
    }


     // Update clients Inline data
    public function playerdeleteInline($model_data) {
        $columns = array(
            1 => 'status',
            2 => 'delete',
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

                  if($colIndex == 2)
                 $sql = "DELETE FROM tbl_player WHERE no='".$rowid."'";
            else
                $sql = "UPDATE  tbl_player SET ".$columns[$colIndex]." = '".$colVal."' WHERE no='".$rowid."'";


            $this->db->query($sql);
            return true;
        }
        return false;
    } 


    // Update clients Inline data
    public function updatepositionstatusInline($model_data) {
        $columns = array(
            1 => 'position_title',
            2 => 'delete',
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

                  if($colIndex == 2)
                 $sql = "DELETE FROM tbl_position WHERE position_id='".$rowid."'";
            else
                $sql = "UPDATE  tbl_position SET ".$columns[$colIndex]." = '".$colVal."' WHERE position_id='".$rowid."'";


            $this->db->query($sql);
            return true;
        }
        return false;
    } 


    // Update clients Inline data
    public function packagedeleteInline($model_data) {
        $columns = array(
            1 => 'delete',
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
                $sql = "DELETE FROM tbl_package WHERE package_id='".$rowid."'";


            $this->db->query($sql);
            return true;
        }
        return false;
    } 

     // Update clients Inline data
    public function faqsdeleteInline($model_data) {
        $columns = array(
            1 => 'delete',
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
                $sql = "DELETE FROM tbl_faqs WHERE faq_id='".$rowid."'";


            $this->db->query($sql);
            return true;
        }
        return false;
    }

    // Update Social Inline data
    public function updateInlinesocial($model_data) {
        $columns = array(
            1 => 'link',
            2 => 'icon',
            3 => 'status',
            4 => 'delete',
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

            if($colIndex == 4)
                 $sql = "DELETE FROM tbl_social_link WHERE social_link_id='".$rowid."'";
            else
                $sql = "UPDATE  tbl_social_link SET ".$columns[$colIndex]." = '".$colVal."' WHERE social_link_id='".$rowid."'";
            

            $this->db->query($sql);
            return true;
        }
        return false;
    }

     // Update testimonial Inline data
    public function updatetesocialstatusInline($model_data) {
        $columns = array(
            1 => 'status',
            2 => 'delete',
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

            if($colIndex == 2)
                 $sql = "DELETE FROM tbl_social_link WHERE social_link_id='".$rowid."'";
            else
                $sql = "UPDATE  tbl_social_link SET ".$columns[$colIndex]." = '".$colVal."' WHERE social_link_id='".$rowid."'";
            
            $this->db->query($sql);
            return true;
        }
        return false;
    }



//=================================================== Update Model Method ==============================================//    

    // Update About us data
    public function updateaboutus($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];

        $data['description'] = $description; 
        $this->db->where('about_id',$id);
        $this->db->update('tbl_about_us',$data);
    }

    // Update About us data
    public function updateprivacy($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];

        $data['description'] = $description; 
        $this->db->where('privacy_policy_id',$id);
        $this->db->update('tbl_privacy_policy',$data);
    }

    // Update About us data
    public function updatepricing($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];

        $data['description'] = $description; 
        $this->db->where('pricing_policy_id',$id);
        $this->db->update('tbl_pricing_policy',$data);
    }

    // Update About us data
    public function updatetermcondition($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];

        $data['description'] = $description; 
        $this->db->where('term_condition_id',$id);
        $this->db->update('tbl_term_condition',$data);
    }

    // Update About us data
    public function updatehowitwork($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];
        $image1 = $model_data['image1'];

        $data['description'] = $description; 
        $data['image1'] = $image1; 
        $this->db->where('how_its_work_id',$id);
        $this->db->update('tbl_how_its_work',$data);
    }

    // change password of user
    public function adminprofileupdate($model_data) {

        $id = $model_data['id'];
        $temppassword = $model_data['password'];
        $password = password_hash($temppassword, PASSWORD_BCRYPT);

        $sql = "UPDATE `tbl_base_admin` SET `pw` = '$password' WHERE no = '$id'";
        $result = $this->db->query($sql); 
        return true;
    }

     // Update About us data
    public function updatecontactus($model_data)
    {
        $id = $model_data['id'];
        $email = $model_data['email'];
        $phone = $model_data['phone'];
        $address = $model_data['address'];

        $data['email'] = $email; 
        $data['phone'] = $phone; 
        $data['address'] = $address; 
        $this->db->where('contact_us_id',$id);
        $this->db->update('tbl_contact_us',$data);
    }

      // Update About us data
    public function updatefaqsdata($model_data)
    {
        $id = $model_data['id'];
        $question = $model_data['question'];
        $answer = $model_data['answer'];




        $data['question'] = $question; 
        $data['answer'] = $answer; 
        $this->db->where('faq_id',$id);
        $this->db->update('tbl_faqs',$data);
    }

       // Update About us data
    public function updatepackagedata($model_data)
    {
        $id = $model_data['id'];
        $packagename = $model_data['packagename'];
        $numberofplayer = $model_data['numberofplayer'];
        $pereventfee = $model_data['pereventfee'];
        $playerregisatrationfee = $model_data['playerregisatrationfee'];

        $sql = "UPDATE `tbl_package` SET `package_name` = '$packagename',`number_of_player` = '$numberofplayer',`per_event_fee` = '$pereventfee',`player_regisatration_fee` = '$playerregisatrationfee' WHERE package_id = '$id'";
        $this->db->query($sql);
    }












}
