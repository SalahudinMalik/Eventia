
 <section id="content">
        <div class="container-fluid">
          <div class="row">
          
            <div class="col-md-6">
              <div class="card">
                <div class="content">
                  <h3 class="card-title"><span class="icon"><i class="material-icons">list</i></span> Categories</h3>
                  <div class="category-list-area">
                    <ul class="organisation-list">
                     <?php if(($result)!=""): ?>
          <?php foreach($result as $org): ?>
                      <li><?php echo $org->organization_name?></li>
               <?php endforeach;?>                     
            <?php else:?>
            
              <div class="user-image"><img class="img-responsive" alt="" src="<?=base_url()?>pictures/no_event_found.png"></div>
            <?php endif;?>
            <li id="add"></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
           
          
            <div class="col-md-6">
              <div class="card">
                <div class="content">
                  <div class="card-inner">
                    <h3 class="card-title"><span class="icon"><i class="material-icons">add_to_photos</i></span>Add Category</h3>
                    <form id="add_org" >
                    <div id="exist"></div>
                      <div class="form-group">
                        <label for="addon1" class="control-label">Enter Organisation Name and Press Add Button</label>
                        <div class="input-group"><span class="input-group-addon"><i class="material-icons">note_add</i></span>
                        <?php echo form_input(['name'=>'org','id'=>'org','class'=>'form-control','placeholder'=>'Name']);?><span class="input-group-btn"></span>
                        <!--  <input id="addon1" type="text" placeholder="Name" class="form-control"><span class="input-group-btn"></span>-->
                          <button id="addorganization" type="submit" class="btn btn-primary btn-raised">Add </button>
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