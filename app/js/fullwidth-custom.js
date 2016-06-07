jQuery(document).ready(function($) {
		$('#fullpage').fullpage({
		sectionsColor: [],
		navigation: true,
		navigationPosition: 'left',
		responsive: 1024,
		menu: '#navmenu',
		hideScrollbars: true,
		fadeScrollbars: true,
		loopBottom: true,

	});

	$('.mouse').click(function(e){
			e.preventDefault();
			$.fn.fullpage.moveSectionDown();
	});
	$('#moveToProjects').click(function(e){
		e.preventDefault();
		$.fn.fullpage.moveTo(4);
	});
	$('#moveToTop').click(function(e){
		e.preventDefault();
		$.fn.fullpage.moveTo(1);
	});
	$('#moveToAbout').click(function(e){
		e.preventDefault();
		$.fn.fullpage.moveTo(5);
	});

});
