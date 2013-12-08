(function($) {$.fn.sticky = function() {                
                
        var footerH = $(this).outerHeight();
        var footerW = $(".footer a").width();
        $(this).css("position","fixed");
        $(this).css("top",window.innerHeight - footerH - 5 + "px");
        $(this).css("left",window.innerWidth - footerW - 50 + "px");



};})(jQuery);

$(document).ready(function() {  
    $(".footer").sticky();
});

$(window).resize(function() {
    $(".footer").sticky();
});