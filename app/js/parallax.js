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
