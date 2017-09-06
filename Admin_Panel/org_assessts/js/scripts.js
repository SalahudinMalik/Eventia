/*----------  Sidebar Toggle  ----------*/

$(function() {
    $('#sidebar-toggle').click(function(e) {
        e.preventDefault();
        $('aside').addClass('toggled');
    });
    $(' #sidebar-close').on('click', function(event) {
        event.preventDefault();
        $('aside').removeClass('toggled');
    });
});

/*----------  Sidebar Form  ----------*/

$(function() {
    $('#toggle-password').on('click', function(event) {
        event.preventDefault();
        $('.form-password').slideToggle(400);
        $('.form-info-change').hide();
    });
    $('#toggle-update-info ').on('click', function(event) {
        event.preventDefault();
        $('.form-info-change').slideToggle(400);
        $('.form-password').hide();
    });
});



/*----------  Dropdown  ----------*/

$(function() {
    $("select").dropdown({ "autoinit": "select" });

});



/*----------  Form Edit Toggle  ----------*/
   
 /*$(function() {

   $('.form-info-change .form-control').addClass('non-edit');
    $('#edit-button').click(function(event) {
        
        event.preventDefault();
        $('.form-info-change .form-control').removeClass('non-edit');
        $(this).text('update Info');
    });
});
</script>
<script>
 $(function(){
    $('#save').click(function(event){
        event.preventDefault();
        $.ajax({
                url: '<?php echo base_url('ajax_check/update_profile'); ?>',
                type: 'POST',
                dataType: 'json',
                data: $("#submit_form").serialize(),
            })
            .done(function() {
                //console.log("success");
                 $('#result').html("data send");
            })
            .fail(function() {
               // console.log('not send');
                $('#result').html("not sent");
            })
            // .always(function() {
            //     console.log("complete");
    
 
            
            


    });


});
 </script>



/* $(function() {

   $('.form-info-change .form-control').addClass('non-edit');
    $('#edit-button').click(function(event) {
        
        event.preventDefault();
        $('.form-info-change .form-control').removeClass('non-edit');
        $(this).text('update Info');
        $.ajax({
                url: "<?=base_url()?>"+"chk/a",
                type: 'POST',
                dataType: 'json',
                data: $("#submit_form").serialize(),
            })
            .done(function() {
                console.log("success");
            })
            .fail(function() {
                console.log('not send');
            })
            // .always(function() {
            //     console.log("complete");
            
            


    });


});*/

 /*$(function() {

   $('.form-info-change .form-control').addClass('non-edit');
    $('#edit-button').click(function(event) {
        
        event.preventDefault();
        $('.form-info-change .form-control').removeClass('non-edit');
        $(this).text('update Info');
         })
     })

 */



/*----------  Event type Add Toggle  ----------*/


$(function() {
    $('#add-event-type').click(function(event) {
        event.preventDefault();
        $('.form-group.add-event').slideToggle();
    });
});


$(function() {
    $('#add-org').click(function(event) {
        event.preventDefault();
        $('.form-group.add-org').slideToggle();
    });
});


$(document).ready(function() {
    $('#datepicker').datepicker({
        weekStart: 1
    });
});



/*----------  Map  ----------*/

// jQuery(document).ready(function($) {
//     function initMap() {
//         var mapDiv = document.getElementById('event-map');
//         var map = new google.maps.Map(mapDiv, {
//             center: { lat: 44.540, lng: -78.546 },
//             zoom: 8
//         });
//     }
// });
