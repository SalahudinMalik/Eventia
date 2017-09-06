
 <section id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-nav-tabs card-plain">
                <div class="header header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul data-tabs="tabs" class="nav nav-tabs">
                        <li class="active"><a href="<?php echo base_url()?>event/get_pending_organiser"><i class="material-icons">fiber_new</i>New</a></li>
                        <li><a href="<?php echo base_url()?>event/get_entertained_organiser"><i class="material-icons">folder_special</i>Entertained</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="tab-content text-center">
                    <div id="new" class="tab-pane active">
                      <div class="row">
                       <?php if(($result)!=""): ?>
          <?php foreach($result as $user): ?>
                        <div class="col-md-4">
                          <div id="<?php echo  $user->user_id?>" class="card profile-card user-abc"><a href="#user-details" data-toggle="modal">
                           <?php if ($user->photo):?>
                 <div class="user-image"><img class="img-responsive" alt="" src="<?=base_url()?><?=$user->photo?>">
                <?php else:?>
                  <div class="user-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/NoImage.png">
                  <?php endif; ?>
                             
                             </div>
                              <div class="user-info">
                                <div class="info-box">
                                  <div class="user-details">
                                    <h3><?php echo $user->first_name?></h3>
                                    <h4><?php echo $user->utype?></h4>
                                    <p><?php echo $user->phone?></p>
                                  
                                  </div>
                                </div>
                                </div>
                            </div></a>
                       
                        </div>
                         
                         <?php endforeach;?>
                       
            <?php else:?>
            
              <div class="user-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/no_event_found.png"></div>
            <?php endif;?>
                     
                      </div>
                    </div>

                    <div id="entertained" class="tab-pane">
                      <div class="row">
                         <?php if(($result)!=""): ?>
          <?php foreach($result as $user): ?>
                        <div class="col-md-4">
                          <div id="<?php echo  $user->user_id?>" class="card profile-card user-abc"><a href="#user-details" data-toggle="modal">
                           <?php if ($user->photo):?>
                 <div class="user-image"><img class="img-responsive" alt="" src="<?=base_url()?><?=$user->photo?>">
                <?php else:?>
                  <div class="user-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/NoImage.png">
                  <?php endif; ?>
                             
                             </div>
                              <div class="user-info">
                                <div class="info-box">
                                  <div class="user-details">
                                    <h3><?php echo $user->first_name?></h3>
                                    <h4><?php echo $user->utype?></h4>
                                    <p><?php echo $user->phone?></p>
                                  
                                  </div>
                                </div>
                                </div>
                            </div></a>
                       
                        </div>
                         
                         <?php endforeach;?>
                       
            <?php else:?>
            
              <div class="user-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/no_event_found.png"></div>
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
    
   