 <body>

    <aside>
      <div class="aside-content default-skin">
        <div class="profile-sidebar">
         <?php if ($profile_data->photo):?>
                 <div class="profile-userpic"><img class="img-responsive" alt="" src="<?=base_url()?><?=$profile_data->photo?>"></div>
                <?php else:?>
                  <div class="profile-userpic"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/NoImage.png"></div>
                  <?php endif; ?>
        
          <div class="profile-usertitle">

            <div class="profile-usertitle-name"><?=$profile_data->first_name ;$profile_data->last_name;?></div>
            <div class="profile-usertitle-job"><?=$profile_data->profession;?></div>
          </div>
          <div class="profile-usermenu">
            <div class="form-info-change">
              <h3 class="form-title">Update Info</h3>

               <form id="submit_form" enctype='multipart/form-data'>
                
                <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">add_a_photo</i></span>
                              <input id="inputFile3" type="file" multiple="">
                               <?php echo form_upload(['name'=>'userfile','class'=>'form-control','placeholder'=>'Upload Image']);?><span class="material-icons form-control-feedback">clear</span>
                            </div> 
                            </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                     <?php echo form_input(['name'=>'fname','id'=>'fname','class'=>'form-control','value'=>$profile_data->first_name,'placeholder'=>'First Name']);?><span class="material-icons form-control-feedback">clear</span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                   <?php echo form_input(['name'=>'lname','value'=>$profile_data->last_name,'class'=>'form-control','placeholder'=>'Last Name']);?>
                    <span class="material-icons form-control-feedback">clear</span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">format_list_numbered</i></span>
                  <?php echo form_input(['name'=>'member_no','disabled'=>'true','value'=>$profile_data->user_id,'class'=>'form-control','placeholder'=>'Member No']);?>
                  <span class="material-icons form-control-feedback">clear</span>
                  </div>
                </div>
                <div class="form-group">
                          <div class="input-group"><span class="input-group-addon"><i class="material-icons">email</i></span>
                            <?php echo form_input(['name'=>'email','disabled'=>'true','class'=>'form-control','value'=>$profile_data->email,'placeholder'=>'Email']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                          </div>
                        </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">monetization_on</i></span>
                  <?php echo form_input(['name'=>'job_title','value'=>$profile_data->profession,'class'=>'form-control','placeholder'=>'Job Title']);?>
                    <span class="material-icons form-control-feedback">clear</span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">map</i></span>
                  <?php echo form_input(['name'=>'address','value'=>$profile_data->address,'class'=>'form-control','placeholder'=>'Address']);?>
                    <span class="material-icons form-control-feedback">clear</span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">business</i></span>
                  <?php echo form_input(['name'=>'org','disabled'=>'true','value'=>$profile_data->organization_name,'class'=>'form-control','placeholder'=>'Organisation']);?>
                    <span class="material-icons form-control-feedback">clear</span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">phone</i></span>
                  <?php echo form_input(['name'=>'phone','value'=>$profile_data->phone,'class'=>'form-control','placeholder'=>'Phone']);?>
                    <span class="material-icons form-control-feedback">clear</span>
                  </div>
                </div>
                <div id="result"></div>
                <div class="footer">
              
                 <button id="edit-button" type="submit"  value="Edit Profile" class="btn btn-primary btn-block text-center">Edit Profile</button>
                </div>
              <div class="footer">
              
                 <button id="save" type="submit"  value="save" class="btn btn-primary btn-block text-center">save</button>
                </div>

             </form>
            </div>
          </div><a id="sidebar-close" href=""><span class="material-icons">close</span></a>
        </div>
      </div>
    </aside>

