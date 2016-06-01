jQuery(document).ready(function($) {
		$('#fullpage').fullpage({
		sectionsColor: [],
		navigation: true,
		navigationPosition: 'left',
		responsiveWidth: 900,

	});

	$('.mouse').click(function(e){
			e.preventDefault();
			$.fn.fullpage.moveSectionDown();
	});

});
