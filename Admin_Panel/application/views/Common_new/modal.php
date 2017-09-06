
<div id="create-event-modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Create Next Event</h4>
          </div>
          <div class="modal-body">
          
           <form id="create_form" enctype='multipart/form-data'>
                      <div class="row">
                        <div class="col-md-12">
                        
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">add_a_photo</i></span>
                              <input id="inputFile3" type="file" multiple="">
                               <?php echo form_upload(['name'=>'userfile','class'=>'form-control','placeholder'=>'Upload Image']);?><span class="material-icons form-control-feedback">clear</span>
                          
                            </div> 
                            </div>
                         <div class="form-group">
                         <?php if(isset($upload_error)) print_r( $upload_error); ?>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">description</i></span>
                              <?php echo form_input(['name'=>'event_name','class'=>'form-control','placeholder'=>'Event Name']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                            </div>
                          </div>
                          <div class="form-group">
                          <?php echo form_error('name');?>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">event</i></span>
                            <?php $options=array(
                              'select'=>'Select Event Category',
                              'private'=>'Private',
                              'public'=>'Public',
                              );
                             echo form_dropdown('category', $options,'','class="my_class" id="event_category"');?>
                          
                          
                          
                            
                      
                               <span class="material-icons form-control-feedback">clear </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">event</i></span>
                          
                          
                               <?='<select class="form-control" name="Select_Event_name" >'.'<option value="">Select an Event type</option>';
                            foreach ($event_types as $types) {

                               echo "<option value='" . $types->event_type_name ."'>" . $types->event_type_name ."</option>";
                             }
                             echo "</select>"; ?><span class="input-group-btn">
                              <button id="add-event-type" type="button" class="btn btn-primary btn-raised">Other</button>
                       </span>
                        </div>
                        </div>
                       <div class="form-group add-event">
                    <div class="input-group"><span class="input-group-addon"><i class="material-icons">info</i></span>
                    <?php echo form_input(['name'=>'new_event_type','class'=>'form-control','placeholder'=>'Event Type Name']);?>
                    
                    </div>
                  </div>
                
                

                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">location_on</i></span>
                                <?php echo form_input(['name'=>'location','class'=>'form-control','placeholder'=>'Location']);?><span class="material-icons form-control-feedback">clear</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">date_range</i></span>
                              <?php echo form_input(['name'=>'date','class'=>'form-control datepicker','placeholder'=>'Event Date']);?><span class="material-icons form-control-feedback">clear</span>
                    
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">star</i></span>
                               <?php echo form_input(['name'=>'cpd','class'=>'form-control','placeholder'=>'CPD Points']);?><span class="material-icons form-control-feedback">clear</span>
      
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">supervisor_account</i></span>
                               <?php echo form_input(['name'=>'estimated_guests', 'class'=>'form-control','placeholder'=>'Estimated Guests']);?><span class="material-icons form-control-feedback">clear</span>
                             
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">laptop_chromebook</i></span>
                                <?php echo form_input(['name'=>'web_url','class'=>'form-control','placeholder'=>'Web URL']);?><span class="material-icons form-control-feedback">clear</span>

                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">access_time</i></span>
                                 <?php echo form_input(['name'=>'start_time','class'=>'form-control','placeholder'=>'Start Time']);?>  <span class="material-icons form-control-feedback">clear</span>
                                 
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">access_time</i></span>
                                   <?php echo form_input(['name'=>'end_time','class'=>'form-control','placeholder'=>'End Time']);?><span class="material-icons form-control-feedback">clear</span>

                                </div>
                              </div>
                            </div>
                          </div>
                               
                          <div id="multi_list">
                          <div class="col-md-12">
                            <div class="form-group">
                             <p> Select Organizations </p>
                              <?php foreach ($org as $types): ?>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="checkboxvar[]" value="<?php echo $types->organization_id;?>"><span class="checkbox-material"></span>
                                    <?php echo $types->organization_name;?>
                                  </label>
                                </div>
                              <?php endforeach ?>
                       
                            </div>
                          </div>
                        </div>
                

                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">assignment</i></span>
                                <?php echo form_textarea(['name'=>'event_desc','cols'=>'30','rows'=>'10','class'=>'form-control','placeholder'=>'Event Description']);?><span class="material-icons form-control-feedback">clear</span>

                            </div>
                          </div>
                           <div id="resultshow"></div>
                          <div class="footer text-center">
                             <?php echo form_submit(['name'=>'event_submit', 'id'=>'event_submit', 'value'=>'Register Event','class'=>'btn btn-primary btn-block text-center btn-raised btn-lg']);?>

                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
         
   