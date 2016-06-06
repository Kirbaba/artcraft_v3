jQuery(document).ready(function($) {
		$('#fullpage').fullpage({
		sectionsColor: [],
		navigation: true,
		navigationPosition: 'left',
		responsive: 1024,

	});

	$('.mouse').click(function(e){
			e.preventDefault();
			$.fn.fullpage.moveSectionDown();
	});

});
