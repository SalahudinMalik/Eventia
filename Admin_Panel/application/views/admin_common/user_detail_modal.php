 
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
                  <h3><?php echo $result[0]->first_name?></h3>
                  <h4><?php echo $result[0]->address?></h4>
                </div>
              </div>
              <div class="modal-sub-card">
                <div class="description">
                  <h4 class="modal-sub-head">Occupation</h4>
                  <p><?php echo $result[0]->profession?></p>
                </div>
              </div>
              <div class="modal-sub-card">
                <h4 class="modal-sub-head">Registration Date</h4>
                <p> 04:45:55 09-02-2016</p>
              </div>
              <div class="modal-sub-card">
                <h4 class="modal-sub-head">Email</h4>
                <p><?php echo $result[0]->email?></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
           <!-- <button type="button" class="btn btn-primary">Accept</button>-->
             <a href="<?= base_url()?>event/reject_user/<?=$result[0]->user_id?>">Reject</a> &nbsp &nbsp &nbsp
            <!-- <button type="button" class="btn btn-primary">Reject</button>-->
             <a href="<?=base_url()?>event/accept_user/<?=$result[0]->user_id?>">Accept</a>
          </div>
        </div>
      </div>
    