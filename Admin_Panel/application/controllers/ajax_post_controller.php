<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_Post_Controller extends CI_Controller {

// Show view Page
public function index(){
$this->load->view("ajax_post_view");
}

// This function call from AJAX
public function user_data_submit() {
   //print_r($_POST);
  //  print_r($_FILES);
   // exit();
$userID=408;
 $config=[
    'upload_path'=>'./pictures',
    'allowed_types' => 'jpg|gif|png|jpeg',
    ];
    $this->load->library('upload',$config);
    $post=$this->input->post();
    $fname=$post['first'];
    $lname=$post['last'];
    $name=$post['middle'];
    $this->load->model('eventmodel3');
    ($this->upload->do_upload());
       $data=$this->upload->data();
         //print_r($data); exit();
           $photo=$data['raw_name'];
           $image_path=("pictures/".$data['raw_name'].$data['file_ext']);
             print_r($post); 
             print_r($data);
            // print_r($_FILES);
             exit();
        //  $this->eventmodel3->update_user_photo($image_path,$userID);
         
         
        // else
         //	echo "empty image"; exit();

}
}