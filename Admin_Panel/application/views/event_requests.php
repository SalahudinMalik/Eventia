 
 <section id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-nav-tabs card-plain">
                <div class="header header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul data-tabs="tabs" class="nav nav-tabs">
                        <li class="active"><a href="<?php echo base_url()?>event"><i class="material-icons">fiber_new</i>New</a></li>
                        <li><a href="<?php echo base_url()?>event/get_entertained_events"><i class="material-icons">folder_special</i>Entertained</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="tab-content text-center">
                    <div id="new" class="tab-pane active">
                      <div class="row">
                      <?php if(($_event)!=""): ?>
          <?php foreach($_event as $event): ?>
                        <div class="col-md-4">

       <div id="<?php echo  $event->event_id?>" class="card event-card admin-abc"><a href="#admin-event-details" data-toggle="modal">
                <?php if ($event->photo):?>
                 <div class="event-image"><img class="img-responsive" alt=""  src="<?=base_url()?><?=$event->photo?>">
                <?php else:?>
                  <div class="event-image"><img class="img-responsive" alt=""  src="<?=base_url()?>pictures/NoImage.png">
                  <?php endif; ?>
                    <div class="date-data">
                      <div class="date-requested">
                        <div class="event-date">
                          <p>Requested<span><i class="material-icons">event_note</i><?=$event->request_dt ?></span></p>
                        </div>
                      </div>
                      <div class="date-event">
                        <div class="event-date">
                          <p>Event Date<span><i class="material-icons">event_note</i><?=$event->event_date ?></span></p> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="event-info">
                    <div class="info-box"><span class="cpd"><?=$event->cpd_hrs?></span>
                      <div class="event-details">
                      <h3><?=$event->event_name?></h3>
                      <h4><?=$event->event_location?></h4>
                      </div>
                    </div>
                    
                  </div> 
                  </a>
                   </div>  </div>
           
              <?php endforeach;?>

            <?php else:?>

              <div class="event-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/no_event_found.png"></div>
            <?php endif;?>
                        
                       
                       
                        
                        
                       
                      </div>
                    </div>
                    <div id="entertained" class="tab-pane">
                      <div class="row">
                       
                        <?php if(($_event)!=""): ?>
          <?php foreach($_event as $event): ?>
                        <div class="col-md-4">

       <div id="<?php echo  $event->event_id?>" class="card event-card admin-abc"><a href="#admin-event-details" data-toggle="modal">
                <?php if ($event->photo):?>
                 <div class="event-image"><img class="img-responsive" alt=""  src="<?=base_url()?><?=$event->photo?>">
                <?php else:?>
                  <div class="event-image"><img class="img-responsive" alt=""  src="<?=base_url()?>pictures/NoImage.png">
                  <?php endif; ?>
                    <div class="date-data">
                      <div class="date-requested">
                        <div class="event-date">
                          <p>Requested<span><i class="material-icons">event_note</i><?=$event->request_dt ?></span></p>
                        </div>
                      </div>
                      <div class="date-event">
                        <div class="event-date">
                          <p>Event Date<span><i class="material-icons">event_note</i><?=$event->event_date ?></span></p> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="event-info">
                    <div class="info-box"><span class="cpd"><?=$event->cpd_hrs?></span>
                      <div class="event-details">
                      <h3><?=$event->event_name?></h3>
                      <h4><?=$event->event_location?></h4>
                      </div>
                    </div>
                    
                  </div> 
                  </a>
                   </div>  </div>
           
              <?php endforeach;?>

            <?php else:?>

              <div class="event-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/no_event_found.png"></div>
            <?php endif;?>
                        
                       
                       
                        
                        
                       
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