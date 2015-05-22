(function($){
	"use strict";
	$(function(){

		/*------------------------------------*\
			#ON LOAD
		\*------------------------------------*/




		/*------------------------------------*\
			#Triggered events
		\*------------------------------------*/




		/*------------------------------------*\
			#RESPONSIVE
		\*------------------------------------*/

	});
})(jQuery);

/*------------------------------------*\
	#ON LOAD
\*------------------------------------*/
//Get the header height
function getHeaderHeight(){
	return $('header').height();
}





/*------------------------------------*\
	#Triggered events
\*------------------------------------*/

function toggleActionButtons(){
	//Get the header height so we can now when
	//to change the heade state
	var headerHeight = getHeaderHeight();
	//Scrolled pixels in Y axis
	var sy = scrollY();
	//Compare the two numbers, when they are the same or less
	//add fixed class to the header.
	if ( sy >= headerHeight ) {
		$('.action-buttons').addClass('opened');
	} else {
		$('.action-buttons').removeClass('opened');
	}
}

//Get the scrolled pixels in Y axis
function scrollY() {
	return $(window).scrollTop();
}

/**
 * Opens Modal
 * @param element to be shown
**/
function openModal(element){
	console.log(element);
	$(element).removeClass('hide');
	$(element+' .action-button').addClass('always-opened');
	$('body').css('overflow', 'hidden');
}

/**
 * Closes Modal
**/
function closeModal(){
	$('.modal-wrapper').addClass('hide');
	$('.modal-wrapper .action-button').removeClass('always-opened');
	$('body').css('overflow', 'visible');
}





/*------------------------------------*\
	#RESPONSIVE
\*------------------------------------*/