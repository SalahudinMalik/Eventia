<body>
    <aside>
      <div class="aside-content default-skin">
        <div class="profile-sidebar">
          <div class="profile-userpic"><?php echo img(array('src'=>'org_assessts/img/profile_user.jpg', 'alt'=> '','class'=>'img-responsive')); ?></div>
          <div class="profile-usertitle">
            <div class="profile-usertitle-name">John Doe</div>
            <div class="profile-usertitle-job">Attendo Inc.</div>
          </div>
          <div class="profile-usermenu">
            <ul class="nav">
              <li class="active"><a href="<?php base_url() ?>home/index"><span class="icon"><i class="material-icons">update</i></span>Home</a></li>
            
              <li><a href="#" id="toggle-password"><span class="icon"><i class="material-icons">lock</i></span>Change Password</a></li>
              <li><a href="#" id="toggle-update-info"><span class="icon"><i class="material-icons">account_box</i></span>Update Info</a></li>
              <li><a href="<?php base_url()?>home/index"><span class="icon"><i class="material-icons">subdirectory_arrow_left</i></span>Logout</a></li>
            </ul>
            <div class="form-info-change">
              <h3 class="form-title">Update Info</h3>
              <form action="">
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">add_a_photo</i></span>
                    <input id="inputFile3" type="file" multiple="">
                    <!--<?php// echo form_open_multipart(//'upload/uploadImage');?>-->
                     <?php echo form_upload(['name'=>'userfile','class'=>'form-control','placeholder'=>'Upload Image']);?><span class="material-icons form-control-feedback">clear
                   </span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                     <?php echo form_input(['name'=>'fname','class'=>'form-control','placeholder'=>'First Name']);?><span class="material-icons form-control-feedback">clear</span>
                   
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                      <?php echo form_input(['name'=>'lname','class'=>'form-control','placeholder'=>'Last Name']);?><span class="material-icons form-control-feedback">clear</span>
            
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">email</i></span>
                     <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email']);?><span class="material-icons form-control-feedback">clear</span>
                   
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">business</i></span>
                     <?php echo form_input(['name'=>'org','class'=>'form-control','placeholder'=>'Organisation']); ?><span class="material-icons form-control-feedback">clear</span>
                   
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">phone</i></span>
                    <?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Phone']);?><span class="material-icons form-control-feedback">clear</span>
                    
                  </div>
                </div>
                <div class="footer">
              
                  <?php echo form_submit(['name'=>'info_submit','value'=>'Update Info','class'=>'btn-btn-primary btn-block text-center']);?>
                </div>
              </form>
            </div>
            <div class="form-password">
              <h3 class="form-title">Update Password</h3>
              <form action="">
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">lock_outline</i></span>
                    <?php echo form_input(['name'=>'current_password','class'=>'form-control','placeholder'=>'Current Password']);?><span class="material-icons form-control-feedback">clear</span>
                    
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">lock_outline</i></span>
                     <?php echo form_input(['name'=>'new_password','class'=>'form-control','placeholder'=>'New Password']);?><span class="material-icons form-control-feedback">clear</span>
                   
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"><span class="input-group-addon"><i class="material-icons">lock_outline</i></span>
                     <?php echo form_input(['name'=>'repeat_password','class'=>'form-control','placeholder'=>'Repeat Password']);?><span class="material-icons form-control-feedback">clear</span>
                  </div>
                </div>
                <div class="footer">
          
                <?php echo form_submit(['name'=>'pass_submit','value'=>'Change Password','class'=>'btn btn-block_outline btn-primary btn-block text-center']);?>
                </div>
              </form>
            </div>
          </div><a id="sidebar-close" href=""><span class="material-icons">close</span></a>
        </div>
      </div>
    </aside>