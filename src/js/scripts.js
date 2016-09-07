(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
$( "#trigger" ).click(function() {
  $(".wrapper").toggleClass("is-open");
});
	});

} ( this, jQuery ));
