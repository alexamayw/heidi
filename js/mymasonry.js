/**
 * mymasonry.js
 * 
 * Initializing masonry grid for widget areas.
 */


( function( $ ) {

$(window).on("load", function() {
    $('.widget-area').masonry({
	itemSelector: '.widget'
    });
});

} ( jQuery ));