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

// $(function() {
//     $('#toggle-password').on('click', function(event) {
//         event.preventDefault();
//         $('.form-password').slideToggle(400);
//         $('.form-info-change').hide();
//     });
//     $('#toggle-update-info ').on('click', function(event) {
//         event.preventDefault();
//         $('.form-info-change').slideToggle(400);
//         $('.form-password').hide();
//     });
// });


/*----------  Dropdown  ----------*/

$(function() {
    $("select").dropdown({ "autoinit": "select" });
});


/*----------  Datepicker  ----------*/

jQuery(document).ready(function($) {
    $('.datepicker').datepicker({
        weekStart: 1,
    });

});


/*----------  Map  ----------*/

jQuery(document).ready(function($) {
    function initMap() {
        var mapDiv = document.getElementById('event-map');
        var map = new google.maps.Map(mapDiv, {
            center: { lat: 44.540, lng: -78.546 },
            zoom: 8
        });
    }
});
