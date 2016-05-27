jQuery(document).ready(function($) {
		$('#fullpage').fullpage({
		sectionsColor: [],
		navigation: true,
		navigationPosition: 'left',
		navigationTooltips: ['First page', 'Second page', 'Third and last page'],
		responsiveWidth: 900,
		
	});
});




jQuery(document).ready(function($) {

	    jQuery(".home__partners_carousel").owlCarousel({    
            navigation : false, 
            items : 3,
            slideSpeed : 1000,
            paginationSpeed : 400,
            touchDrag: true,
            autoplayHoverPause: true,
            items: [3],
            navigation: true,
            navigationText : false,
            pagination : false
      });
});
/*jQuery(document).ready(function($){
    // Declare parallax on layers
    jQuery('.parallax-layer').parallax({
      mouseport: jQuery(".home__banner_title"),
      xparallax: 0.1,
      yparallax: 0.1,
      yorigin: "center"
    });
});*/

jQuery(document).ready(function($) {
    $('.home__banner').mousemove(function(e) {
     var amountMovedX = (e.pageX * -0.25 / 8);
     var amountMovedY = (e.pageY * -0.25 / 8);
    /* $(".home__banner_rectangle").css({
        'top': (amountMovedY * 0.5) + 'px ',
        'left': (amountMovedX * 0.5) + 'px '
      });*/
      $(".home__banner_rectangle").css({
        transform: 'translate(' + amountMovedY + 'px,'+ amountMovedX + 'px) ',
       MozTransform: 'translate(' + amountMovedY + 'px,'+ amountMovedX + 'px) ',
       WebkitTransform: 'translate(' + amountMovedY + 'px,'+ amountMovedX + 'px) ',
       msTransform: 'translate(' + amountMovedY + 'px,'+ amountMovedX + 'px) '
      });
     $(".home__banner_interface").css({
        'top': amountMovedY + 'px ',
        'left': amountMovedX + 'px '
      });
     $(".home__banner_text").css({
        'top': (amountMovedY * 2) + 'px ',
        'left': (amountMovedX * 2) + 'px '
      });
    });
});   /* $('.home__banner_interface').mousemove(function(e) {
     var amountMovedX = (e.pageX * -0.3 / 6);
     var amountMovedY = (e.pageY * -1.29 / 6);
     $(this).css({
        'top': amountMovedX + 'px ',
        'left': amountMovedY + 'px '
      });
    });*/
   /* $('.home__banner_text').mousemove(function(e) {
     var amountMovedX = (e.pageX * -0.3 / 6);
     var amountMovedY = (e.pageY * -1.29 / 6);
     $(this).css({
        'top': amountMovedX + 'px ',
        'left': amountMovedY + 'px '
      });
    });
});*/
