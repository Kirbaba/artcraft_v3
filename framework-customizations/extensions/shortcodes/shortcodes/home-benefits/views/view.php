<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<section class="home-services" id="home-services">
        <div class="intro">
            <!-- open .container -->
            <div class="container">
                <h3>#Я<strong>ARTCRAFT</strong></h3>
                <!-- open .home-services_item -->
                <!-- open .home-services__flex -->
                <div class="home-services__flex">
                    <?php foreach ( $atts['benefits'] as $benefit ): ?>
                        <div class="home-services_item">
                            <!-- open .home-services_icon -->
                            <div class="home-services_icon">
                                <img src="<?php echo $benefit['image']['url']; ?>" alt="<?php echo get_post_meta( $benefit['image']['attachment_id'], '_wp_attachment_image_alt', true); ?>"/>
                            </div>
                            <!-- close .home-services_icon -->
                            <!-- open .home-services_title -->
                            <div class="home-services_title">
                                <h4><?php echo $benefit['title']; ?></h4>
                            </div>
                            <!-- close .home-services_title -->
                            <!-- open .home-services_price -->
                            <h5 class="home-services_price">
                                от <strong class="js_price">X XXX</strong> ₽
                            </h5>
                            <!-- close .home-services_price -->
                            <!-- open .home-services_list -->
                            <ul class="home-services_list">
                                <?php foreach ( $benefit['prices'] as $price ): ?>
                                    <li><a href="#" class="js_service__item"
                                           data-price="<?php echo $price['mount']; ?>"><?php echo $price['price_title']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <!-- close .home-services_list -->
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- close .home-services__flex -->
            </div>
            <!-- close .container -->
        </div>
</section>