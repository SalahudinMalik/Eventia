<main id="content-wrapper">
      <header>
        <nav role="navigation" class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand"><?php echo img(array('src'=>'org_assessts/img/logo.png', 'alt'=> '','class'=>'img-responsive')); ?></a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url()?>chk/get_awaiting_events"><span class="icon"><i class="material-icons">update</i></span>Event Awaiting Setup</a></li>
              <?php
                $options=array(
                              'select'=>'Events',
                              'Future'=>'Future Events',
                              'Past'=>'Past Events',
                              'All'=>'All Events',
                              ); 
                               ?>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><?=$options['select']?> <span class="caret"></span></a>
              
                <ul role="menu" class="dropdown-menu">
                
                  <li><a href="<?= base_url()?>chk/get_future_events"><span class="icon"><i class="material-icons">add_alarm</i></span><?= $options['Future']?></a></li>
                  <li><a href="<?= base_url()?>chk/get_past_events"><span class="icon"><i class="material-icons">done_all</i></span><?= $options['Past']?></a></li>
                  <li><a href="<?= base_url()?>chk/index"><span class="icon"><i class="material-icons">filter_list</i></span><?= $options['All']?></a></li>
                </ul>
              </li>
              <li><a href="<?= base_url()?>onsight_reg"><span class="icon"><i class="material-icons">person_add</i></span>Onsite Register</a></li>
              <li><a href="#create-event-modal" data-toggle="modal"><span class="icon"><i class="material-icons">playlist_add</i></span>Create Event</a></li>
              <li><a href="<?= base_url()?>chk/logout"><span class="icon"><i class="material-icons">person_add</i></span>Logout</a></li>
              <li><a href="cost.php" >Cost Prediction</a></li>
              <li><a href="reportedEvent.php" >Reported Events</a></li>
              <li><a href="guestlist.php" >Guest List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="" id="sidebar-toggle"><span class="icon"><i class="material-icons">account_circle</i></span><?=$profile_data->first_name; ?><i class="material-icons">menu</i></a></li>
            </ul>
          </div>
        </nav>
      </header>
    
       
                          