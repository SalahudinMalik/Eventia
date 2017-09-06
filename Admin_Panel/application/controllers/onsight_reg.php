<?php
class Onsight_reg extends CI_Controller{
	//public $eventID="ploki";
	public function index(){
		$this->load->helper('html');
		if($this->session->userdata('users'))
	    {
	     $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id;
	     $organID=$orgID1[0]->organization_id;

	      $this->load->model('eventmodel');
	      $data['org']=$this->eventmodel->get_organisations();
	      $this->load->model('eventmodel3');
	      $data['result']= $this->eventmodel3->onsite_event_listing($organID);
	     // $r=$result[0]->event_name;
	      //echo $r;exit();
	      // print_r($result); exit();

	     
	     // print_r($data); exit();
	       $data['event_types']=$this->eventmodel->get_event_types();
	       $profile_data=$this->eventmodel->get_user_data($orgID);
	      $data['profile_data'] = $profile_data['0'];
	       $this->load->view('Common_new/header');
          $this->load->view('Common_new/aside',$data);
         $this->load->view('Common_new/navigation',$data);
         $this->load->view('onsite_register',$data);
	       $this->load->view('Common_new/modal',$data);

	       $this->load->view('Common_new/guest_modal',$data);
	      //$this->load->view('onsite_register',$data);

	    // print_r($result); exit();
	       


	}
}
public function add_new_guest(){
	
	$config=[
		'upload_path'=>'./pictures',
		'allowed_types' => 'jpg|gif|png|jpeg',
		];
			$this->load->library('upload',$config);
		   $this->load->library('form_validation');
		   $this->form_validation->set_rules('first_name','First Name', 'required');
		   $this->form_validation->set_rules('last_name','Last Name', 'required');
           $this->form_validation->set_rules('email','Email', 'required');
         //  $this->form_validation->set_rules('Select_organization','Select_Organization', 'required');
            $this->form_validation->set_rules('phone','Phone', 'required');
            	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    	if ($this->form_validation->run()) {
    		$post=$this->input->post();
    		//print_r($post); exit();
    			//print_r($post);
    $firstName            = $post['first_name'];
   $lastName              = $post['last_name'];
   $userName             = $post['user_name'];
   $profession            = $post['profession'];
   $address               =$post['address'];
    $email                = $post['email'];
    $organisation	      = $post['Select_Organization'];
    $phone                = $post['phone']; 
    $cpdHrs               =0;
    $platform             ="web";
    $adminID              =1;
    $status               ="";
    $deviceID             ="";
    $password             ="";
    if($this->session->userdata('eventid')){
		$eventID=$this->session->userdata('eventid');
		
	}
    if($this->upload->do_upload()) {
			 $data=$this->upload->data();
	         $photo=$data['raw_name'];
	        // echo $photo;exit();

	         //Concatenation of web url and event description
	        
           $image_path=("pictures/".$data['raw_name'].$data['file_ext']);
           
         } 
         else
          $image_path="pictures/NoImage.png";
      $this->load->model('eventmodel');
      $r =$this->eventmodel->get_org_id($organisation);
      //print_r($post);
   $org_id = $r[0]->organization_id; 

     $this->load->model('eventmodel3');
     $result=$this->eventmodel3->chk_email($email);
     if($result){
     	echo"this email has already been registered";
     }
     else
     { 
     	$result1=$this->eventmodel3->add_new_guest($firstName,$lastName,$userName,$profession,$address,$email,$org_id,$phone,$image_path,$platform, $adminID,$cpdHrs,$eventID,$status,$deviceID ,$password);
     	if($result1){
     		 $this->load->library('email');
            $this->email->to($email); 
            $this->email->subject('Registeration');
            $this->email->message('Thanks for registering with AttendO.  Go to AttendO.com.au for assistance and contact information');  

            $this->email->send();
            echo"Thanks for registering with AttendO.  Go to AttendO.com.au for assistance and contact information";
     	}
     	else echo "Could not register the user. Please try again later.";
     }

    	}
     else echo "validation failed plz enter data in the required fields";

}
public function get_existing_guests(){
	if($this->session->userdata('users'))
	{
		 $orgID1=$this->session->userdata('users');
		  $organID=$orgID1[0]->organization_id;
	}
	if($this->session->userdata('eventid')){
		$eventID=$this->session->userdata('eventid');
		
	}
//echo $eventID; exit();
   
	//$post=$this->input->post();
    			//print_r($post);
   // $eventName = $post['selectedValue'];
	//echo $id;exit;
     $this->load->model('eventmodel3');
   // $event=$this->eventmodel3->get_event_id($eventName);
     // $this->load->model('eventmodel');
     // $data['org']=$this->eventmodel->get_organisations();
   // $eventID=$event[0]->event_id;
   $res=$this->eventmodel3->get_existing_guest_list($organID,$eventID);
 // print_r($data); 
   echo json_encode($res);
    //$this->load->view('Common_new/guestmodelid');
     // $this->load->view('Common_new/guest_modal',$data);


}
public function get_user_detail(){
	echo"hello";
$post=$this->input->post();	
$userID=$post['id'];
echo $userID; exit;
}
public function get_selected_value(){
	$post=$this->input->post();
    			//print_r($post);
    $eventName = $post['selectedValue'];
    if($this->session->userdata('users'))
	    {
	     $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id;
	 }

   
    $this->load->model('eventmodel3');
    $event=$this->eventmodel3->get_event_id($eventName);
   // echo $this->$eventID; exit();
 $eventID=$event[0]->event_id;
 $this->session->set_userdata('eventid',$eventID);
 //echo($this->session->userdata('eventid')); exit();
//$this->eventID="hi"; exit();
 // echo $this->eventID; exit();
  // $this->get_existing_guests($eventID);
    //echo $eventID;exit();
   // print_r($event); exit();

    $res=$this->eventmodel3->get_registered_guests($eventID);
   
    echo json_encode($res);

   // echo json_encode($res);
    //if($res!="") {
   // print_r($res); exit();
   


  
}
}