<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<div class="section home-projects" id="portfolio">
    <div class="intro">
        <div class="container">
            <h2><?php echo $atts['title']; ?></h2>
            <h4><?php echo $atts['subtitle']; ?></h4>
            <div class="home-projects__flex">
                <!-- open .home-projects__more_line -->
                <div class="home-projects__more_line">
                    <?php $i = 0; ?>
                    <?php foreach ( $atts['promos'] as $promo ): ?>
                        <?php if ( $i === 1 ): ?>
                            <!-- open .home-projects__more_diamond -->
                            <div class="home-projects__more_diamond">
                                <img src="<?php bloginfo( 'template_directory' ); ?>/img/diamond.png" alt="diamond"/>
                            </div>
                        <?php endif; ?>
                        <!-- close .home-projects__more_line -->
                        <a href="<?php echo $promo['link']; ?>" class="home-projects__more">
                            <img src="<?php echo $promo['image']['url']; ?>" alt="<?php echo get_post_meta( $promo['image']['attachment_id'], '_wp_attachment_image_alt', true); ?>"/>
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
                    <?php $sites = $atts['sites_thumbs'];
                    if ( !empty($sites) ) :
                        foreach($sites as $site) :  ?>
                            <a href="/category/sites" class="home-projects__tabs_item">
                                <?php if(isset($site['url'])): ?>
                                    <img src="<?php echo $site['url']; ?>" alt="">
                                <?php endif; ?>
                            </a>
                        <?php endforeach;
                    endif; ?>
                </div>
                <div class="home-projects__tabs show_design">
	                <?php $designs = $atts['design_thumbs'];
	                if ( !empty($designs) ) :
		                foreach($designs as $design) :  ?>
			                <a href="/category/design" class="home-projects__tabs_item">
				                <?php if(isset($design['url'])): ?>
					                <img src="<?php echo $design['url']; ?>" alt="">
				                <?php endif; ?>
			                </a>
		                <?php endforeach;
	                endif; ?>
                </div>
                <div class="home-projects__tabs show_smm">
	                <?php $smm = $atts['smm_thumbs'];
	                if ( !empty($smm) ) :
		                foreach($smm as $sm) :  ?>
			                <a href="/category/smm" class="home-projects__tabs_item">
				                <?php if(isset($sm['url'])): ?>
					                <img src="<?php echo $sm['url']; ?>" alt="">
				                <?php endif; ?>
			                </a>
		                <?php endforeach;
	                endif; ?>
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