<?php
class Chk extends CI_Controller{
	public function index(){

	
	    $this->load->helper('html');
	    if($this->session->userdata('users'))
	    {
	     $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id;
	      $this->load->model('eventmodel');
	       $data['org']=$this->eventmodel->get_organisations();
	      $data['event_types']=$this->eventmodel->get_event_types();
	   $data['_event']=$this->eventmodel->get_all_event($orgID,'All');
	      $profile_data=$this->eventmodel->get_user_data($orgID);
	      $data['profile_data'] = $profile_data['0'];
	     // $this->load->view('checking',$data);

	   // $this->load->view('all_events.php');
	    // $orgID=$this->session->userdata('user_id');
	    // echo $orgID;
	   // echo "<pre>";print_r($_event);
		//$event_types=$this->eventmodel->get_event_types();

	      $this->load->view('Common_new/header');
          $this->load->view('Common_new/aside',$data);
         $this->load->view('Common_new/navigation',$data);
        //  $this->load->view('Common_new/modal');
        //  $this->load->view('Common_new/modal_detail');
	      $this->load->view('checking',$data);
	       $this->load->view('Common_new/modal',$data);
         // $this->load->view('Common_new/modal_detail2');

		//$this->load->view('create_event.php',['event_types'=>$event_types]);
	}
	else
		$this->load->view('login');
}
	public function get_aside_data(){
		 $this->load->helper('html');
		 if($this->session->userdata('users'))
	    {
	     $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id; 
	      $this->load->model('eventmodel');
	   $pdata['profile_data']=$this->eventmodel->get_user_data($orgID);
	   print_r($pdata);
	  
	  // $this->load->view('checking',$data);
}
	 }

	
public function get_future_events(){
	 $this->load->helper('html');
	    //$orgID=$this->session->userdata('user_id');
	    //echo $orgID;
	  if($this->session->userdata('users')){
	  $orgID1=$this->session->userdata('users');
    $orgID=$orgID1[0]->user_id;
	     $organization_ID = $orgID1[0]->organization_id;

	$this->load->model('eventmodel');
	 $data['org']=$this->eventmodel->get_organisations();
	 $data['event_types']=$this->eventmodel->get_event_types();
	$data['_event']=$this->eventmodel->get_future_events($organization_ID);
	//$this->load->view('checking',$data);
	 $profile_data=$this->eventmodel->get_user_data($orgID);
	      $data['profile_data'] = $profile_data['0'];
	       $this->load->view('Common_new/header');
          $this->load->view('Common_new/aside',$data);
          $this->load->view('Common_new/navigation',$data);
         
	      $this->load->view('checking',$data);
	       $this->load->view('Common_new/modalid2');
	       $this->load->view('Common_new/modal',$data);
         // $this->load->view('Common_new/modal_detail2',$data);

}
else
    $this->load->view('login');
	
}
public function get_past_events(){
	 $this->load->helper('html');
	 if($this->session->userdata('users')){

	  $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id;
	   // $orgID=$this->session->userdata('user_id');
	$this->load->model('eventmodel');
     $data['org']=$this->eventmodel->get_organisations();
	 $data['event_types']=$this->eventmodel->get_event_types();
	$data['_event']=$this->eventmodel->get_all_event($orgID,'Passed');
	//$this->load->view('checking',$data);
	 $profile_data=$this->eventmodel->get_user_data($orgID);
	      $data['profile_data'] = $profile_data['0'];
	        $this->load->view('Common_new/header');
          $this->load->view('Common_new/aside',$data);
          $this->load->view('Common_new/navigation',$data);
         
	      $this->load->view('past_events',$data);
	     // $this->load->view('Common_new/modalid');
	       $this->load->view('Common_new/modalid3');
	       $this->load->view('Common_new/modal',$data);
         // $this->load->view('Common_new/modal_detail2',$data);
}
else 
    $this->load->view('login');
}
public function a(){
	$post=$this->input->post();
	echo json_encode($post);
	echo $post['fname'];
	echo $post['lname'];
	echo"<pre>";print_r($post);
}
public function get_awaiting_events(){
	 $this->load->helper('html');
	
	  //  $orgID=$this->session->userdata('user_id');
	 if($this->session->userdata('users')){
	  $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id;
	    
	$this->load->model('eventmodel');
	 $data['org']=$this->eventmodel->get_organisations();
	$data['_event']=$this->eventmodel->get_all_event($orgID,'Requested');
	//print_r($data); exit();
	 $data['event_types']=$this->eventmodel->get_event_types();
	
	 $profile_data=$this->eventmodel->get_user_data($orgID);
	      $data['profile_data'] = $profile_data['0'];
	        $this->load->view('Common_new/header');
          $this->load->view('Common_new/aside',$data);
          $this->load->view('Common_new/navigation',$data);
          

	      $this->load->view('awaiting_events',$data);
	       $this->load->view('Common_new/modalid');
	      $this->load->view('Common_new/modal',$data);
         //$this->load->view('Common_new/modal_detail');

}
else $this->load->view('login');
}
public function logout(){
		$this->session->sess_destroy();
		//$this->session->sess_destroy();
		return redirect('login');
	}
	}