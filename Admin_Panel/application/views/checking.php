


 <section id="content">
        <div class="container-fluid">

          <div class="row">
         <?php if(($_event)!=""): ?>
          <?php foreach($_event as $event): ?>
            <div class="col-md-4">
          <div id="<?php echo  $event->event_id?>" class="card event-card def"><a href="#event-detail2" data-toggle="modal">
                <?php if ($event->photo):?>
                 <div class="event-image"><img class="img-responsive" alt="" src="<?=base_url()?><?=$event->photo?>">
                <?php else:?>
                  <div class="event-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/NoImage.png">
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
                  </a> </div>  </div>
           
              <?php endforeach;?>

            <?php else:?>

              <div class="event-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/no_event_found.png"></div>
            <?php endif;?>

             </div>
            </div>
          
      </section>
      </main>
      
      <?php include_once('Common_new/footer.php');?>