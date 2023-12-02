$(document).ready(function() {
    $('autoWidth').lighSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('autoWidth').removeClass('cS-hidden');
        }
    });
});