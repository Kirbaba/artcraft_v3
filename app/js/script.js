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
    $(".js_service__item").hover(function (e) {
        e.preventDefault();
    var this_price = $(this).data("price");
    $(this).parent().parent().prev().find(".js_price").html(this_price);
        return false;
  });
    $(document).on('click', '.js_service__item', function () {
        return false;
    });
});

function imageSize() {
 
   jQuery(".img-wrap").each(function(i, el) {
    var img = new Image();
    var obj = jQuery(this);
    var link = obj.attr("href");
    img.onload = function() {
        var size = (this.width + 'x' + this.height);
        obj.parent().attr('data-size', size);
    };   
    img.src = link;
    
   });
}




