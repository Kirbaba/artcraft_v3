<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>


<div class="home-banner" id="banner">
    <!-- open .container -->
    <div class="container">
        <!-- open .home-banner_title -->
        <div class="home-banner_title">
            <!-- open .home-banner_rectangle -->
            <h2 class="home-banner_text">ART CRAFT</h2>
            <div class="home-banner_rectangle">
                <img class="home-banner_interface" src="<?php bloginfo( 'template_directory' ); ?>/img/interface.png"
                     alt=""/>
            </div>
            <!-- close .home-banner_rectangle -->
            <!-- open .home-banner_desc -->
            <h3 class="home-banner_desc">DESIGN & WEB</h3>
            <!-- close .home-banner_desc -->
            <a data-scroll href="#moveto_about" class="mouse animated fadeInUp" data-top=" opacity:1;  "
               data-top-bottom=" opacity:0; " data-anchor-target="header">
                <div class="scroll"></div>
            </a>
        </div>
        <!-- close .home-banner_title -->
        <a href="<?php echo $atts['more_link']; ?>" class="home-banner_btn btn-1">
            <svg>
                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
            </svg>
            УЗНАТЬ БОЛЬШЕ
        </a>
    </div>        <!-- close .container -->

</div>