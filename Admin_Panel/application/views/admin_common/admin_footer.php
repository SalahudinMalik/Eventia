 </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url('admin_assessts/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('admin_assessts/js/material.min.js');?>"></script>
    <script src="<?=base_url('admin_assessts/js/nouislider.min.js');?>"></script>
    <script src="<?=base_url('admin_assessts/js/bootstrap-datepicker.js');?>"></script>
    <script src="<?=base_url('admin_assessts/js/material-kit.js');?>"></script>
    <script src="<?=base_url('admin_assessts/js/jquery.dropdown.js');?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js" async="" defer=""></script>
    <script src="<?=base_url('admin_assessts/js/scripts.js');?>"></script>
     <script>
        $(document).ready(function(){
          $(".admin-abc").click(function(event){
            event.preventDefault();
             var id = $(this).attr('id');
            //alert('hello');
             $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('event/admin_event_detail'); ?>',
                   //url:'<?php echo base_url('chk/get_awaiting_events');?>',
                   data : {"id":id},
 //contentType: "application/json; charset=utf-8",
                 dataType: 'json',
                 complete: function(result){
                  if(result){
                    $('#admin-event-details').html(result.responseText);
                  }
                  
                   // $('#rs').html(result.responseText);
                  
                 },
          });
        });
        });
        </script>
        <script>
        $(document).ready(function(){
          $(".event-def").click(function(event){
            event.preventDefault();
             var id = $(this).attr('id');
            //alert('hello');
             $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('event/admin_enter_event_detail'); ?>',
                   //url:'<?php echo base_url('chk/get_awaiting_events');?>',
                   data : {"id":id},
 //contentType: "application/json; charset=utf-8",
                 dataType: 'json',
                 complete: function(result){
                  if(result){
                    $('#admin-event-details2').html(result.responseText);
                  }
                  
                   // $('#rs').html(result.responseText);
                  
                 },
          });
        });
        });
        </script>
         <script>
        $(document).ready(function(){
          $(".user-abc").click(function(event){
            event.preventDefault();
             var id = $(this).attr('id');
            //alert('hello');
             $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('event/user_detail'); ?>',
                   //url:'<?php echo base_url('chk/get_awaiting_events');?>',
                   data : {"id":id},
 //contentType: "application/json; charset=utf-8",
                 dataType: 'json',
                 complete: function(result){
                  if(result){
                    $('#user-details').html(result.responseText);
                  }
                  
                   // $('#rs').html(result.responseText);
                  
                 },
          });
        });
        });
        </script>

        <script type="text/javascript">


      $(document).ready(function() {

            $("#addorganization").click(function(event){
        var v=$("#org").val();
      //  alert(v);
           event.preventDefault();
    var formData = new FormData($("#add_org")[0]);
     
    $.ajax({
        url: '<?php echo base_url('event/add_new_organization'); ?>',
        type: 'POST',
        data: formData,
       // async: false,
         contentType: false,
        processData: false,
        complete: function (result) {
        
          if(result)
          var t=result.responseText;
        if(t==v){
          $('#exist').hide();
         $('#add').html(result.responseText);
          location.reload();
        }

       else if(t!=v)
          {
       // alert(t);
             $('#exist').html(result.responseText);
        //alert(msg);
             }
        },
       // cache: false,
       
    });
        

});
    });
        </script>
         <script>  
        
   $(document).ready(function() {
    
    
    
     $('#report-select').change(function() {
    $('#org-event').html('');
    
    var formData = { 'selectedValue' : $( "#report-select option:selected" ).val() };
   
    $.ajax({
       type: 'POST',  
       url: '<?php echo base_url('event/get_events'); ?>',

       data: formData,
      // async:false,
       success: function(res){              
     if(res!=""){
     
    
    var Obj = $.parseJSON(res);

   var length=Obj.length;
     // alert(length);

      var txt=" ";
      var txt1=" ";
         var json = $.parseJSON(JSON.stringify(res));
     //  alert (res.length);

  $.each($.parseJSON(res), function() {
     var pic=this['photo'];
      var eventId=this['event_id'];
     var bas="http://localhost/Attendo/";
     NOImg="pictures/NoImage.png";
    // var bas="http://198.24.190.34/~ifisolco/attendo/";
     var rs=bas+pic;
     var rs1=bas+NOImg;
    // alert(rs);
     console.log(this);
    
    // if(this['event_name']!=" ")
  
      { 

         txt += '  <div class="col-md-4">';
         txt+= '<div id='+eventId+', class="card user-card ">';
         if(pic!="")
            txt+='<div class="user-image"><img src='+rs+' alt="" class="img-responsive"></div>';
             else 
                txt+='<div class="user-image"><img src='+rs1+' alt="" class="img-responsive"></div>';    
              txt+='<div class="user-info">';
                txt+='<div class="info-box">'; 
                  txt+='<div class="user-details">';

        txt += "<h3>"+this['event_name']+"</h3>";

                                    txt += "<h4>"+this['event_location']+"</h4>";
                                    txt += "<h4>"+this['event_date']+"</h4>";
      txt+='</div>';
      txt+='</div>';
      txt+='</div>';
        txt+='</div>';
          txt+='</div>'; 
     }
    

  
      }); 
       
       if(txt != "" ){
                        $("#org-event").append(txt);
                   } 
                  
                    
                   if( txt==" ")
                    alert("No records found")

                 }
                else  alert("No records found");
                 
                     },

       error: function(errorThrown){
      alert(errorThrown);
       }

       });
    //$('#rt').show();
     return false;
     });
   });
 

  </script>  
       
  </body>
</html>