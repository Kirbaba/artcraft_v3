jQuery(document).ready(function($) {
	
	$(".home-projects__nav_btn").click(function(event) {
		event.preventDefault();
		$('.home-projects__nav_btn').each(function(){
			$(this).removeClass('home-projects__nav_btn_active');
		});
		$(this).addClass('home-projects__nav_btn_active');
		var target = ($(this).data('activity'));
		$('.home-projects__tabs').hide();
		$("." + target).css("display","flex");	

	});

	
	/*$(".portfolio .home-projects__tabs").css("display","none");
	$(".portfolio .show_site").css("display","block");*/
});