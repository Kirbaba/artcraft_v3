<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<!-- open .section home-order -->
<div class="section home-order">
    <!-- open .intro -->
    <div class="intro">
        <!-- open .container -->
        <div class="container">
            <!-- open .home-order__box -->
            <div class="home-order__box">
                <h2><?php echo $atts['title']; ?></h2>
                <a href="#" class="home-order_btn js_get-modal"
                   data-modal="modal__share"><span><?php echo $atts['link_title']; ?></span></a>
                <small><?php echo $atts['description']; ?></small>
            </div>
            <!-- close .home-order__box -->
        </div>
        <!-- close .container -->
    </div>
    <!-- close .intro -->
</div>
<!-- close .section home-order -->