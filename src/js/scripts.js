(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
$( "#trigger" ).click(function() {
  console.log( "Handler for .click() called." );
  $(".wrapper").toggleClass('is-open');
});
	});

} ( this, jQuery ));
