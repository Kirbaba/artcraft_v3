jQuery(document).ready(function($) {
	$(document).on("click", ".js_get-modal", function(event) {
		event.preventDefault();
		var modal = ($(this).data('modal'));
		$("." + modal).show();
		$("." + modal).append('<div class="modal_active"></div>');
		$(".modal__box").slideDown().addClass('modal__box_visible');
	});

	$(document).on("click", ".modal_active", function(event) {
		event.preventDefault();
		$(".modal__box").slideUp().removeClass('modal__box_visible');
		$(".modal").hide();
		$(this).remove();
		 if( event.keyCode === 27 ) {            
            return false;
        }

	});
	$(document).on("click", ".modal_close", function(event) {
		event.preventDefault();
		$(".modal__box").slideUp().removeClass('modal__box_visible');
		$(".modal").hide();
	});

	/*$(document).on("click", ".home-projects__tabs_item", function(event) {
		event.preventDefault();
		var modal = ($(this).data('modal'));
		$("." + modal).show(500);
		$(".modal__box").slideDown().addClass('modal__box_visible');
		var image = $(this).attr("href");
		console.log('image: ' + image);
		$(".modal__project_image-box").append('<img alt="" />').delay(2000);
		$(".modal__project_image-box img").attr("src", image);
		var content = $(this).children(".home-projects__tabs_content").html();
		$(".modal__project_content").append('<div class="modal__project_content_wrap">' + content + '</div>').delay(2000);
	});*/

	$(document).on("click", ".modal__project_close", function(event) {
		event.preventDefault();
		$(".modal__box").slideUp().removeClass('modal__box_visible');
		$(".modal").hide(200);
		$(".modal__project_image-box img").remove();
		$(".modal__project_content_wrap").remove();
	});

	 $(document).keydown(function(e) {
	 	if(".modal".length != 0) {
	 		console.log('true');
	 		if( e.keyCode === 27 ) {
	            $(".modal__box").slideUp().removeClass('modal__box_visible');
				$(".modal").hide();
				$(".modal_active").remove();
	        }
	 	}        
    });


});