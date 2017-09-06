
 <?php include_once('Common_new/header.php');?>

 
  <section id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="profile-sidebar">
                  <div class="profile-userpic"><img id="pic" src="#" alt="" class="img-responsive" /></div>
                  <div class="profile-usertitle">
                    <div class="profile-usertitle-name">John Doe</div>
                    <div class="profile-usertitle-job">Organiser</div>
                  </div>
                </div>
              </div>
            </div>
             <?php echo form_open_multipart('profile/store_profile');?>
              <?php if($error=$this->session->flashdata('feedback')): ?>
            
          <div class="form-group">
            <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?= $error ?>
  </div>
  </div>
  
  <?php endif;?>
            <div class="col-md-9">  
              <div class="card">
                <div class="content">
                   
  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                       <!-- <label for="photo">Upload Image </label>-->
                       
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">add_a_photo</i></span>
                          <!--  <input id="inputFile3" type="file" multiple="">-->
                          
                            <?php echo form_upload(['name'=>'userfile','class'=>'form-control','placeholder'=>'Upload Image','onchange'=>'readURL(this)']);?><span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                          <div class="form-group">
                        <?php if(isset($display_errors)) echo $display_errors;?>
                        </div>
                        
                    
                                             
                        
                        <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                            <?php echo form_input(['name'=>'f_name','class'=>'form-control','placeholder'=>'First Name']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                        <div class="form-group">
                        <?php echo form_error('f_name');?>
                        </div>
                        <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                            <?php echo form_input(['name'=>'l_name','class'=>'form-control','placeholder'=>'Last Name']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                         <div class="form-group">
                        <?php echo form_error('l_name');?>
                        </div>
                         <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                            <?php echo form_input(['name'=>'user_name','class'=>'form-control','placeholder'=>'User Name']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                        <div class="form-group">
                        <?php echo form_error('user_name');?>
                        </div>
                        <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">email</i></span>
                            <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                         <div class="form-group">
                        <?php echo form_error('email');?>
                        </div>
                         <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                            <?php echo form_input(['name'=>'pswrd','class'=>'form-control','placeholder'=>'Password']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                        <div class="form-group">
                        <?php echo form_error('pswrd');?>
                        </div>
                         <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                            <?php echo form_input(['name'=>'profession','class'=>'form-control','placeholder'=>'Profession']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                        <div class="form-group">
                        <?php echo form_error('profession');?>
                        </div>
                         <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                            <?php echo form_input(['name'=>'address','class'=>'form-control','placeholder'=>'Address']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                        <div class="form-group">
                        <?php echo form_error('address');?>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">event</i></span>
                          
                             <?='<select class="form-control" name="select_org" >'.'<option value="">Select an Organization</option>';
                            foreach ($event_types as $types) {
                               echo "<option value='" . $types->organization_name ."'>" . $types->organization_name ."</option>";
                             }
                             echo "</select>"; ?><span class="input-group-btn">
                              <button id="add-org" type="button" class="btn btn-primary btn-raised">Other</button>
                       </span>
                        </div>
                        </div>
                        <div class="form-group add-org">
                    <div class="input-group"><span class="input-group-addon"><i class="material-icons">info</i></span>
                    <?php echo form_input(['name'=>'new_event_type','class'=>'form-control','placeholder'=>'Organization Name']);?>
                    
                    </div>
                  </div>
                        <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">phone</i></span>
                           <?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Phone']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                         <div class="form-group">
                        <?php echo form_error('phone');?>
                        </div>
                        <div class="footer text-center">
                           <?php echo form_submit(['name'=>'event_submit', 'value'=>'Save','class'=>'btn btn-primary  text-center btn-raised btn-lg']);?>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       </main>
        <?php include_once('Common_new/footer.php');?>