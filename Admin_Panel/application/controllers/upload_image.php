<?php
class Upload_image extends CI_Controller{
	public function index()
	{
		$this->load->helper('html');
		$this->load->view('image_upload');
		$this->load->view('Common_new/footer');
	}
	public function uploadImage(){
		$post=$this->input->post();
		print_r($post);exit();
		 $config=[
    'upload_path'=>'./pictures',
    'allowed_types' => 'jpg|gif|png|jpeg',
    ];
    $this->load->library('upload', $config);
     if($this->upload->do_upload()) {
       $data=$this->upload->data();
       $data1['up']=$data;
// print_r($data);
// print_r($data1);exit();
          
        //  $photo=$data['raw_name'];
           //echo $photo; exit(); 
        //  $photo1= $data['raw_name'].$data['file_ext'];
         //  $this->load->view('image_upload2',$data1);
           
	}
	else echo "unable to upload image";
}
}