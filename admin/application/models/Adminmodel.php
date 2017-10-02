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
        $id = $model_data['id'];
        $description = $model_data['description'];
     
        $sql = "INSERT INTO tbl_how_its_work(`description`)  VALUES('$description')";
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

                 $sql = "DELETE FROM tbl_club WHERE no='".$rowid."'";

            $this->db->query($sql);
            return true;
        }
        return false;
    }


     // Update clients Inline data
    public function playerdeleteInline($model_data) {
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

                 $sql = "DELETE FROM tbl_player WHERE no='".$rowid."'";

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

        $sql = "UPDATE `tbl_about_us` SET `description` = '$description' WHERE about_id = '$id'";
        $this->db->query($sql);
    }

    // Update About us data
    public function updateprivacy($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];

        $sql = "UPDATE `tbl_privacy_policy` SET `description` = '$description' WHERE privacy_policy_id = '$id'";
        $this->db->query($sql);
    }

    // Update About us data
    public function updatepricing($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];

        $sql = "UPDATE `tbl_pricing_policy` SET `description` = '$description' WHERE pricing_policy_id = '$id'";
        $this->db->query($sql);
    }

    // Update About us data
    public function updatetermcondition($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];

        $sql = "UPDATE `tbl_term_condition` SET `description` = '$description' WHERE term_condition_id = '$id'";
        $this->db->query($sql);
    }

    // Update About us data
    public function updatehowitwork($model_data)
    {
        $id = $model_data['id'];
        $description = $model_data['description'];

        $sql = "UPDATE `tbl_how_its_work` SET `description` = '$description' WHERE how_its_work_id = '$id'";
        $this->db->query($sql);
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

        $sql = "UPDATE `tbl_contact_us` SET `email` = '$email',`phone` = '$phone',`address` = '$address' WHERE contact_us_id = '$id'";
        $this->db->query($sql);
    }












}
