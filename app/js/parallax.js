jQuery(document).ready(function($){
    // Declare parallax on layers
    jQuery('.parallax-layer').parallax({
      mouseport: jQuery(".home__banner_title"),
      decay: 0.1,
      xparallax: 0.15,
      yparallax: 0.15
    });
});