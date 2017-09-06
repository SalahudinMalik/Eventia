<?php
class Onsight_reg_new extends CI_Controller{
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
         $this->load->view('onsight_new',$data);
	       $this->load->view('Common_new/modal',$data);

	      // $this->load->view('Common_new/guest_modal',$data);
	      //$this->load->view('onsite_register',$data);

	    // print_r($result); exit();
	       


	}
}
}