<?php
class Eventmodel2 extends CI_Model{
	public function event_type_already_exists($eveTypeName){
		$strQuery ="SELECT * FROM Event_Type WHERE event_type_name='".$eveTypeName."'";
		$result=($this->db->query($strQuery)->result());
		if($result) {
      $r= $result[0]->event_type_id; 
      return $r;
          
  }
        else
          return false; 
	}
	public function check_event_already_exist($eventName){

    $query=$this->db
               ->select('*')
               ->from('Event')
               ->where('event_name',$eventName)
               ->get();
               return $query->result();
	}
	public function get_event_id($EventsType){
	$query=$this->db
	     ->select('event_type_id')

		->from('Event_Type')
		->where('event_type_name', $EventsType)
		->get();
       // print_r($query->result());
       return $query->result();

} 
public function get_orgID($eventID){
	$query=$this->db
	     ->select('org_id')
	     ->from('Event_Organizer')
	     ->where('event_id',$eventID)
	     ->get();
	    return $query->result(); 
}
public function update_photo($photo,$eventID){
	$strQuery=("UPDATE Event SET photo='".$photo."' WHERE event_id='".$eventID."'");
	 $this->db->query($strQuery);
}
public function update_event_type($event_typeid,$eventID){
	$strQuery=("UPDATE Event SET event_type_id='".$event_typeid."' WHERE event_id='".$eventID."'");
$this->db->query($strQuery);
}
public function check_duplicate($eventName,$eventID){
	$strQuery = "SELECT * FROM Event WHERE event_name='".$eventName."' AND event_id <> '".$eventID."'";
	$result=($this->db->query($strQuery)->result());

	if(empty($result))
		return 0;
	else return true;

}
public function add_new_event_type($EventsType){
	$strQuery = "INSERT INTO Event_Type(event_type_name)  VALUES (
												'".$EventsType."'
												)";
		//echo $strQuery; exit;
		$result = $this->db->query($strQuery);
		$eveTypeID = $this->db->insert_id();
		if($eveTypeID)
			return $eveTypeID;
		else
			return false;

} 
public function update_event($eventName, $eventLoc,$startTime ,$endTime,$description,$newDate,$noOfGuests,$cpdHrs,$eventCategory,$platform, $eventID){
	/*$data = array(
               'event_name' =>$eventName,
               'event_location' =>$eventLoc ,
                'event_start_time'=>$startTime,
                 'event_end_time'=>$endTime,
                 'event_description'=>$description,
                 'event_date'=> $eventDate,
                 'platform'=>$platform,
                 'status'=>'Requested',
                 'no_of_guests_est'=>$noOfGuests,
                 'request_dt'=>NOW(),
                 cpd_hrs=>$cpdHrs,
                 );


$this->db->where('event_id', $eventID);
$this->db->update('event', $data); */
$strQuery = "UPDATE Event SET event_name='".$eventName."',  event_location='".$eventLoc."', event_start_time='".$startTime."', event_end_time='".$endTime."', food_type='', guest_of_honor='', event_description='".$description."', event_date='".$newDate."', platform='".$platform."', status='Requested', no_of_guests_est='".$noOfGuests."',request_dt=NOW(), cpd_hrs='".$cpdHrs."' WHERE event_id='".$eventID."'";
$result = $this->db->query($strQuery);
if($result)
	return $result;
else return false;
}
public function event_delete($eventID){
	$strQuery = "DELETE FROM Event WHERE event_id = '".$eventID."'";
	$result=$this->db->query($strQuery);
	if($result){
		$strQuery = "DELETE FROM Event_Organizer WHERE event_id = '".$eventID."'";
		$result=$this->db->query($strQuery);
		if($result){
			$strQuery = "DELETE FROM Attendance WHERE event_id = '".$eventID."'";
           $result=$this->db->query($strQuery);
           if ($result)
           	return true;
           else return false;
		}
		else return false;

	}
	else return false;

}

public function get_event_detail($event_id){
	$query=$this->db
	            ->select('*')
	            ->from('Event')
	            ->where('event_id',$event_id)
	            ->join('Event_Type','Event.event_type_id=Event_Type.event_type_id')
	            ->get();
	            return $query->result();
}
	public function add_event($eventName, $eventLoc,$startTime ,$endTime,$description,$EventsType,$newDate,$noOfGuests,$cdpHrs,$eventCategory,$orgID,$adminID,$event_typeid, $image_path,$platform,$organizationsList){
		
   //  print_r($organizationsList); exit();
		$strQuery = "INSERT INTO Event(event_id, event_name, event_location, event_start_time, event_end_time, food_type, guest_of_honor, event_description, event_type_id, event_date, request_dt, platform, photo, status, no_of_guests_est, cpd_hrs, event_category)  VALUES (
												NULL,
												'".$eventName."', 
												'".$eventLoc."', 
												'".$startTime."',
												'".$endTime."',
												'',
												'',
												'".$description."',
												'".$event_typeid."',
												'".$newDate."',
												NOW(),
												'".$platform."',
												'".$image_path."',
												'Requested',
												'".$noOfGuests."',
												'".$cdpHrs."',
												'".$eventCategory."'
												)";
 $this->db->query($strQuery);
  $eventID = $this->db->insert_id();
 // echo $eventID;exit();
  if(!empty($eventID)){
  	$strQuery = "INSERT INTO Event_Organizer(org_id, event_id, admin_id)  VALUES (
													'".$orgID."', 
													'".$eventID."', 
													'".$adminID."'
													)";
						$result=$this->db->query($strQuery);


						//if($result){

						//	return($result);
						//}
							//return $result;
						//else return false;
           

						if(($result)&&(empty($organizationsList)))
							
							return $result;
						 else{ 
					//$length=sizeof($organizationsList);
					//echo $length; exit;
				//echo($organizationsList[1]);exit();
				//$organizations = explode(",", $organizationsList);
				for($i=0; $i<sizeof($organizationsList); $i++){

					$strQuery = "INSERT INTO Event_Organization(id, event_id, organization_id)  VALUES (
															NULL, 
															'".$eventID."', 
															'".$organizationsList[$i]."'
														)";
					//echo $strQuery; exit;
					$result =$this->db->query($strQuery);
				}
					if($result)
						return $result;
					else
						return false;
					
				
				}
				//if($result)
				//	return $result;
				//else return false;
			}
        else return false;
  // }
  // else return false;
}
 // else return false;

}	//}
//}