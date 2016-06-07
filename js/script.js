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

jQuery(document).ready(function($) {

	    jQuery(".home-partners_carousel").owlCarousel({
            navigation : false,
            items : 3,
            slideSpeed : 1000,
            paginationSpeed : 400,
            touchDrag: true,
            autoplayHoverPause: true,
            items: [3],
            navigation: true,
            navigationText : false,
            pagination : false
      });
});

jQuery(document).ready(function($) {
    $('.home-banner').mousemove(function(e) {
     var amountMovedX = (e.clientX * -0.25 / 8);
     var amountMovedY = (e.clientY * -0.25 / 8);
      $(".home-banner_rectangle").css({
        transform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       MozTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       WebkitTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       msTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) '
      });
     $(".home-banner_interface").css({
        /*'top': amountMovedY + 'px ',
        'left': amountMovedX + 'px '*/
        transform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       MozTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       WebkitTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       msTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) '
      });
     $(".home-banner_text").css({
        /*'top': (amountMovedY * 2) + 'px ',
        'left': (amountMovedX * 2) + 'px '*/
        transform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       MozTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       WebkitTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       msTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) '
      });
    });
});


jQuery(document).ready(function($) {
 
    particlesJS("particles-js", {
      "particles": {
    "number": {
      "value": 120,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#00abb1"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#00abb1"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.8,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3.945738208161363,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 55.14485514485514,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 3,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
    }); 
});

/* ---- particles.js config ---- */






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
});
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
});

document.addEventListener("DOMContentLoaded", ready);
function ready() {
  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    parallax: true,
    speed: 600,
    watchSlidesProgress: true,
    grabCursor: true,
  });
}
