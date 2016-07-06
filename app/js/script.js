jQuery(document).ready(function($) {
  $('.navigation__lang_active').on("click", function(event) {
		event.preventDefault();	
    $('.navigation__lang_list').slideToggle();
  });

  $('.navigation__lang_val').on("click", function(event) {
  		event.preventDefault();	
  		var lang = $(this).text();
  		$('.navigation__lang_active').text(lang);
  		$('.navigation__lang_list').slideUp();
  });
  $(".js_service__item").hover(function(event) {
    event.preventDefault(); 
    var this_price = $(this).data("price");
    $(this).parent().parent().prev().find(".js_price").html(this_price);
  });
});
