<section id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-nav-tabs card-plain">
                <div class="header header-custom">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul data-tabs="tabs" class="nav nav-tabs">

                        <li class="active"><a href="#arrived"  data-toggle="tab" aria-expanded="true"><i class="material-icons">timeline</i>Arrived</a></li>
                        <li><a href="#registered" data-toggle="tab" aria-expanded="false"><i class="material-icons">toll</i>Registered</a></li>
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
                </div>
                </div>
                </div>
                </div>
                </section>
                 </main>
      <?php include_once('Common_new/footer.php');?>