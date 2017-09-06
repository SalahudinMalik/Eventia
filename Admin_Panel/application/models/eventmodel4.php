<?php
class Eventmodel4 extends CI_Model{
	public function admin_pending_organisers($userID,$status){
		$strQuery = "SELECT * FROM User u 
		LEFT OUTER JOIN User_Organization uo ON u.user_id = uo.user_id 
		LEFT OUTER JOIN Organization o ON o.organization_id = uo.organization_id WHERE u.`status`='".$status."' AND u.uType='Organizer'";
		 $result= ($this->db->query($strQuery)->result());
				// print_r($result); exit();
				 return $result;
	}
	public function get_all_organisation(){

		$strQuery = "SELECT * FROM Organization ORDER BY organization_id ASC";
		 $result= ($this->db->query($strQuery)->result());
				// print_r($result); exit();
				 return $result;
}
public function organisation_already_exists($orgName){
	$strQuery = "SELECT * FROM Organization WHERE organization_name='".$orgName."'";
	 $result= ($this->db->query($strQuery)->result());
	 if($result)
	 	return 1;
	 else return 0;

}
public function add_new_org($orgName){
	$strQuery = "INSERT INTO Organization(organization_name)  VALUES (
												'".$orgName."'
												)";
												$this->db->query($strQuery);
																	$id = $this->db->insert_id();
																	if($id)
																		return true;
																	else 
																		return false;

}
public function get_report_data($eventID,$orgID){
	$strQuery = "SELECT ev.cpd_hrs, ev.event_id, ev.event_name, ev.event_location, ev.event_start_time, ev.event_end_time, ev.food_type, ev.guest_of_honor, ev.event_description, ev.no_of_guests_est, ev.status event_status, DATE_FORMAT(DATE(ev.event_date), '%d/%m/%Y') event_date, evt.event_type_name, u.user_id org_id, u.user_name org_name, ev.photo, u.email, u.photo org_image, u.phone, u.address, o.organization_id, o.organization_name, (SELECT COUNT(*) FROM Event_Organizer WHERE org_id=u.user_id) no_of_events, (SELECT COUNT(*) FROM Attendance WHERE event_id = '".$eventID."' AND `status` = 'Joined') no_of_guests_attended
				FROM Event ev
				LEFT OUTER JOIN Event_Type evt ON ev.event_type_id = evt.event_type_id
				INNER JOIN Event_Organizer evo ON evo.event_id = ev.event_id
				LEFT OUTER JOIN User u ON u.user_id = evo.org_id
				INNER JOIN User_Organization uo ON u.user_id = uo.user_id
				INNER JOIN Organization o ON o.organization_id = uo.organization_id
				WHERE ev.event_id = '".$eventID."' and evo.org_id = '".$orgID."'";
				 $result= ($this->db->query($strQuery)->result());
				// print_r($result);exit();
				 return $result;

}
public function get_all_organizers(){
	$strQuery = "SELECT user_id, user_name FROM User WHERE utype='Organizer'";
	 $result= ($this->db->query($strQuery)->result());
				// print_r($result);exit();
	 return $result;
}
public function get_organizer_events($orgID){
	$strQuery = "SELECT ev.event_id, ev.event_name, ev.event_location, ev.event_start_time, ev.event_end_time, ev.food_type, ev.guest_of_honor, ev.event_description, ev.status, 				ev.event_date, evt.event_type_id, ev.photo, o.organization_id, (SELECT COUNT( * ) FROM Attendance WHERE event_id = ev.event_id)guests
				FROM Event ev
				LEFT OUTER JOIN Event_Type evt ON ev.event_type_id = evt.event_type_id
				INNER JOIN Event_Organizer evo ON evo.event_id = ev.event_id
				INNER JOIN User u ON u.user_id = evo.org_id
				LEFT OUTER JOIN User_Organization o ON o.user_id = u.user_id
				WHERE NOW( ) > ev.event_date
				AND evo.org_id =  '".$orgID."'";
				 $result= ($this->db->query($strQuery)->result());
				 return ($result);

}
public function get_user_detail($userID){
	$strQuery = "SELECT u.user_id,first_name,last_name, user_name, email, utype, profession, address, phone, photo, user_cpd_hrs,u.user_registration, o.organization_id, organization_name ,(SELECT SUM(ev.cpd_hrs) as cpd FROM `Attendance` att
JOIN Event as ev on att.event_id=ev.event_id
WHERE att.`user_id`='".$userID."' AND att.`status`='Joined'
group by att.user_id) as user_cpd_hrs
                        FROM User u
			LEFT OUTER JOIN User_Organization uo ON u.user_id = uo.user_id
			LEFT OUTER JOIN Organization o ON o.organization_id = uo.organization_id
			 WHERE u.user_id='".$userID."'";
			  $result= ($this->db->query($strQuery)->result());
				// print_r($result);exit();
				 return $result;
}
public function update_user_status($status,$platform,$orgID){
	//echo $status;
	//echo $platform;
	//echo $orgID;
	$strQuery = "UPDATE User SET status='".$status."', platform='".$platform."' WHERE user_id='".$orgID."'";
	$this->db->query($strQuery);
	$getuserquery="SELECT u.*,o.organization_name
		
		FROM User u 
		JOIN User_Organization uo on uo.user_id=u.user_id
		JOIN Organization o on o.organization_id=uo.organization_id
		where u.user_id='".$orgID."'";
		 $result= ($this->db->query($getuserquery)->result());
				 if($result)
				 	return $result;
				 else 
				 	return 0;
	

}
}