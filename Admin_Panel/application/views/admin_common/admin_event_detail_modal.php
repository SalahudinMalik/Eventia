
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header event-detail-modal-header">
              <button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <div id="event-map"></div>
            </div>
            <div class="modal-body">
              <div class="event-modal-card">
                <div class="header">
                  <?php if ($result[0]->photo):?>
                  <div class="image-container"><img class="img-responsive" alt="" src="<?=base_url()?><?=$result[0]->photo?>"></div>
                <?php else:?>
                  <div class="image-container"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/NoImage.png">
                  <?php endif; ?>
                  <div class="event-title">
                     <h3><?=$result[0]->event_name?></h3>
                  <h4><?=$result[0]->event_location?></h4>
                  </div>
                </div>
                <div class="modal-sub-card">
                  <div class="description">
                    <h4 class="modal-sub-head">Event Description</h4>
                     <p><?php $rslt=$result[0]->event_description; $r=(explode('WebURL',$rslt,2));if(!empty($r[0])) print_r($r[0]);?></p><span class="cpd"><?=$result[0]->cpd_hrs?></span><span class="start-time"><i class="material-icons">access_time</i><?=$result[0]->event_start_time?></span><span class="end-time"><i class="material-icons">access_time</i><?=$result[0]->event_end_time?></span>
                  </div>
                </div>
                <div class="modal-sub-card">
                  <h4 class="modal-sub-head">Event Name</h4>
                   <p><?=$result[0]->event_name?></p>
                </div>
                <div class="modal-sub-card">
                  <h4 class="modal-sub-head">Organised By</h4>
                  <p> Khurshid</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-default">Cancel Request</button>
              <button type="button" class="btn btn-primary">Approve Event Request</button>
            </div>
          </div>
        </div>
      