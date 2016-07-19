<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<div class="section home-projects" id="moveto_projects">
    <div class="intro">
        <div class="container">
            <h2>ПРОЕКТЫ</h2>
            <h4>В данном разделе представлены только избранные проекты нашей компании за период с 2004 года.</h4>
            <div class="home-projects__flex">
                <!-- open .home-projects__more_line -->
                <div class="home-projects__more_line">
                    <?php $i = 0; ?>
                    <?php foreach ( $atts['promos'] as $promo ): ?>
                        <?php if ( $i === 1 ): ?>
                            <!-- open .home-projects__more_diamond -->
                            <div class="home-projects__more_diamond">
                                <img src="<?php bloginfo( 'template_directory' ); ?>/img/diamond.png" alt=""/>
                            </div>
                        <?php endif; ?>
                        <!-- close .home-projects__more_line -->
                        <a href="<?php echo $promo['link']; ?>" class="home-projects__more">
                            <img src="<?php echo $promo['image']['url']; ?>" alt=""/>
							<span class="home-projects__more_hover">
								<span class="home-projects__more_hover_box">
									<span class="home-projects__more_type"><?php echo $promo['title']; ?></span>
									<span
                                        class="home-projects__more_btn"><span><?php echo $promo['link_title']; ?></span></span>
								</span>
							</span>
                        </a>
                        <?php $i ++; ?>
                    <?php endforeach; ?>
                </div>

                <div class="home-projects__tabs show_site">
                    <?php $sites = new WP_Query( array(
                        'category_name'  => 'sites',
                        'posts_per_page' => 3
                    ) );

                    // Цикл
                    if ( $sites->have_posts() ) :
                        while ( $sites->have_posts() ) : $sites->the_post(); ?>
                            <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>"
                               class="home-projects__tabs_item"
                               data-modal="modal__project">
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                <span class="home-projects__tabs_content">
                                    <h3><?php echo get_the_title( get_the_ID() ); ?></h3>
                                    <p><?php echo fw_get_db_post_option( get_the_ID(), 'description' ); ?>
                                        <em>&mdash;<?php echo fw_get_db_post_option( get_the_ID(), 'author' ); ?></em>
                                    </p>
                                    <button class="portfolio_btn btn-1 js_get-modal" data-modal="modal__share">
                                        <svg>
                                            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                        </svg>
                                        заказать
                                    </button>
                                </span>
                            </a>
                        <?php endwhile;
                    endif;
                    /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="home-projects__tabs show_design">
                    <?php $sites = new WP_Query( array(
                        'category_name'  => 'design',
                        'posts_per_page' => 3
                    ) );

                    // Цикл
                    if ( $sites->have_posts() ) :
                        while ( $sites->have_posts() ) : $sites->the_post(); ?>
                            <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>"
                               class="home-projects__tabs_item"
                               data-modal="modal__project">
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
                                <span class="home-projects__tabs_content">
                                    <h3><?php echo get_the_title( get_the_ID() ); ?></h3>
                                    <p><?php echo get_the_content( get_the_ID() ); ?>
                                        <em>&mdash;<?php echo fw_get_db_post_option( get_the_ID(), 'author' ); ?></em>
                                    </p>
                                    <button class="portfolio_btn btn-1 js_get-modal" data-modal="modal__share">
                                        <svg>
                                            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                        </svg>
                                        заказать
                                    </button>
                                </span>
                            </a>
                        <?php endwhile;
                    endif;
                    /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="home-projects__tabs show_smm">
                    <?php $sites = new WP_Query( array(
                        'category_name'  => 'smm',
                        'posts_per_page' => 3
                    ) );

                    // Цикл
                    if ( $sites->have_posts() ) :
                        while ( $sites->have_posts() ) : $sites->the_post(); ?>
                            <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>"
                               class="home-projects__tabs_item"
                               data-modal="modal__project">
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                <span class="home-projects__tabs_content">
                                    <h3><?php echo get_the_title( get_the_ID() ); ?></h3>
                                    <p><?php echo fw_get_db_post_option( get_the_ID(), 'description' ); ?>
                                        <em>&mdash;<?php echo fw_get_db_post_option( get_the_ID(), 'author' ); ?></em>
                                    </p>
                                    <button class="portfolio_btn btn-1 js_get-modal" data-modal="modal__share">
                                        <svg>
                                            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                        </svg>
                                        заказать
                                    </button>
                                </span>
                            </a>
                        <?php endwhile;
                    endif;
                    /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
                    wp_reset_postdata();
                    ?>
                </div>

                <nav class="home-projects__nav">
                    <ul>
                        <li>
                            <a href="#" class="home-projects__nav_btn home-projects__nav_btn_active"
                               data-activity="show_site"><span>РАЗРАБОТКА САЙТА</span></a>
                        </li>
                        <li>
                            <a href="#" class="home-projects__nav_btn"
                               data-activity="show_design"><span>ДИЗАЙН</span></a>
                        </li>
                        <li>
                            <a href="#" class="home-projects__nav_btn" data-activity="show_smm"><span>SMM</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>