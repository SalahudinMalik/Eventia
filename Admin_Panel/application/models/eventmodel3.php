<?php
class Eventmodel3 extends CI_Model{
	public function checkfunction($fname){
		$query=$this->db
	     ->select('user_id')

		->from('User')
		->where('first_name',$fname)
		->get();
       // print_r($query->result());
       return $query->result();
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
public function update_user_photo($photo,$userID)
{
	$strQuery=("UPDATE User SET photo='".$photo."' WHERE user_id='".$userID."'");
	$this->db->query($strQuery);

}
public function update_user_profile($firstName,$lastName,$userID,$profession,$address,$phone,$platform){
	$strQuery = "UPDATE User SET first_name='".$firstName."',last_name='".$lastName."', profession='".$profession."', address='".$address."', phone='".$phone."', platform='".$platform."' WHERE user_id='".$userID."'";
	  $result=$this->db->query($strQuery);
	 return $result;
} 
public function get_event_detail($eventID){
	$query=$this->db
	            ->select('*')
	            ->from('Event')
	            ->where('event_id',$eventID)
	            ->get();
	            return $query->result();

}
public function onsite_event_listing($organisation_ID){
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
				  AND u.utype = 'Organizer'  AND ev.status<>'Requested' ORDER BY ev.event_date ASC";
				 $result= ($this->db->query($strQuery)->result());
				// print_r($result); exit();
				 return $result;
}
public function get_event_id($eventName){
	$query=$this->db
	            ->select('event_id')
	            ->from('Event')
	            ->where('event_name',$eventName)
	            ->get();
	            return ($query->result()); exit();
}
/*public function get_registered_guests($eventID){
	$strQuery = "SELECT g.*, g.photo guest_photo,g.user_registration, ev.*, a.status att_status, IF(NOW() < ev.event_date, 'Upcoming', 'Passed') ev_status FROM User g LEFT OUTER JOIN Attendance a ON a.user_id = g.user_id
				LEFT OUTER JOIN Event ev ON ev.event_id = a.event_id
				LEFT OUTER JOIN Event_Organizer evo ON evo.event_id = ev.event_id
				WHERE (ev.`status`	=  'Accepted' || ev.`status`	=  'Passed') AND (a.status =  'Joining' OR a.status =  'Joined') AND ev.event_id ='".$eventID."'";
				//echo($strQuery); exit();

	$result =($this->db->query($strQuery)->result()) ;
	print_r($result);exit();
	return($result); 

}*/
public function get_existing_guest_list($organizationID,$eventID){
	$strquery= "SELECT u.user_id,u.user_name,u.email,u.phone,u.photo,u.user_registration
  					 FROM User u
   					 JOIN User_Organization uo ON uo.user_id=u.user_id
  					 WHERE uo.organization_id ='".$organizationID."' AND u.utype='Guest'
  					 AND u.user_id NOT IN (SELECT user_id FROM Attendance WHERE event_id='".$eventID."' AND status='joined')";
  					 $result =($this->db->query($strquery)->result());
  				
  					 return($result); 
  					// return($result);


}

 public function get_registered_guests($eventID){
	$strQuery="SELECT u.*,a.* FROM  User u
 JOIN Attendance a on a.user_id=u.user_id
WHERE a.event_id='".$eventID."'";
$result =($this->db->query($strQuery)->result()) ;
//print_r($result);exit();
	return($result); 
}
public function chk_email($email){
	$strQuery = "SELECT * FROM User WHERE email='".$email."'";
	 $result =($this->db->query($strQuery)->result());
	 	//print_r($result); exit();
	 if($result)
	 	return true;
	 	//print_r($result); exit();
	 else 
	 	return false;

}
public function add_new_guest($firstName,$lastName,$userName,$profession,$address,$email,$organization,$phone,$image_path,$platform,$adminID,$cpdHrs,$eventID,$status,$deviceID,$password){
	$strQuery = "INSERT INTO User(user_id,first_name,last_name, user_name, email, password, utype, profession, address, phone, registered_dt, photo, is_pwd_requested, platform, admin_id, status, device_id, last_login_dt, login_status, user_cpd_hrs,user_registration)  VALUES (
												NULL,
												'".$firstName."',
												'".$lastName."',
												'".$userName."', 
												'".$email."', 
												'".md5($password)."',
												'Guest',
												'".$profession."',
												'".$address."',
												'".$phone."',
												NOW(),
												'".$image_path."',
												'False',
												'".$platform."',
												'".$adminID."',
												'" .$status."',
												'" .$deviceID."',
												NOW(),
												'Active',
												'".$cpdHrs."',
												'Manual'
												)";
												 $this->db->query($strQuery);
                                                $userID = $this->db->insert_id();

                                                 if(!empty($userID)) {
                                                 	$strQuery1 = "INSERT INTO User_Organization(user_id, organization_id)  VALUES ('".$userID."', '".$organization."')";
                                                 	$this->db->query($strQuery1);
                                                 	$id1=$this->db->insert_id();
                                                 //	echo $id1;exit();
                                                 	
                                                 	 $strQuery = "INSERT INTO Attendance(attendance_id, user_id, event_id, status, dt, platform)  VALUES (
																	NULL,
																	'".$userID."', 
																	'".$eventID."', 
																	'Joined',
																	NOW(),
																	'".$platform."'
																	)";
																	$this->db->query($strQuery);
																	$id = $this->db->insert_id();
																	if($id)
																		return true;
																	else 
																		return false;
                                                 }
                                                 return false;
		//echo $strQuery; die();
												

}
public function get_new_events($adminID,$status){
	$strQuery = "SELECT ev.cpd_hrs, ev.event_id, ev.event_name, ev.request_dt,ev.event_location, ev.event_start_time, ev.event_end_time, ev.food_type, ev.guest_of_honor, ev.event_description, ev.no_of_guests_est, ev.status event_status, 				DATE(ev.event_date) event_date, evt.event_type_name, u.user_name org_name, ev.photo, u.email, u.photo org_image, (SELECT COUNT(*) FROM Event_Organizer WHERE org_id=u.user_id) no_of_events
				FROM Event ev
				LEFT OUTER JOIN Event_Type evt ON ev.event_type_id = evt.event_type_id
				INNER JOIN Event_Organizer evo ON evo.event_id = ev.event_id
				LEFT OUTER JOIN User u ON u.user_id = evo.org_id
				WHERE IF(LENGTH('".$status."')>0, IF('".$status."' = 'Requested', ev.event_date >= CURDATE() && ev.`status`='Requested', IF('".$status."' = 'Entertained', (ev.`status`='Accepted' || ev.`status`='Rejected'), '')), 1) AND u.admin_id='".$adminID."'";
				 $result =($this->db->query($strQuery)->result());
				 if($result) 
				 	//print_r ($result); exit();
				 if($result)
	{
		$strquery = "UPDATE Event SET `status`='Passed' WHERE event_date < CURDATE()";
			
			$this->db->query($strquery);
			//print_r($result); exit;
			return $result;
  				
}
	
}
}