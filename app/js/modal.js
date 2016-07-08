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