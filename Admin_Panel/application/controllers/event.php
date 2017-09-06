<?php
class Event extends CI_Controller{
	public function index(){
		$this->load->helper('html');
		$this->load->view('admin_common/admin_header');
		//$this->load->view('admin_common/admin_aside');
		$this->load->view('admin_common/admin_navigation');
	  // $this->load->view('event_requests');
		
		$this->load->model('eventmodel3');
		$admin_id=1;
		$status="Requested";
		$data['_event']=$this->eventmodel3->get_new_events($admin_id,$status);
		//print_r($data);
		//$status="Entertained";
		
		$this->load->view('event_requests',$data);
		$this->load->view('admin_common/admin_footer');
		$this->load->view('admin_common/event_modalid');
		
	}
	public function get_entertained_events(){
		$this->load->helper('html');
		$this->load->view('admin_common/admin_header');
		//$this->load->view('admin_common/admin_aside');
		$this->load->view('admin_common/admin_navigation');
	  // $this->load->view('event_requests');
		
		$this->load->model('eventmodel3');
		$admin_id=1;
		$status="Entertained";
		$data['_event']=$this->eventmodel3->get_new_events($admin_id,$status);
		//print_r($data);
		//$status="Entertained";
		
		$this->load->view('event_requests',$data);
		$this->load->view('admin_common/admin_footer');
		$this->load->view('admin_common/event_modalid');
		
	}

	public function admin_event_detail(){
	$post=$this->input->post();
	$EventId=$post['id'];
	//echo $EventId;
	$this->load->model('eventmodel3');
	$ajx['result']=$this->eventmodel3->get_event_detail($EventId);
	if($ajx)
	//$result=(json_decode($result));
		//print_r($ajx);
		//return ('chk/get_awaiting_events') ;
	{ 
		//$this->load->view('Common_new/footer');

		$this->load->view('admin_common/admin_event_detail_modal',$ajx);
}
}
public function admin_enter_event_detail(){
	$post=$this->input->post();
	$EventId=$post['id'];
	//echo $EventId;
	$this->load->model('eventmodel3');
	$ajx['result']=$this->eventmodel3->get_event_detail($EventId);
	if($ajx)
	//$result=(json_decode($result));
		print_r($ajx); exit();
		//return ('chk/get_awaiting_events') ;
	{ 
		//$this->load->view('Common_new/footer');

		$this->load->view('admin_common/admin_event_detail_modal2',$ajx);

}

}
public function get_entertained_organiser(){
	$userID=1;
	$status="Approved";
	$this->load->model('eventmodel4');
	$data['result']=$this->eventmodel4->admin_pending_organisers($userID,$status);
	//print_r($data); exit();
	$this->load->helper('html');
		$this->load->view('admin_common/admin_header');
		$this->load->view('admin_common/admin_navigation');
	$this->load->view('admin_manage_organisers',$data);
	$this->load->view('admin_common/admin_footer');
	$this->load->view('admin_common/user_modalid');
}
public function get_pending_organiser(){
	$userID=1;
	$status="Pending";
	$this->load->model('eventmodel4');
	$data['result']=$this->eventmodel4->admin_pending_organisers($userID,$status);
	//print_r($result); exit();
	$this->load->helper('html');
		$this->load->view('admin_common/admin_header');
		$this->load->view('admin_common/admin_navigation');
	$this->load->view('admin_manage_organisers',$data);
	$this->load->view('admin_common/admin_footer');
	$this->load->view('admin_common/user_modalid');
		

}
public function user_detail(){
	$post=$this->input->post();
	$userId=$post['id'];
	$this->load->model('eventmodel4');
	$ajx['result']=$this->eventmodel4->get_user_detail($userId);
	if($ajx)
	//$result=(json_decode($result));
		//print_r($ajx);
		//return ('chk/get_awaiting_events') ;
	{ 
		//$this->load->view('Common_new/footer');

		$this->load->view('admin_common/user_detail_modal',$ajx);
}
	
}
public function get_organization(){
 $this->load->helper('html');
		$this->load->view('admin_common/admin_header');
		$this->load->view('admin_common/admin_navigation');
		$this->load->model('eventmodel4');
		$data['result']=$this->eventmodel4->get_all_organisation();
		$this->load->view('manage_organisation',$data);
		$this->load->view('admin_common/admin_footer');
}
public function add_new_organization(){
	$post=$this->input->post();
	$orgName = $post['org'];
	if(empty($orgName))
		echo "plz enter organization name";
	
	//echo $orgName;
	else if(!empty($orgName)){
	$this->load->model('eventmodel4');
	$result=$this->eventmodel4->organisation_already_exists($orgName);
	//echo $result;
	if($result)
		echo "this organization already exists";
	else
	{
		$res=$this->eventmodel4->add_new_org($orgName);
		if($res)
			echo ($orgName);
		else
			echo "unable to insert organization";
	}
}
}
/*public function reject_user($orgId){
	$status="Rejected";
	$platform="Web";
	$this->load->model('eventmodel4');
	$this->eventmodel4->user_rejected($)
}*/
public function a(){
	echo "hello";
}
public function get_organisers(){
	 $this->load->helper('html');
		$this->load->view('admin_common/admin_header');
		$this->load->view('admin_common/admin_navigation');
	$this->load->model('eventmodel4');
	$data['result']=$this->eventmodel4->get_all_organizers();
	//print_r($data);exit();
	$this->load->view('report',$data);
	$this->load->view('admin_common/admin_footer');

}
public function reject_user($orgid){
	$status="Rejected";
	$platform="Web";
	$this->load->model('eventmodel4');
	$result=$this->eventmodel4->update_user_status($status,$platform,$orgid);
	if($result)
	 echo "Sorry your account has not been approved by Eventia plz try again";
	else "failed";

}
public function accept_user($orgid){
	$status="Approved";
	$platform="Web";
	$this->load->model('eventmodel4');
	$result=$this->eventmodel4->update_user_status($status,$platform,$orgid);
	if($result)
	
	echo "Congratulations your account has been approved by Eventia";
else "failed";
	//print_r($result); exit();
	/*$user_name=$result[0]->user_name;
	//echo $user_name;
	$email=$result[0]->email;
	//echo $email;
	 $this->load->library('email');
	  $this->email->from('info@infinitevisio.com', 'Attendo'); 
            $this->email->to($email); 
            $this->email->subject('Registeration');
            $this->email->message(' Congratulations your account has been approved by AttendO');  

            $this->email->send();*/


}

public function get_events(){
$post=$this->input->post();
	$orgID = $post['selectedValue'];
	//echo $orgID;
	$this->load->model('eventmodel4');
$res=$this->eventmodel4->get_organizer_events($orgID);
 echo json_encode($res);	
}
public function report_generation(){
	$eventID=392;
	$orgID=408;
	$this->load->model('eventmodel4');
	$result=$this->eventmodel4->get_report_data($eventID,$orgID);
	print_r($result);exit();


}
}