<?php

Class Adminmodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

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





}
