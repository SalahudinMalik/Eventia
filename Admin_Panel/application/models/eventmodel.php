<?php
class Eventmodel extends CI_Model {
	public function get_event_types() {
	$strQuery = "SELECT * FROM Event_Type";

	$result = ($this->db->query($strQuery)->result());
	if($result)
		return $result;
	else 
		return false;
}
public function get_future_events($organisation_ID){
   $strQuery = "UPDATE Event SET `status`='Passed' WHERE event_date < CURDATE()";
    $this->db->query($strQuery);
     $strQuery = "SELECT ev.event_category, ev.cpd_hrs, ev.event_id, ev.event_name, ev.event_location,ev.event_start_time, ev.event_end_time, ev.food_type, ev.guest_of_honor, ev.event_description, ev.status, DATE( ev.event_date ) event_date, evt . * , ev.photo, IF( CURRENT_DATE( ) >= DATE_SUB( ev.event_date, INTERVAL 5 DAY ) , 1, 0 ) is_due, DATE( ev.request_dt ) request_dt, ev.no_of_guests_est, uo.organization_id, uo.user_id AS organizer_id, u.user_name as organizer_name, u.utype,(SELECT GROUP_CONCAT(organization_id) FROM Event_Organization
                  WHERE event_id=ev.event_id GROUP BY ev.event_id) as  org_list
                  FROM `User_Organization` uo
                  JOIN User u ON u.user_id = uo.user_id
                  JOIN Event_Organizer eo ON eo.org_id = uo.user_id
                  JOIN Event ev ON ev.event_id = eo.event_id
                  LEFT JOIN Event_Type evt ON ev.event_type_id = evt.event_type_id
                  WHERE uo.`organization_id` ='".$organisation_ID."'
                  AND u.utype = 'Organizer'  AND ev.status='Accepted' ORDER BY ev.event_date ASC";
                  $result=($this->db->query($strQuery)->result());
                  if($result)
          return $result;
        else
          return false; 


}

public function  organisation_already_exists($organisation){
   $strQuery = "SELECT * FROM Organization WHERE organization_name='".$organisation."'";
  $result=($this->db->query($strQuery)->result());
  $r= $result[0]->organization_id; 
        if($r)
          return $r;
        else
          return false; 
}
public function Event_Type_already_exists($eveTypeName) {
  $strQuery = "SELECT * FROM Event_Type WHERE event_type_name='".$eveTypeName."'";
  $result=($this->db->query($strQuery)->result());
        if($result)
          return true;
        else
          return false; 
}
public function add_new_event_type($eveTypeName){
  $strQuery = "INSERT INTO Event_Type(event_type_name)  VALUES (
                        '".$eveTypeName."'
                        )";
                        $this->db->query($strQuery);
                         $typeId=$this->db->insert_id();
                         if($typeid)
                          return true;
                        else 
                          return false;

}
public function get_all_event($orgID,$status){

	$strQuery = "SELECT ev.event_category, ev.cpd_hrs, ev.event_id, ev.event_name, ev.event_location, ev.event_start_time, ev.event_end_time, ev.food_type, ev.guest_of_honor, ev.event_description, ev.status, DATE(ev.event_date) event_date, evt.* , ev.photo, IF( CURRENT_DATE( ) >= DATE_SUB( ev.event_date, INTERVAL 5 DAY ) , 1, 0 ) is_due, DATE(ev.request_dt) request_dt
				, ev.no_of_guests_est, (IF(ev.event_category = 'Public', (SELECT GROUP_CONCAT(organization_id) FROM Event_Organization
WHERE event_id=ev.event_id GROUP BY ev.event_id), '')) org_list,uo.user_id as organizer_id,(SELECT user_name FROM User WHERE user_id=uo.user_id) as organizer_name   FROM Event ev
				LEFT OUTER JOIN Event_Type evt ON ev.event_type_id = evt.event_type_id
				INNER JOIN Event_Organizer evo ON evo.event_id = ev.event_id
				LEFT OUTER JOIN User_Organization uo on evo.org_id=uo.user_id
				WHERE IF(LENGTH('".$status."')>0, IF('".$status."' = 'All', ((ev.event_date >= CURDATE() && (`status`='Requested' || `status`='Rejected')) || ev.event_date <= CURDATE() || ev.event_date >= CURDATE() && `status`='Accepted') ,IF('".$status."' = 'Passed', ev.event_date < CURDATE(), IF('".$status."' = 'Requested', ev.event_date >= CURDATE() && (`status`='Requested' || `status`='Rejected'), IF('".$status."' = 'Upcoming', ev.event_date >= CURDATE() && `status`='Accepted', '')))), 1) AND evo.org_id='".$orgID."'";
				$result=($this->db->query($strQuery)->result());
				if($result)
					return $result;
				else
					return false; 
            }
public function add_organisation($org){
	//$this->db->insert('organization')
	      $strQuery= "INSERT INTO Organization (organization_name)
VALUES ( '".$org."')";
$this->db->query($strQuery);
  $organization_id = $this->db->insert_id();
 // echo $organization_id; exit();
  return $organization_id;


}               
public function get_organisations(){
	$strQuery = "SELECT * FROM Organization ORDER BY organization_id ASC";
	$result=($this->db->query($strQuery)->result());
	if($result)
		return $result;
	else 
		return false;
}
public function already_exist($email,$userName){
	 $strQuery = "SELECT * FROM User WHERE email='".$email."' OR user_name='".$userName."'";
	 $result=($this->db->query($strQuery)->result());
	if($result)
		return $result;
	else 
		return false;
}
public function get_org_id($Organization){
	$query=$this->db
	     ->select('organization_id')

		->from('Organization')
		->where('organization_name',$Organization)
		->get();
       // print_r($query->result());
       return $query->result();

}  
public function get_user_data($userID){
  $strQuery = "SELECT u.user_id,first_name,last_name, user_name, email, utype, profession, address, phone, photo, user_cpd_hrs,u.user_registration, o.organization_id, organization_name ,(SELECT SUM(ev.cpd_hrs) as cpd FROM `Attendance` att
JOIN Event as ev on att.event_id=ev.event_id
WHERE att.`user_id`='".$userID."' AND att.`status`='Joined'
group by att.user_id) as user_cpd_hrs
                        FROM User u
      LEFT OUTER JOIN User_Organization uo ON u.user_id = uo.user_id
      LEFT OUTER JOIN Organization o ON o.organization_id = uo.organization_id
       WHERE u.user_id='".$userID."'";
       $result=($this->db->query($strQuery)->result());
      
       if($result);
       return $result;
      // else return false;
} 


public function  insert_into_user_table($firstName,$lastName,$userName,$email,$password,$uType,$profession,$address,$phone,$image_path,$org_id,$platform,$adminID,$status,$cpdHrs){ 
  $strQuery = "INSERT INTO User(user_id,  first_name,last_name, user_name, email, password, utype, profession, address, phone, registered_dt, photo, is_pwd_requested, platform, admin_id, status, device_id, last_login_dt, login_status, user_cpd_hrs)  VALUES (
                                                NULL,
                                                '".$firstName."',
                                                '".$lastName."',
                                                '".$userName."', 
                                                '".$email."', 
                                                '".md5($password)."',
                                                '".$uType."',
                                                '".$profession."',
                                                '".$address."',
                                                '".$phone."',
                                                NOW(),
                                                '".$image_path."',
                                                'False',
                                                '".$platform."',
                                                '".$adminID."',
                                                '".$status."',
                                                '',
                                                NOW(),
                                                'Active',
                                                '".$cpdHrs."'
                                                )";
   $this->db->query($strQuery);
    $userID = $this->db->insert_id();
   // echo $userID;
    if(!empty($userID)) 
        {
            $query_data = array(
                'user_id'   => $userID,
                'organization_id'   => $org_id
                );
            
            $this->db->insert('User_Organization', $query_data);
            $id=$this->db->insert_id();
           // echo $id; 
            /*$strQuery = "INSERT INTO user_organization(id, user_id, organization_id)  VALUES (
                                                    NULL,
                                                    '.$userID.', 
                                                    '.$org_id.',
                                                    )";
                                               //  $strQy1 = "INSERT INTO user_organization(id, user_id, organization_id) VALUES (NULL,'348','2')";*/
            /*    $query=$this->db
         ->select('email')

        ->from('user')
        ->where('utype','Admin')
        ->get();
        return($query->result());
      // print_r( $query->result()); exit();  */   
      if($id)                       
                          {
                            $strQuery = "SELECT * , (SELECT COUNT( * ) FROM User WHERE  `status` =  'Pending') pending_count FROM User WHERE utype =  'Admin'";
            
                $result = $this->db->query($strQuery)->result();
                if($result)
              return $result;
            else return false;
}
             else return false;

}
else return false;
} 
} 
