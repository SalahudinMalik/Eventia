
<section id="content">
        <div class="container-fluid">
          <div class="content">
            <div class="row">
              <div class="col-md-3 col-md-offset-3">
                
            

                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">event</i></span>
                          
                          
                               <?='<select id="report-select" class="form-control" name="Select_org_name" >'.'<option value="">Select an Organiser</option>';
                            foreach ($result as $org) {

                               echo "<option value='" . $org->user_id ."'>" . $org->user_name ."</option>";
                             }
                             echo "</select>"; ?>
                        </div>
                        </div>
                        <div id="rpt"></div>
              <div class="col-md-3">

              <form id="report_form">
               
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div id="org-event">
            </div>
          </div>
        </div>
      </section>