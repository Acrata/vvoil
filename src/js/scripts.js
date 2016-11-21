    /*global
    TweenMax, TweenLite , Power2
    */
(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
$( ".trigger" ).click(function() {
  $(".wrapper").toggleClass("is-open");
});

//Fade
$(window).load(function(){
    TweenMax.from("img.attachment-post-thumbnail,.art-info-voil, .titles-voil", 1, {opacity:0, top:"50px", ease:Power2.easeInOut});
    TweenLite.from("p,.tlab-voil", 0.5, {css:{transform:"translateX(50px)"},delay:0.3});
    document.body.scrollTop = document.documentElement.scrollTop = 0;
});
//DOM ready
	});

} ( this, jQuery ));
