jQuery(document).ready(function($) {
/*  var scene = document.getElementById('section0');
  var parallax = new Parallax(scene, {
    calibrateX: false,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 40,
    limitY: 50,
    frictionX: 0.2,
    frictionY: 0.8,
    /*scalarX: 2,
    scalarY: 8,
    
    originX: 0.0,
    originY: 1.0
  });*/

 
/*  $('.home__banner_rectangle').mouseParallax({ moveFactor: 5});
  $('.home__banner_interface').mouseParallax({ moveFactor: 3 });
   $('.home__banner_text').mouseParallax({ moveFactor: 2 });*/
}); 

/*jQuery(document).ready(function($){
    // Declare parallax on layers
    jQuery('.parallax-layer').parallax({
      mouseport: jQuery(".home__banner_title"),
      xparallax: 0.1,
      yparallax: 0.1,
      yorigin: "center"
    });
});*/

jQuery(document).ready(function($) {
    $('.home__banner').mousemove(function(e) {
     var amountMovedX = (e.clientX * -0.25 / 8);
     var amountMovedY = (e.clientY * -0.25 / 8);
      $(".home__banner_rectangle").css({
        transform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       MozTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       WebkitTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       msTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) '
      });
     $(".home__banner_interface").css({
        /*'top': amountMovedY + 'px ',
        'left': amountMovedX + 'px '*/
        transform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       MozTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       WebkitTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       msTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) '
      });
     $(".home__banner_text").css({
        /*'top': (amountMovedY * 2) + 'px ',
        'left': (amountMovedX * 2) + 'px '*/
        transform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       MozTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       WebkitTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) ',
       msTransform: 'translate(' + amountMovedX + 'px,'+ amountMovedY + 'px) '
      });
    });
});   

/* $('.home__banner_interface').mousemove(function(e) {
     var amountMovedX = (e.pageX * -0.3 / 6);
     var amountMovedY = (e.pageY * -1.29 / 6);
     $(this).css({
        'top': amountMovedX + 'px ',
        'left': amountMovedY + 'px '
      });
    });*/
   /* $('.home__banner_text').mousemove(function(e) {
     var amountMovedX = (e.pageX * -0.3 / 6);
     var amountMovedY = (e.pageY * -1.29 / 6);
     $(this).css({
        'top': amountMovedX + 'px ',
        'left': amountMovedY + 'px '
      });
    });
});*/