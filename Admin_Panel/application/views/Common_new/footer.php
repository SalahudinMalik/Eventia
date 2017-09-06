 
 <script src="<?php echo base_url()."org_assessts/js/jquery.min.js"; ?>"></script>
 <script src="<?= base_url('org_assessts/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('org_assessts/js/material.min.js');?>"></script>
    <script src="<?=base_url('org_assessts/js/nouislider.min.js');?>"></script>
    <script src="<?=base_url('org_assessts/js/moment.js');?>"></script>
    <script src="<?=base_url('org_assessts/js/bootstrap-datepicker.js');?>"></script>
    <script src="<?=base_url('org_assessts/js/material-kit.js');?>"></script>
    <script src="<?=base_url('org_assessts/js//jquery.dropdown.js');?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js" ></script>
    <script src="<?=base_url('org_assessts/js/scripts.js');?>"></script>
 <script>
 $(function() {
 	$('#save').hide();
  $('#camera-open').hide();
   $('.form-info-change .form-control').addClass('non-edit');
    $('#edit-button').click(function(event) {
        
        event.preventDefault();
        $('.form-info-change .form-control').removeClass('non-edit');
        $(this).hide();
        $('#save').show();
         $('#camera-open').show();
    });
});
</script>
<script type="text/javascript">


      $(document).ready(function() {

            $("#save").click(function(event){
        
           event.preventDefault();
    var formData = new FormData($("#submit_form")[0]);
     
    $.ajax({
        url: '<?php echo base_url('ajax_check/update_profile'); ?>',
        type: 'POST',
        data: formData,
       // async: false,
         contentType: false,
        processData: false,
        complete: function (result) {
        
          if(result)
          {
            location.reload();
             $('#result').html(result.responseText);

          }
        //alert(msg);

        },
       // cache: false,
       
    });
        $(this).hide();
        $('#edit-button').show();

});
    });
        </script>
        <script>
          $(document).ready(function() {

            $("#event_submit").click(function(event){
        
           event.preventDefault();
    var formData = new FormData($("#create_form")[0]);
     
    $.ajax({
        url: '<?php echo base_url('organiser/organiser/store_event'); ?>',
        type: 'POST',
        data: formData,
       // async: false,
         contentType: false,
        processData: false,
        success: function (result) {
        var r=result.localeCompare("event created successfully");
        if(r==0)
         { 
          $('#resultshow').append(result);
          location.reload();
         // $('#event-details').hide();
        }
        else
         // if(result)
           $('#resultshow').append(result);
     // alert(result);
        },
       // cache: false,
       
    });
    

});
    });
        </script>
        
         <script>
          $(document).ready(function() {

            $("#add_guest").click(function(event){
        
           event.preventDefault();
    var formData = new FormData($("#gueste_form")[0]);
     
    $.ajax({
        url: '<?php echo base_url('onsight_reg/add_new_guest'); ?>',
        type: 'POST',
        data: formData,
       // async: false,
         contentType: false,
        processData: false,
        complete: function (result) {
        
          if(result)
             $('#showguest').html(result.responseText);
       // alert(result);

        },
       // cache: false,
       
    });
    

});
    });
        </script>
        <script>
         
         function readURL(input) {
          $('#pic').hide()
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                        $('#pic').show();
                };

                reader.readAsDataURL(input.files[0]);
            }
        } 
        
</script>
        <script>
        $(document).ready(function(){
          $('#vw').hide();
         
          $(".stu").click(function(event){
           // event.preventDefault();
           $("#existing").html('');
             var id = $(this).attr('id');
            //alert('hello');
             $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('onsight_reg/get_existing_guests'); ?>',
                   //url:'<?php //echo base_url('chk/get_awaiting_events');?>',
                   data : {"id":id},
 //contentType: "application/json; charset=utf-8",
                 dataType: 'json',
                 success: function(res){
                  if(res!=""){
                    //  console.log(res.user_name);
                    // $.each($.parseJSON(res), function() {
     // alert(this['status']);
      var txt=" ";
      var no_record="no record found";
    console.log(res);
  
                $.each(res, function() {
  
    /// do stuff
    if(this['user_name']!=" " ||this['email']!=" " ||this['phone']!=" ")
  {
    var u_id=this['user_id'];
   //var bas= "http://198.24.190.34/~ifisolco/attendo/";
     var bas="http://localhost/Attendo/";
     var NoImg="pictures/NoImage.png";
    var pic=this['photo'];
  var p= bas+pic;
  var p1=bas+NoImg;
    console.log(u_id);
                          txt +='<div  class="col-md-12">';
                            txt += '<div id="u_id" class="card user-card nht"><a href="#event-details" data-toggle="modal">';
                            if(pic!="")
                              txt += '<div class="user-image"><img  src='+p+' alt="" class="img-responsive"></div>';
                             else
                              txt += '<div class="user-image"><img  src='+p1+' alt="" class="img-responsive"></div>';
                               txt += '<div class="user-info">';
                               txt +=  '<div class="banner-container">';
                                 txt +=  '<div class="banner"><span class="text">Manual</span></div>';
                                txt +=  '</div>';
                                 txt += '<div class="info-box">';
                                   txt += '<div class="user-details">';
                                    txt += "<h3>"+this['user_name']+"</h3>";
                                    txt += "<h4>"+this['email']+"</h4>";
                                    txt += "<h4>"+this['phone']+"</h4>";
                                   txt += '</div>';
                                 txt += '</div>';
                               txt += '</div>';
                                txt += '</a>';
                             txt += '</div>';
                           txt += '</div>';
}
else console.log(no_record);
  
});
                    if(txt != " " ){
                     // alert(txt);
                     // $("#new").hide();
                     // $("#show_guest").hide();
                      $('#existing').show();
                        $("#existing").append(txt);
                         //$("#abz").hide();
                       
                   } 
                
              
        
                 // }); 
                   // $('#rs').html(result.responseText);
                  }
                 },
          });
        });
        }); 
        </script> 

        <script>
        $(document).ready(function(){
          $(".abc").click(function(event){
            event.preventDefault();
             var id = $(this).attr('id');
            //alert('hello');
             $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('ajax_check/event_detail'); ?>',
                   //url:'<?php echo base_url('chk/get_awaiting_events');?>',
                   data : {"id":id},
 //contentType: "application/json; charset=utf-8",
                 dataType: 'json',
                 complete: function(result){
                  if(result){
                    $('#event-details').html(result.responseText);
                  }
                  
                   // $('#rs').html(result.responseText);
                  
                 },
          });
        });
        });
        </script>
         <script>
        
          $(".onsight_modal").click(function(event){
            event.preventDefault();
             var id = $(this).attr('id');
            alert("hello");
             $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('onsight_reg/get_user_detail'); ?>',
                   //url:'<?php echo base_url('chk/get_awaiting_events');?>',
                   data : {"id":id},
 //contentType: "application/json; charset=utf-8",
                 dataType: 'json',
                 complete: function(result){
                  if(result){
                    $('#onsight_show').html(result.responseText);
                  }
                  
                   // $('#rs').html(result.responseText);
                  
                 },
          });
        });
        
        </script>
         <script>
        $(document).ready(function(){
          $(".ijk").click(function(event){
            event.preventDefault();
             var id = $(this).attr('id');
            //alert('hello');
             $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('ajax_check/past_event_detail'); ?>',
                   //url:'<?php echo base_url('chk/get_awaiting_events');?>',
                   data : {"id":id},
 //contentType: "application/json; charset=utf-8",
                 dataType: 'json',
                 complete: function(result){
                  if(result){
                    $('#event-detail3').html(result.responseText);
                  }
                  
                   // $('#rs').html(result.responseText);
                  
                 },
          });
        });
        });
        </script>
         <script>
        $(document).ready(function(){
          $(".def").click(function(event){
            event.preventDefault();
             var id = $(this).attr('id');
            //alert('hello');
             $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('ajax_check/future_event_detail'); ?>',
                   //url:'<?php echo base_url('chk/get_awaiting_events');?>',
                   data : {"id":id},
 //contentType: "application/json; charset=utf-8",
                 dataType: 'json',
                 complete: function(result){
                  if(result){
                    $('#event-detail2').html(result.responseText);
                  }
                  
                   // $('#rs').html(result.responseText);
                  
                 },
          });
        });
        });
        </script>
          <script>  
        
   $(document).ready(function() {
       $('#multi_list').hide();
     $('#event_category').change(function(){
        selectedValue = $( "#event_category option:selected" ).val();
         var r=selectedValue.localeCompare("public");
         if(r==0){
          $('#multi_list').show();
        }
        else 
          $('#multi_list').hide();
             

   });

   });
    </script>
        
        <script>  
        
   $(document).ready(function() {
    
    $('#rt').hide();
    $('#uv').hide();
     $('#select_event').change(function() {
    $('#arrived').html('');
    $('#registered').html('');
    var formData = { 'selectedValue' : $( "#select_event option:selected" ).val() };
   
    $.ajax({
       type: 'POST',  
       url: '<?php echo base_url('onsight_reg/get_selected_value'); ?>',

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
      var u_id=this['user_id'];
     var bas="http://localhost/Attendo/";
   //  var bas="http://198.24.190.34/~ifisolco/attendo/";
    var NoImg="pictures/NoImage.png";
     var rs=bas+pic;
     var rs1=bas+NoImg;
    // alert(rs);
     console.log(this);
      var r=this['status'].localeCompare("joining");
    // alert(r);
     if(r==1) 
      { 

         txt += '  <div class="col-md-4">';
         txt+= '<div id='+u_id+', class="card user-card onsight_modal">';
         if(pic!="")
            txt+='<div class="user-image"><img src='+rs+' alt="" class="img-responsive"></div>';
             else 
                txt+='<div class="user-image"><img src='+rs1+' alt="" class="img-responsive"></div>';    
              txt+='<div class="user-info">';
                txt+='<div class="info-box">';
                  txt+='<div class="user-details">';
        txt += "<h3>"+this['user_name']+"</h3>";
                                    txt += "<h4>"+this['email']+"</h4>";
                                    txt += "<h4>"+this['phone']+"</h4>";
      txt+='</div>';
      txt+='</div>';
      txt+='</div>';
        txt+='</div>';
          txt+='</div>'; 
     }
     else 
      {
         txt1 += '  <div class="col-md-4">';
         txt1+= '<div id='+u_id+', class="card user-card onsight_modal">';
         if(pic!="")
            txt1+='<div class="user-image"><img src='+rs+' alt="" class="img-responsive"></div>';
             else
              txt1+='<div class="user-image"><img src="pictures/NoImage.png" alt="" class="img-responsive"></div>';        
              txt1+='<div class="user-info">';
                txt1+='<div class="info-box">';
                  txt1+='<div class="user-details">';
                  txt1 += "<h3>"+this['user_name']+"</h3>";
                  txt1 += "<h4>"+this['email']+"</h4>";
                  txt1 += "<h4>"+this['phone']+"</h4>";
      txt1+='</div>';
      txt1+='</div>';
      txt1+='</div>';
      
        txt1+='</div>';
          txt1+='</div>'; 
     }

     // name += this['user_name']+ "<br/>"; 
      }); 
       
       if(txt != "" ){
                        $("#arrived").append(txt1);
                   } 
                   if(txt1 != "" ){
                        $("#registered").append(txt);
                   } 
                   if(txt1==" " && txt==" ")
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
 <!-- //  for(var i=0;i<length;i++){

    // alert(json.first_name);
     // var json = $.parseJSON(JSON.stringify(res));
     // alert(json.first_name);
   // alert(Object.keys(data.res[i]).length);
   // alert(object);
     // console.log(res);
  // }
    
     /* var name ='';
     $.each($.parseJSON(res), function() {
      

     console.log(this);
     
      name += this['user_name']+ "<br/>"; 
      });   
       alert(name);*/
    //  var json = $.parseJSON(JSON.stringify(res));
    //  alert(json);
//alert(json[0].first_name);
//alert(json[0].att_status);
    //  console.log(res.user_id);
   // var responsetext = res.responseText;
    // alert(responsetext);
    // var len=res.length;
    // var t=res.
    // alert(len);
   /*  var txt=" ";
   //  ts=res.result["first_name"];
   //  alert(ts);
    // var t=res;
    // alert(t);
    // for (var i=0;i<len;i++){
    //  if(json.first_name || json.last_name || json.photo)
    //  {
         txt += '  <div class="col-md-4">';
         txt+= '<div class="card user-card">';
            txt+='<div class="user-image"><img src="<?=base_url()?>.json.photo" alt="" class="img-responsive"></div>';
                    
              txt+='<div class="user-info">';
                txt+='<div class="info-box">';
                  txt+='<div class="user-details">';
      txt += "<h3>"+json.first_name+"</h3><h4>"+json.last_name+"</h4>";
      txt+='</div>';
      txt+='</div>';
      txt+='</div>';
        txt+='</div>';
          txt+='</div>';
 //  } 
// }*/
    // alert(responsetext);
      // $('#arrived').html(res.responseText);
      // $('#arrived').html(responsetext.first_name);
    
    // var r=json.att_status.localeCompare("joined");
    // alert(r);
  

     //   if(txt != ""){
     //                   $("#registered").append(txt);
      //              }
      //  else if(json.att_status=="joining" && txt!="")
       //   $("#registered").append('txt');

    /*   },
       error: function(errorThrown){
      alert(errorThrown);
       }

       });
    //$('#rt').show();
     return false;
     });
   });*/-->
  


  </body>
</html>
 
