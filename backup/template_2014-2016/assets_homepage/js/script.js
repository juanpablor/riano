// global. currently active menu item 
var current_item = 0;

// few settings
var section_hide_time = 1300;
var section_show_time = 1300;

// jQuery stuff
jQuery(document).ready(function($) {

	// Switch section
	$("a", '.mainmenu').click(function() 
	{
		if( ! $(this).hasClass('active') ) { 
			current_item = this;
			// close all visible divs with the class of .section
			$('.section:visible').fadeOut( section_hide_time, function() { 
				$('a', '.mainmenu').removeClass( 'active' );  
				$(current_item).addClass( 'active' );
				var new_section = $( $(current_item).attr('href') );
				new_section.fadeIn( section_show_time );
			} );
		}
		return false;
	});	


	$(function() {
    var images = ['body1.jpg', 'body2.jpg', 'body3.jpg', 'body4.jpg', 'body5.jpg', 'body6.jpg', 'body7.jpg', 'body8.jpg', 'body9.jpg', 'body10.jpg'];
    $('html').css({'background-image': 'url(assets_homepage/images/' + images[Math.floor(Math.random() * images.length)] + ')'});
   });	
});