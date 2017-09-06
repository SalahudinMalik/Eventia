 <main id="content-wrapper">
  <header>
        <nav role="navigation" class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand"><?php echo img(array('src'=>'admin_assessts/img/logo.png', 'alt'=> '','class'=>'img-responsive')); ?></a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url()?>event"><span class="icon"><i class="material-icons">update</i></span>Event Requests</a></li>
              <li><a href="<?php echo base_url()?>event/get_pending_organiser"><span class="icon"><i class="material-icons">add_alarm</i></span>Manage Organisers</a></li>
              <li><a href="<?php echo base_url()?>event/get_organization"><span class="icon"><i class="material-icons">business</i></span>Manage Organisation</a></li>
              <li><a href="<?php echo base_url()?>event/get_organisers"><span class="icon"><i class="material-icons">graphic_eq</i></span>Report</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
             <!-- <li><a href="#" id="sidebar-toggle"><span class="icon"><i class="material-icons">account_circle</i></span>John Doe<i class="material-icons">menu</i></a></li>-->
              
            </ul>
          </div>
        </nav>
      </header>
    