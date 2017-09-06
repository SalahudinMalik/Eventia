<?php
class Loginmodel extends CI_Model{
public function login_valid($userID,$password){
    $strQuery = "SELECT u.* , uo.organization_id
          FROM User u
          LEFT OUTER JOIN User_Organization uo ON u.user_id = uo.user_id
          WHERE( u.email='".$userID."'OR u.user_name='".$userID."') AND u.password='".$password."'";

        /*  $this->db->select('*')->from('user');
        $
          $this->db->where('email', $userID);
          $this->db->where('password', $password);
          $this->db->join('user_organization', 'user_organization.user_id =user.user_id');*/

    // $login_data= $this->db->query($strQuery);
    // print_r($login_data);
        //$login_data = $this->db->get()->result_array();
        // echo $this->db->last_query();
      // echo "<pre>";print_r($this->db->query($strQuery)->result());exit;
        // print_r($login_data);
        // print_r($login_data->num->row);
       $login_data=($this->db->query($strQuery)->result());
       
          if($login_data)
          return $login_data;
        
          else
            return false;
  
       }
		

	}