<?php
class Login extends CI_Controller{
	public function index(){
		if($this->session->userdata('users'))
		return redirect('chk');
		$this->load->view('login');

	} 
	public function a(){
		echo "hello";
	}
	public function org_login(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email',' Email', 'required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run())
		{ 
			
			$userID=$this->input->post('email');
			$password=$this->input->post('password');
			//echo"before";
			//echo $password;
			$this->load->model('loginmodel');
			$login_data=$this->loginmodel->login_valid($userID,md5($password));
			//echo"after";
		//echo md5($password);

			if($login_data)
			{
			   
		     
				
				$this->session->set_userdata('users',$login_data);
				 $this->load->helper('html');
	   // $this->load->view('all_events.php');
	     $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id;
	     $user_type=$orgID1[0]->utype;
	     //echo $user_type; exit();
	    // echo "<pre>";print_r($this->session->all_userdata());exit;
   
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
	   // echo "<pre>";print_r($_event]);
	   //echo "hello";
		//$event_types=$this->eventmodel->get_event_types();

	     // $this->load->view('checking',$data);
				
				//echo "<pre>";print_r($this->session->all_userdata());exit;
			}
			else{
				$this->session->set_flashdata('login_failed','Invalid email/password');
				return redirect('login');

			}
		}
		else
		
		$this->load->view('login.php');
	}


}
 