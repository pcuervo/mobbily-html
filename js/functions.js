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

function fixedHeader(){
	//Get the header height so we can now when
	//to change the heade state
	var headerHeight = getHeaderHeight();
	//Scrolled pixels in Y axis
	var sy = scrollY();
	//Compare the two numbers, when they are the same of less
	//add fixed class to the header.
	if ( sy >= headerHeight ) {
		//Get the window height so we now how to position
		//the header at the bottom
		var windowHeight = $(window).outerHeight();
		//Substract the header height from the window height
		//and apply it as its top
		var topHeader =  windowHeight - headerHeight;
		$('.header-wrapper').addClass('header-wrapper--fixed').css('top', topHeader);
		//setHeaderHeightPadding('.footer-wrapper', 'bottom');
	} else {
		$('.header-wrapper').removeClass('header-wrapper--fixed').css('top', 0);
		//setPadding('.footer-wrapper', 'bottom', 0);
	}
}

//Get the scrolled pixels in Y axis
function scrollY() {
	return $('.content-wrapper').scrollTop();
}




/**
 * Opens Modal
 * @param element
**/
function openModal(element){
	$(element).removeClass('hide');
}

/**
 * Closes Modal
 * @param element to be closed
**/
function closeModal(element){
	$('.modal-wrapper').addClass('hide');
}





/*------------------------------------*\
	#RESPONSIVE
\*------------------------------------*/