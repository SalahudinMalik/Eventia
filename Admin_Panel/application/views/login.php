 <?php include_once('common/header.php');?>
  <body>
    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-offset-3 col-sm-6">
            <div class="card card-signup">
            <?php echo form_open('login/org_login');?>
              <form action="">
                <div class="header header-primary text-center">
                  <h4>Login</h4>
                </div>
    
                <p class="text-divider">Enter Your Credentails Below</p>
                 <?php if($error=$this->session->flashdata('login_failed')): ?>
              
          <div class="form-group">
            <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?= $error ?>
  </div>
  </div>
  
  <?php endif;?>
   <?php if($error=$this->session->flashdata('feedback1')): ?>
              
          <div class="form-group">
            <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?= $error ?>
  </div>
  </div>
  
 <?php endif;?>
   <?php if($error=$this->session->flashdata('feedback')): ?>
              
          <div class="form-group">
            <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?= $error ?>
  </div>
  </div>
  
  <?php endif;?>


                <div class="content">
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="material-icons">mail</i></span>
                      <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Your Email']);?><span class="material-icons form-control-feedback">clear</span>
                    </div>
                  </div>
                  <div class="form-group">
                  <?php echo form_error('email');?>
                  </div>
                  <div class="form-group" >
                    <div class="input-group"><span class="input-group-addon"><i class="material-icons">lock_outline</i></span>
                       <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>' Your PassWord']);?><span class="material-icons form-control-feedback">clear</span>
                    </div>
                  </div>
                   
                   	<div class="form-group">
                  <?php echo form_error('password');?>
                  </div>
                   
                  <div class="footer text-center"><?php echo form_submit(['name'=>'submit', 'value'=>'Get Started','class'=>'btn btn-primary btn-lg']);?></div>
                    <a href="<?php echo base_url()?>profile"><span class="icon"><i class="material-icons">update</i></span>Sign Up</a>
                    <a href="http://localhost/GuestPanel/" style = "float: right;"><span class="icon"><i class="material-icons"></i></span>Guest User</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     
    <?php include_once('common/footer.php');?>