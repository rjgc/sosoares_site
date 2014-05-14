$(document).ready(function() {
	var mql = window.matchMedia("screen and (max-width: 635px)")
    if (mql.matches) {
       $(".noticias ul li .row .col-md-9 button").removeClass("grow");
       $(".noticias ul li .row .col-md-9 button").addClass("shrink");
    }
});