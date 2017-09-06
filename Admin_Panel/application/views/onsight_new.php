
<section id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-nav-tabs card-plain">
                <div class="header header-custom">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul data-tabs="tabs" class="nav nav-tabs">

                        <li class="active"><a href="#arr"  data-toggle="tab" aria-expanded="true"><i class="material-icons">timeline</i>Arrived</a></li>
                        <li><a href="#reg" data-toggle="tab" aria-expanded="false"><i class="material-icons">toll</i>Registered</a></li>
                        <li class="pull-right">
                          <div class="event-select-area">
                            <form action="">
                             <?='<select id="select_event" class="form-control" name="Select_Event_name" >'.'<option value="">'."Select Event".'</option>';
                            foreach ($result as $event) {

                               echo "<option value='" . $event->event_name ."'>" . $event->event_name ."</option>";
                             }
                             echo "</select>"; ?><span class="input-group-btn">
                            
                       </span>
                             
                            </form>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              
            <div class="content">
                  <div class="tab-content text-center">
                    <div id="arr" class="tab-pane active">
                     <div class="row">
                       
                        <div  id="rt" class="col-md-4">
                          <div class="card user-card">
                            <div class="user-image"><img src="" alt="" class="img-responsive"></div>
                    
                            <div class="user-info">
                              <div class="info-box">
                                <div class="user-details">
                                  <h3></h3>
                                  <h4></h4>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                     
                    </div>
                    <div class="tab-button">
                        <button data-toggle="modal" href="#add-guest-modal" class="btn btn-primary btn-raised btn-round btn-fab"><i class="material-icons">add</i></button>
                      </div>

                    <div id="reg" class="tab-pane">
                      <div class="row">
                      
                        <div id="uv" class="col-md-4">
                          <div class="card user-card">
                            <div class="user-image"><img src="img/events/5.jpg" alt="" class="img-responsive"></div>
                            <div class="user-info">
                              <div class="banner-container">
                                <div class="banner"><span class="text">Manual</span></div>
                              </div>
                              <div class="info-box">
                                <div class="user-details">
                                  <h3>Jack the reader</h3>
                                  <h4>Jack@thenews.com</h4>
                                  <h4>123-123-333</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
                 
            </div>
          </div>
         
        </div>
      </section>
    </main>
      <?php include_once('Common_new/footer.php');?>