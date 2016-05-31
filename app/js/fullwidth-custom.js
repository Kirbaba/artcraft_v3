jQuery(document).ready(function($) {
		$('#fullpage').fullpage({
		sectionsColor: [],
		navigation: true,
		navigationPosition: 'left',
		navigationTooltips: ['First page', 'Second page', 'Third and last page'],
		responsiveWidth: 900,
		
	});

	$('.mouse').click(function(e){
			e.preventDefault();
			$.fn.fullpage.moveSectionDown();
	});

});



