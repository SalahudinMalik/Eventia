<?php
class Ajax_check extends CI_Controller{
	public function index(){
		$this->load->view('ajax_id');
		
	}
	public function store_div_data() {
$post= $this->input->post();

$v=$post['id'];
echo 'div'.$v;
//$id1=$this->eventmodel3->checkfunction($fname);
//$id= $id1[0]->user_id;  echo $id;

}
public function update_profile(){
	
	 $config=[
    'upload_path'=>'./pictures',
    'allowed_types' => 'jpg|gif|png|jpeg',
    ];
    $this->load->library('upload',$config);

	if($this->session->userdata('users'))
	    {
	     $uID1=$this->session->userdata('users');
	     $userID = $uID1[0]->user_id;
	$post=$this->input->post();
	$firstName	        = $post['fname'];
	$lastName	        = $post['lname'];
	//$userID		        =$post['member_no'];
	$profession        	= $post['job_title'];
	$address	        = $post['address'];
	$phone        		= $post['phone'];
	//$photo  		    = $post['photo'];
	//$organisation       =$post['org'];
	//$userID			= $_REQUEST['user_id'];
	$platform		= "web"; //IOS or ANDROID
	//$deviceID		= $_REQUEST['device_id'];
	//$organizationID		= $_REQUEST['organization_id'];
	//$cpdHrs			= $_REQUEST['cpd_hrs'];
	$this->load->model('eventmodel3');
    if($this->upload->do_upload()){
       $data=$this->upload->data();
       
           $photo=$data['raw_name'];
           $image_path=("pictures/".$data['raw_name'].$data['file_ext']);
          //  echo $image_path; exit;
          $this->eventmodel3->update_user_photo($image_path,$userID);
         
         }
       //  else
         //	echo "empty image"; exit();

         

	$result=$this->eventmodel3->update_user_profile($firstName,$lastName,$userID,$profession,$address,$phone,$platform);
	
		if($result)
		{
			
			echo"profile updated successfully";
		}
		else echo "profile updation failed";

}
}
public function event_detail(){
	$post=$this->input->post();
	$EventId=$post['id'];
	//echo $EventId;
	 $ajx['session']=$this->session->userdata('users');
	// $fname = $orgID1[0]->first_name;
	$this->load->model('eventmodel3');
	$ajx['result']=$this->eventmodel3->get_event_detail($EventId);
	
	if($ajx)
	{
	//$result=(json_decode($result));
	//	print_r($ajx); exit;
		//return ('chk/get_awaiting_events') ;
	
		//$this->load->view('Common_new/footer');
		
        
		$this->load->view('Common_new/modal_detail',$ajx);
}

}
public function past_event_detail(){
	$post=$this->input->post();
	$EventId=$post['id'];
	//echo $EventId;
	 $ajx['session']=$this->session->userdata('users');
	$this->load->model('eventmodel3');
	$ajx['result']=$this->eventmodel3->get_event_detail($EventId);
	if($ajx)
	//$result=(json_decode($result));
		//print_r($ajx);
		//return ('chk/get_awaiting_events') ;
	{ 
		//$this->load->view('Common_new/footer');

		$this->load->view('Common_new/modal_detail3',$ajx);
}

}
public function future_event_detail(){
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

		$this->load->view('Common_new/modal_detail2',$ajx);
}

}
}