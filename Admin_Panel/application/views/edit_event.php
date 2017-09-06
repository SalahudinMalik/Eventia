 <?php include_once('common/header.php');?>
 
 

 <section id="content">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="content">
                  
                    <?php echo form_open_multipart("organiser/organiser/update_event/{$event_detail[0]->event_id}");?>
                     <?php if($error=$this->session->flashdata('feedback')): ?>
            
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
                              <?php echo form_input(['name'=>'event_name','class'=>'form-control','value'=>$event_detail[0]->event_name,'placeholder'=>'Event Name']);?>
                              <span class="material-icons form-control-feedback">clear</span>
                            </div>
                          </div>
                          <div class="form-group">
                          <?php echo form_error('name');?>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">event</i></span>
                            <?php $options=array(
                              'private'=>$event_detail[0]->event_category,
                              'private'=>'Private',
                              'public'=>'Public',
                              );
                             echo form_dropdown('category',$options);?>
                               <span class="material-icons form-control-feedback">clear </span>
                            </div>
                          </div>
                          
                                                 
                      
                           
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">event</i></span>
                          
                          
                               <?='<select class="form-control" name="Select_Event_name" >'.'<option value="">'.$event_detail[0]->event_type_name.'</option>';
                            foreach ($event_types as $types) {

                               echo "<option value='" . $types->event_type_name ."'>" . $types->event_type_name ."</option>";
                             }
                             echo "</select>"; ?><span class="input-group-btn">
                            
                       </span>
                        </div>
                        </div>
                       
                
                

                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">location_on</i></span>
                                <?php echo form_input(['name'=>'location','class'=>'form-control','value'=>$event_detail[0]->event_location,'placeholder'=>'Location']);?><span class="material-icons form-control-feedback">clear</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">date_range</i></span>
                              <?php echo form_input(['name'=>'date','class'=>'form-control datepicker','value'=>$event_detail[0]->event_date,'placeholder'=>'Event Date']);?><span class="material-icons form-control-feedback">clear</span>
                    
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">star</i></span>
                               <?php echo form_input(['name'=>'cpd','class'=>'form-control','value'=>$event_detail[0]->cpd_hrs,'placeholder'=>'CPD Points']);?><span class="material-icons form-control-feedback">clear</span>
      
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">supervisor_account</i></span>
                               <?php echo form_input(['name'=>'estimated_guests', 'class'=>'form-control','value'=>$event_detail[0]->no_of_guests_est,'placeholder'=>'Estimated Guests']);?><span class="material-icons form-control-feedback">clear</span>
                             
                            </div>
                          </div>
                          <?php $result=$event_detail[0]->event_description; $r=(explode('WebURL',$result,2));?>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">laptop_chromebook</i></span>
                                <?php echo form_input(['name'=>'web_url','class'=>'form-control','value'=>($r[1]),'placeholder'=>'Web URL']);?><span class="material-icons form-control-feedback">clear</span>

                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">access_time</i></span>
                                 <?php echo form_input(['name'=>'start_time','class'=>'form-control','value'=>$event_detail[0]->event_start_time,'placeholder'=>'Start Time']);?>  <span class="material-icons form-control-feedback">clear</span>
                                 
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-group"><span class="input-group-addon"><i class="material-icons">access_time</i></span>
                                   <?php echo form_input(['name'=>'end_time','class'=>'form-control','value'=>$event_detail[0]->event_end_time,'placeholder'=>'End Time']);?><span class="material-icons form-control-feedback">clear</span>

                                </div>
                              </div>
                            </div>
                          </div>
                          <?php $result=$event_detail[0]->event_description; $r=(explode('WebURL',$result,2));?>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">assignment</i></span>
                                <?php echo form_textarea(['name'=>'event_desc','cols'=>'30','rows'=>'10','class'=>'form-control','value'=>($r[0]),'placeholder'=>'Event Description']);?><span class="material-icons form-control-feedback">clear</span>

                            </div>
                          </div>
    
                          <div class="footer text-center">
                             <?php echo form_submit(['name'=>'event_submit','id'=>'event_edit','value'=>'Save','class'=>'btn btn-primary btn-block text-center btn-raised btn-lg']);?>

                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
     <?php include_once('common/footer.php');?>