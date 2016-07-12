<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<div class="section home-steps">
    <div class="intro">
        <div class="container">
            <div class="home-steps__title">
                <h2><?php echo $atts['title']; ?></h2>
            </div>
            <!-- Swiper -->
            <div class="swiper-container home-steps__container">
                <div class="swiper-wrapper">
                    <?php foreach ( $atts['steps'] as $step ): ?>
                        <div class="swiper-slide home-steps__item">
                            <div class="home-steps__item_thumb" data-swiper-parallax="-400">
                                <img src="<?php echo $step['image']['url']; ?>" alt=""/>
                            </div>
                            <div class="home-steps__item_description">
                                <!-- open .flexw -->
                                <div class="flexw">
                                    <h3 class="home-steps__item_description_title" data-swiper-parallax="-100">
                                        <?php echo $step['title']; ?></h3>
                                    <div class="home-steps__item_description_text" data-swiper-parallax="-300">
                                        <p><?php echo $step['desc']; ?></p>
                                    </div>
                                    <a href="#" class="home-steps__item_description_btn js_get-modal"
                                       data-modal="modal__share"><span>Оформить заказ</span></a>
                                </div>
                                <!-- close .flexw -->

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-black"></div>
                <!-- Add Navigation -->
                <!-- <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div> -->
            </div>
        </div>
    </div>
</div>