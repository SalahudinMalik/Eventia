<?php
/**
* 
*/
class Organiser extends CI_Controller
{
	
	public function index($event_id){

	 $this->load->helper('html');
      $this->load->model('eventmodel2');
      $data['event_detail']=$this->eventmodel2->get_event_detail($event_id);
      //print_r($data);exit();
      if($data){
        $this->load->model('eventmodel');
         $data['event_types']=$this->eventmodel->get_event_types();

        $this->load->view('edit_event',$data);
      }
      else 
        echo"unable to get event detail";
    }
	
		/* $this->load->helper('html');
	    if($this->session->userdata('users'))
	    {
	     $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id;
	      $this->load->model('eventmodel');
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
           $this->load->view('checking',$data);
          $this->load->view('Common_new/modal');
         $this->load->view('Common_new/modal_detail');
	     // $this->load->view('checking',$data);

		//$this->load->view('create_event.php',['event_types'=>$event_types]);
	}
	else
		$this->load->view('login');
} */
    public function edit_event($event_id) {

    	$this->load->helper('html');
    	$this->load->model('eventmodel2');
    	$data['event_detail']=$this->eventmodel2->get_event_detail($event_id);
    	//print_r($data);exit();
    	if($data){
    		$this->load->model('eventmodel');
	       $data['event_types']=$this->eventmodel->get_event_types();

    		$this->load->view('edit_event',$data);
    	}
    	else 
    		echo"unable to get event detail";
    }
    public function update_event($event_id){
      $config=[
    'upload_path'=>'./pictures',
    'allowed_types' => 'jpg|gif|png|jpeg',
   // 'width'=>'20',
   // 'height'=>'20',
    ];
    $this->load->library('upload',$config);
   /* $this->load->library('form_validation');
    $this->form_validation->set_rules('event_name','Event Name', 'required');
    $this->form_validation->set_rules('location','Location','required');
    $this->form_validation->set_rules('date','Event Date','required');
    $this->form_validation->set_rules('Select_Event_name','Organisation','required');
    $this->form_validation->set_rules('cpd','CPD Points','required');
    $this->form_validation->set_rules('estimated_guests','Estimated Guests','required');
    $this->form_validation->set_rules('event_desc','Event Description','required');
    $this->form_validation->set_rules('web_url','Web URL','required');
    $this->form_validation->set_rules('start_time','Start Time','required');
    $this->form_validation->set_rules('end_time','End Time','required');
    
      $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
      if ($this->form_validation->run()){*/
          $post=$this->input->post();

          //print_r($post);
    $eventName            = $post['event_name'];
   $eventLoc              = $post['location'];
    $eventDate            = $post['date'];
    $noOfGuests           = $post['estimated_guests'];

    $startTime            = $post['start_time']; 
    $endTime              = $post['end_time'];
  
    $eventCategory        = $post['category'];
    $EventsType        = $post['Select_Event_name'];
    $cdpHrs              = $post['cpd'];
    $platform        ="web";
    $newDate = date("Y-m-d", strtotime($eventDate));
  
               unset($post['submit']);
            define("W",'WebURL');
            $description =$post['event_desc'].W.$post['web_url'];
        
          
          
    
            
               $this->load->model('eventmodel2');
                if($this->upload->do_upload()){
       $data=$this->upload->data();
       
           $photo=$data['raw_name'];
           $image_path=("pictures/".$data['raw_name'].$data['file_ext']);
          $this->eventmodel2->update_photo($image_path,$event_id);

         } 
      
         if(!empty($EventsType)) {
              $eventtype_id1= $this->eventmodel2->get_event_id($EventsType);
             $eventtype_id= $eventtype_id1[0]->event_type_id;
          
              
              
         if($eventtype_id){
          $this->eventmodel2->update_event_type($eventtype_id,$event_id);
        
         }
       }
         
         
        $result= $this->eventmodel2->check_duplicate($eventName,$event_id);
       // print_r($result);exit();
        if($result)
         // echo "this event name already exists";
        {
           $this->session->set_flashdata('feedback', 'this event name already exists');
        $this->session->set_flashdata('feedback-class','alert-danger');
           return redirect('organiser/organiser/edit_event/' . $event_id . '');
          //  header('Refresh: 1; url=edit_event.php');
  
         
        }
        else{
         $result= $this->eventmodel2->update_event($eventName, $eventLoc,$startTime ,$endTime,$description,$newDate,$noOfGuests,$cdpHrs,$eventCategory,$platform,$event_id);
        
       if($result)
      //  echo"event updated successfully";
         {
           $this->session->set_flashdata('feedback1', 'event updated successfully');
        $this->session->set_flashdata('feedback-class','alert-success');
              return redirect('organiser/organiser/edit_event/' . $event_id . '');
  
         
        }
      else 
       // echo "updation failed";
      {
         $this->session->set_flashdata('feedback', 'event updation failed');
        $this->session->set_flashdata('feedback-class','alert-danger');
              return redirect('organiser/organiser/edit_event/' . $event_id . '');
      }

    
    } 
  

   // else echo"validation failed";
  }
  public function delete_awaiting_event($event_id){
  $this->load->model('eventmodel2');
    $result=$this->eventmodel2->event_delete($event_id);
    if($result)
     // echo "event deleted successfully";
      return redirect ('chk/get_awaiting_events');
    else 
      echo "failed to delete event";
  }
  public function delete_event($event_id){
    $this->load->model('eventmodel2');
    $result=$this->eventmodel2->event_delete($event_id);
    if($result)
     // echo "event deleted successfully";
      return redirect ('chk/get_past_events');
    else 
      echo "failed to delete event";
  }
  public function delete_future_event($event_id){
     $orgID1=$this->session->userdata('users');
    $orgID=$orgID1[0]->user_id;
  
    $this->load->model('eventmodel2');
   $org_id1= $this->eventmodel2->get_orgID($event_id);
   $org_id=$org_id1[0]->org_id;
   if(strcmp($orgID, $org_id)==0)
   {
     $result=$this->eventmodel2->event_delete($event_id);
    
    if($result)
     // echo "event deleted successfully";
        return redirect ('chk/get_future_events');
    else 
      echo "failed to delete event";

   }
   else
    echo"Sorry you don't have rights to delete is event";
  }

	
	public function store_event(){

  
		$config=[
		'upload_path'=>'./pictures',
		'allowed_types' => 'jpg|gif|png|jpeg',
   // 'width'=>'20',
   // 'height'=>'20',
		];
		$this->load->library('upload',$config);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('event_name','Event Name', 'required');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('date','Event Date','required');
	//	$this->form_validation->set_rules('Select_Event_name','Organisation','required');
		$this->form_validation->set_rules('cpd','CPD Points','required');
		$this->form_validation->set_rules('estimated_guests','Estimated Guests','required');
	//	$this->form_validation->set_rules('event_desc','Event Description','required');
	//	$this->form_validation->set_rules('web_url','Web URL','required');
		$this->form_validation->set_rules('start_time','Start Time','required');
		$this->form_validation->set_rules('end_time','End Time','required');
		
    	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    	if ($this->form_validation->run()) {
    			$post=$this->input->post();
    		//	print_r($post); exit();
    $eventName            = $post['event_name'];
   $eventLoc              = $post['location'];
    $eventDate            = $post['date'];
    $noOfGuests	          = $post['estimated_guests'];
    $startTime            = $post['start_time']; 
    $endTime              = $post['end_time'];
   
    $eventCategory        = $post['category'];
    $EventsType        = $post['Select_Event_name'];
    $cdpHrs              = $post['cpd'];
    $platform        ="web";
    if(!empty($post['checkboxvar']))
    $org_names=$post['checkboxvar'];
  else
    $org_names="";
  // print_r($org_names); exit();
    //foreach($org_names as $name){
    //echo $name; 
    
    //$i++;
//}

    
    // echo $post['new_event_type']; exit();
  // print_r($org_names); exit();
               

               //echo date('Y-m-d'); exit();
			         unset($post['submit']);
                $newDate = date("Y-m-d", strtotime($eventDate));
             //   $r=strcmp(date('Y-m-d',$newDate));
              //  echo $r; exit();

	 if($this->session->userdata('users'))
	    {
	     $orgID1=$this->session->userdata('users');
	     $orgID = $orgID1[0]->user_id;

   }
   //echo"orgid";
  // echo $orgID;
	//$orgID=257;
   $adminID	=1;

		if($this->upload->do_upload()) {
			 $data=$this->upload->data();
	         $photo=$data['raw_name'];
	       //  echo $photo;exit();

	         //Concatenation of web url and event description
	        
           $image_path=("pictures/".$data['raw_name'].$data['file_ext']);
           
         } 
         else
          $image_path="";

          /*  if(!empty($post['web_url']))
              $web_url=$post['web_url'];
            else 
              $web_url='';
            if(!empty($post['event_desc']))
              $description1=$post['event_desc'];
            else
              $desrciption1='';

            define("W",'WebURL');
            $description =$desrciption1.W.$web_url;*/
             define("W",'WebURL');
            $description =$post['event_desc'].W.$post['web_url'];

 
        
        $this->load->model('eventmodel2');

         $result= $this->eventmodel2->check_event_already_exist($eventName); 
         if($result)
         // return redirect('organiser/organiser');
   {
          echo "event already exists"; exit();
        }
  
    if(empty($post['Select_Event_name'])){
     $EventsType=$post['new_event_type'];
    // echo "hello";}
   
     $result=$this->eventmodel2->event_type_already_exists($EventsType);
     if($result){
       
     // echo"org already exist"; exit();
       // $this->session->set_flashdata('feedback',"Event type already exists");
         //  $this->session->set_flashdata('feedback-class','alert-success');
           echo"this event type already exists"; exit();
           // return redirect('organiser/organiser');
    }
     else {

     // echo $organisation;
      $event_typeid=$this->eventmodel2->add_new_event_type($EventsType);
  }
}
else{
 $r =$this->eventmodel2->get_event_id($EventsType);
      //print_r($post);
   $event_typeid = $r[0]->event_type_id; 
}
//echo $photo; exit();
$result=$this->eventmodel2->add_event($eventName, $eventLoc,$startTime ,$endTime,$description,$EventsType,$newDate,$noOfGuests,$cdpHrs,$eventCategory,$orgID,$adminID,$event_typeid, $image_path,$platform,$org_names);
        if($result)
        	//print_r($result);
        //	return redirect('chk/get_awaiting_events');
         { 
          echo "event created successfully"; 
         // return redirect('chk/get_awaiting_events');
     }
        else echo"Event is not created";
      

     // echo $org_id;'
    }
    else {
    	echo "validation failed";
    }

    }
   // else if (!empty($EventsType)){

    }
  