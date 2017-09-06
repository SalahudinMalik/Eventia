<?php
class Profile extends CI_Controller{
	public function index(){

		 $this->load->helper('html');
	   
	   $this->load->model('eventmodel');
	   $event_types=$this->eventmodel->get_organisations();
     //  echo"hello";
	   // print_r($org);
		$this->load->view('org_profile',['event_types'=>$event_types]);

	}
    public function store_profile(){
      $config=[
    'upload_path'=>'./pictures',
    'allowed_types' => 'jpg|gif|png|jpeg',
    ];
    $this->load->library('upload',$config);
     $this->load->library('form_validation');
    $this->form_validation->set_rules('f_name','First Name', 'required');
   // $this->form_validation->set_rules('l_name','Last Name','required');
    $this->form_validation->set_rules('email','Email','required');
    //$this->form_validation->set_rules('org_name','Organisation','required');
    $this->form_validation->set_rules('user_name','User Name','required');
    $this->form_validation->set_rules('pswrd','Password','required');
    $this->form_validation->set_rules('profession','Profession','required');
    $this->form_validation->set_rules('address','Address','required');
     $this->form_validation->set_rules('phone','Phone','required');

      $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        if ($this->form_validation->run()) {
      # code...
      $post=$this->input->post();
    $firstName           = $post['f_name'];

    $userName            = $post['user_name'];
    $password            = $post['pswrd'];
    $uType               = "Organizer";
    $toemail               = $post['email']; 
    $profession          = $post['profession'];
    $address             = $post['address'];
    $phone               = $post['phone'];
    $organisation        = $post['select_org'];
    // $photo              = ['photo'];
     $platform           = 'web';
   // $deviceID           = $_REQUEST['device_id']; //IOS or ANDROID
    $cpdHrs   = 0;
   // echo $organisation;
    if(!empty($post['l_name']))
    $lastName = $post['l_name'];
  else $lastName='';
   
   $this->load->model('eventmodel');
   //echo "<pre>";print_r($post);exit;
   if(empty($post['select_org']) && (empty($post['new_event_type'])))
   {
     $this->session->set_flashdata('feedback',"Select or type organisation name");
            $this->session->set_flashdata('feedback-class','alert-danger');
            return redirect('profile');
   }
   if(empty($post['select_org'])) {
      $organisation=$post['new_event_type'];
    
      // $AllOrg=$this->eventmodel->get_organisations();
    $exist=$this->eventmodel->organisation_already_exists($organisation);
   // echo $exist; 

    if(!empty($exist)){
      $this->session->set_flashdata('feedback', 'Organisation already exists');
        $this->session->set_flashdata('feedback-class','alert-danger');
            return redirect('profile');
    }

     else {
     // echo $organisation;
      $org_id=$this->eventmodel->add_organisation($organisation);
     // echo $org_id;
    }
  }
  else{
    $r =$this->eventmodel->get_org_id($organisation);
      //print_r($post);
   $org_id = $r[0]->organization_id; 

  }
   $result=$this->eventmodel->already_exist($toemail,$userName);
       if($result){
        $this->session->set_flashdata('feedback',"This User name/email has already been registered");
            $this->session->set_flashdata('feedback-class','alert-danger');
            return redirect('profile');
          //  return redirect ('profile/index');
          } 
          else{

      unset($post['submit']);
  
            if($this->upload->do_upload()) {
       $data=$this->upload->data();
           $photo=$data['raw_name'];
        
          
           $image_path=("pictures/".$data['raw_name'].$data['file_ext']);
         } 
         else
          $image_path="";

       // echo $image_path; exit(); 
  
  

             //$org_id =$this->eventmodel->get_org_id($organisation);
           $status = strcmp($uType, "Organizer") == 0 ? "Pending" : "Approved";
           $adminID = strcmp($uType, "Organizer") == 0 ? "1" : "0";
       // echo $org_id;
         $rs=$this->eventmodel->insert_into_user_table($firstName,$lastName,$userName,$toemail,$password,$uType,$profession,$address,$phone,$image_path,$org_id,$platform,$adminID,$status,$cpdHrs);
        // print_r($rs); exit();
           $AdminEmail = $rs[0]->email;
            $pendingCount = $rs[0]->pending_count;
          
        // echo $AdminEmail;exit();
         if($AdminEmail)
           {
              
          /* $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'info@infinitevisio.com',
    'smtp_pass' => 'xxx',
    'mailtype'  => 'text', 
    'charset'   => 'iso-8859-1'
);*/

          //  $config['validation'] = TRUE; // bool whether to validate email or not      

           // $this->email->initialize($config);

           // echo $toemail; exit();
            $this->load->library('email');
             $this->email->from('info@infinitevisio.com', 'Attendo'); 
            $this->email->to($toemail); 
            $this->email->subject('Registeration');
            $this->email->message('Your email has been sent for approval. We will be get back to you soon.Thanks,Attendo Team');  

            $this->email->send();
           /*  if($this->email->send())
            {
              echo " user email send successfully";
              
            }
              else
              {  echo " user email sending error";
              
            }*/
            //Email to admin
             $this->email->from('info@infinitevisio.com', 'Attendo'); 
            $this->email->to($AdminEmail); 
            $this->email->subject('Approval');
            $this->email->message('.$userName." has been resgistered and waiting for your approval. Total pending requests are ".$pendingCount."');  

            $this->email->send();
          /*  if($this->email->send())
            {
              echo " admin email send successfully";
              exit();
            }
              else
              {  echo " admin email sending error";
              exit();
            }*/
          $this->session->set_flashdata('feedback1',"Registered Successfully");
            $this->session->set_flashdata('feedback-class','alert-success');
            return redirect ('login');
           // echo "registration successful";
          }
          else{
            $this->session->set_flashdata('feedback',"Registeration failed");
            $this->session->set_flashdata('feedback-class','alert-danger');
            return redirect ('login');
           // echo "registration failed";

          }
          }

  }

  else{
     $this->session->set_flashdata('feedback', 'plz enter data in the required fields');
        $this->session->set_flashdata('feedback-class','alert-danger');
            return redirect('profile');
  
  }

} 
}

	/*public function store_profile(){
		$config=[
		'upload_path'=>'./uploads',
		'allowed_types' => 'jpg|gif|png|jpeg',
		];
		$this->load->library('upload',$config);
		 $this->load->library('form_validation');
		$this->form_validation->set_rules('f_name','First Name', 'required');
		$this->form_validation->set_rules('l_name','Last Name','required');
		$this->form_validation->set_rules('email','Email','required');
		//$this->form_validation->set_rules('org_name','Organisation','required');
		$this->form_validation->set_rules('user_name','User Name','required');
		$this->form_validation->set_rules('pswrd','Password','required');
		$this->form_validation->set_rules('profession','Profession','required');
		$this->form_validation->set_rules('address','Address','required');
    	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    	//if($this->upload->do_upload())
    	//	echo "upload successfully";
  
		if ($this->form_validation->run()) {
			# code...
			$post=$this->input->post();
    $firstName           = $post['f_name'];
    $lastName            = $post['l_name'];
    $userName            = $post['user_name'];
    $password            = $post['pswrd'];
    $uType               = $post['org'];
    $email               = $post['email']; 
    $profession          = $post['profession'];
    $address             = $post['address'];
    $phone               = $post['phone'];
    $organisation        = $post['select_org'];
    // $photo              = ['photo'];
     $platform           = 'web';
   // $deviceID           = $_REQUEST['device_id']; //IOS or ANDROID
    $cpdHrs   = 0;
   // echo $organisation;
   $this->load->model('eventmodel');
   //echo "<pre>";print_r($post);exit;
    if(empty($post['select_org'])) {
    	$organisation=$post['new_event_type'];
       $AllOrg=$this->eventmodel->get_organisations();
     foreach ($AllOrg as $Org) {
      if(strcmp($Org->organization_name,$organisation)==0)
        $exist=1;
      else 
        $exist=0;
       # code...
     }  


     if($exist==1) {
    //  echo"org already exist"; exit();
        $this->session->set_flashdata('feedback',"Organisation already exists");
            $this->session->set_flashdata('feedback-class','alert-success');
            return redirect('profile');
    }
     else {
     // echo $organisation;
      $org_id=$this->eventmodel->add_organisation($organisation);
     // echo $org_id;
    }
  }
  
    else 
    { 
    	$r =$this->eventmodel->get_org_id($organisation);
			//print_r($post);
   $org_id = $r[0]->organization_id; 
 }
   // echo$org_id;
			 $this->upload->do_upload();
			unset($post['submit']);
			//print_r($post);
			// echo"hello";
			 $data=$this->upload->data();
		//	echo "<pre>";
		//	print_r($data);
			$photo=$data['raw_name'];
			//$image_path=base_url("uploads/".$data['raw_name'].$data['file_ext']);
			//echo "$image_path";
  $image_name = "uploads/pictures/".date('YmdHis') . ".png";
        file_put_contents($image_name , base64_decode($photo)); 
       // echo $image_name;
        
        $email=$post['email'];
        $userName=$post['user_name'];
        $this->load->model('eventmodel');
       $result=$this->eventmodel->already_exist($email,$userName);
       if($result){
       	$this->session->set_flashdata('feedback',"This User name/email has already been registered");
          	$this->session->set_flashdata('feedback-class','alert-success');
            return redirect('login');
          //	return redirect ('profile/index');
          } 


		
        else{
        	 //$org_id =$this->eventmodel->get_org_id($organisation);
        	 $status = strcmp($uType, "Organizer") == 0 ? "Pending" : "Approved";
           $adminID = strcmp($uType, "Organizer") == 0 ? "1" : "0";
       // echo $org_id;
         $rs=$this->eventmodel->insert_into_user_table($firstName,$lastName,$userName,$email,$password,$uType,$profession,$address,$phone,$image_name,$org_id,$platform,$adminID,$status,$cpdHrs);
        // print_r($rs); exit();
           $AdminEmail = $rs[0]->email;
            $pendingCount = $rs[0]->pending_count;
          
        // echo $AdminEmail;exit();
         if($AdminEmail)
           {
           	$this->load->library('email');
           	$this->email->to($email); 
           	$this->email->subject('Registeration');
            $this->email->message('Your email has been sent for approval. We will be get back to you soon.Thanks,Attendo Team');	

            $this->email->send();
            //Email to admin

            $this->email->to($AdminEmail); 
            $this->email->subject('Approval');
            $this->email->message('.$userName." has been resgistered and waiting for your approval. Total pending requests are ".$pendingCount."');  

            $this->email->send();

        	$this->session->set_flashdata('feedback',"Registered Successfully");
          	$this->session->set_flashdata('feedback-class','alert-success');
          	return redirect ('login');
           // echo "registration successful";
          }
          else{
          	$this->session->set_flashdata('feedback',"Registeration failed");
          	$this->session->set_flashdata('feedback-class','alert-danger');
          	return redirect ('login');
           // echo "registration failed";

          }

		} 
    } 
		 

		 //else {
			# code
     // return redirect('profile');
		//	$this->load->helper('html');
		//	 $this->load->model('eventmodel');
			// $display_errors=$this->upload->display_errors();
	  // $data['event_types']=$this->eventmodel->get_event_types();
		//	$data['upload_errors']=$this->upload->display_errors();
			//echo $display_errors;
			//$this->load->view('org_profile',compact('display_errors'));
		//}

		
		
      }
  }
     /* public function update_profile(){
      //	$this->load->library('form_validation');
		//$this->form_validation->set_rules('member_no',' Member No', 'required');
      	$this->load->helper('html');
      	if($this->session->userdata('users'))
	    {
	     $orgData=$this->session->userdata('users');
	     $this->load->view('awaiting_event',compact($orgData));
      }*/
     
