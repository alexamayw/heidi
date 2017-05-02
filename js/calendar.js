/**
 * calendar.js
 * 
 * Adds class to style td elements in the sidebar calendar that are followed by a link.
 */


( function( $ ) {

$(document).ready( function() {
	$('.widget_calendar').find('td > a').closest('td').addClass('date_with_link');
});

} ( jQuery ));