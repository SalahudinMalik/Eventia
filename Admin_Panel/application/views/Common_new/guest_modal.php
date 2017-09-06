<div id="add-guest-modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Add Guest</h4>
                </div>
                <div class="modal-body">
                  <div class="card card-nav-tabs card-plain">
                    <div class="header header-primary">
                      <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                          <ul data-tabs="tabs" class="nav nav-tabs">
                            <li class="active"><a href="#new" data-toggle="tab" id="ors" aria-expanded="true"><i class="material-icons">timeline</i>New</a></li>
                            <li><a href="#existing" aria-expanded="false" data-toggle="tab" id="lmn"class="stu"><i class="material-icons">toll</i>Existing</a></li>
                          </ul>
                        
                        </div>
                      </div>
                    </div>
                    <div class="content">
                      <div class="tab-content text-center">
                        <div id="new" class="tab-pane active ">
                         <div id="show_guest">
                         <form id="gueste_form" enctype='multipart/form-data'>
                          <div class="row">
                          
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">add_a_photo</i></span>
                                  <input id="inputFile3" type="file" multiple="">
                                   <?php echo form_upload(['name'=>'userfile','class'=>'form-control','placeholder'=>'Upload Image']);?><span class="material-icons form-control-feedback">clear</span>
                                
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                                 <?php echo form_input(['name'=>'first_name','class'=>'form-control','placeholder'=>'First Name']);?>
                                 </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                                    <?php echo form_input(['name'=>'last_name','class'=>'form-control','placeholder'=>'Last Name']);?>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                                    <?php echo form_input(['name'=>'user_name','class'=>'form-control','placeholder'=>'User Name']);?>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">email</i></span>
                                   <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email']);?>
                                </div>
                              </div>
                               <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                                    <?php echo form_input(['name'=>'profession','class'=>'form-control','placeholder'=>'Profession']);?>
                                </div>
                              </div>
                               <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">account_circle</i></span>
                                    <?php echo form_input(['name'=>'address','class'=>'form-control','placeholder'=>'Address']);?>
                                </div>
                              </div>
                              <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">event</i></span>
                          
                          
                               <?='<select class="form-control" name="Select_Organization" >'.'<option value="">Select an Organization</option>';
                            foreach ($org as $types) {

                               echo "<option value='" . $types->organization_name ."'>" . $types->organization_name ."</option>";
                             }
                             echo "</select>"; ?><span class="input-group-btn">
                          
                       </span>
                        </div>
                        </div>
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">phone</i></span>
                                    <?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Phone']);?>
                                </div>
                              </div>
                        </div>
                            
                            <div id="showguest"></div>
                          </div>
                          
                          </div>
                        </div>
                        <div id="existing" class="tab-pane">
                         
                          <div class="row">
                            
                   <div id="s"></div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                  <button type="button" id="add_guest" type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div>
            </div>
          </div>