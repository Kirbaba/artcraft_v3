<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .particles -->
<div class="box-part" id="particles-js">
    <div class="home-partners" id="moveto_about">
        <!-- open .container -->
        <div class="container">
            <h2><?php echo $atts['title']; ?></h2>
            <!-- open .home-partners__shares -->
            <div class="home-partners__shares">
                <!-- open .home-partners__shares_icon -->
                <div class="home-partners__shares_icon">
                    <img src="<?php echo $atts['icon']['url']; ?>" alt=""/>
                </div>
                <!-- close .home-partners__shares_icon -->
                <!-- open .home-partners__shares_desc -->
                <div class="home-partners__shares_desc">
                    <h3>
                        <?php echo $atts['description']; ?>
                    </h3>
                    <a href="#" class="home-partners__shares_desc_btn js_get-modal"
                       data-modal="modal__share"><span><?php echo $atts['link_title']; ?></span></a>
                </div>
                <!-- close .home-partners__shares_desc -->
            </div>
            <!-- close .home-partners__shares -->
        </div>
        <img class="home-partners_mockup" src="<?php echo $atts['image']['url']; ?>" alt=""/>
    </div>
</div>