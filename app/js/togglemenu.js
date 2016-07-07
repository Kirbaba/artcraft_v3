jQuery(document).ready(function($) {
	$(".navigation__menu_toggle").click(function(event) {
		event.preventDefault();
		$(this).toggleClass('navigation__menu_toggle_active');
		$(".navigation__menu").slideToggle(300);
	});
});