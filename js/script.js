jQuery(document).ready(function($) {
		$('#fullpage').fullpage({
		sectionsColor: [],
		navigation: true,
		navigationPosition: 'left',
		navigationTooltips: ['First page', 'Second page', 'Third and last page'],
		responsiveWidth: 900
	});
});
jQuery(document).ready(function($){
    // Declare parallax on layers
    jQuery('.parallax-layer').parallax({
      mouseport: jQuery(".home__banner_title"),
      decay: 0.1,
      xparallax: 0.15,
      yparallax: 0.15
    });
});
