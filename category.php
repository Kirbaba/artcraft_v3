<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
	<!-- open .portfolio container -->
	<section class="portfolio">
		<!-- open .container -->
		<div class="container">
			<h2>Наши работы</h2>
			<!-- open .portfolio__flex -->
			<div class="portfolio__flex">
				<nav class="portfolio-projects__nav">
					<ul>
						<li>
							<a href="/category/sites"
							   class="portfolio-projects__nav_btn <?php echo ( is_category( 'sites' ) ) ? 'portfolio-projects__nav_btn_active' : ''; ?>"
							   data-activity="show_site"><span>РАЗРАБОТКА САЙТА</span></a>
						</li>
						<li>
							<a href="/category/design"
							   class="portfolio-projects__nav_btn <?php echo ( is_category( 'design' ) ) ? 'portfolio-projects__nav_btn_active' : ''; ?>"
							   data-activity="show_site"><span>ДИЗАЙН</span></a>
						</li>
						<li>
							<a href="/category/smm"
							   class="portfolio-projects__nav_btn <?php echo ( is_category( 'smm' ) ) ? 'portfolio-projects__nav_btn_active' : ''; ?>"
							   data-activity="show_site"><span>SMM</span></a>
						</li>
					</ul>
				</nav>
				<!-- open .home-projects__tabs show_site -->		
				<div class="home-projects__tabs show_site">
					<div class="grid">
						<!-- close .home-projects__tabs show_site -->
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="grid__item">
								<a href="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-wrap">
									<?php the_post_thumbnail( 'medium' ); ?>
									<div class="description description--grid">
										<h3><?php the_title(); ?></h3>
										<p><?php echo get_the_content( get_the_ID() ); ?>
											<em>&mdash;<?php echo fw_get_db_post_option( get_the_ID(), 'author' ); ?></em>
										</p>
										<button class="portfolio_btn btn-1 js_get-modal" data-modal="modal__share">
											<svg>
												<rect x="0" y="0" fill="none" width="100%" height="100%"/>
											</svg>
											заказать
										</button>
									</div>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
					<!-- /grid -->	
					<div class="preview">
						<button class="action action--close">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971">
								<path fill="#D80027" d="M28.228 23.986L47.092 5.122c1.172-1.17 1.172-3.07 0-4.242-1.172-1.172-3.07-1.172-4.242 0L23.986 19.744 5.12.88C3.95-.292 2.05-.292.88.88-.294 2.05-.294 3.95.88 5.122l18.864 18.864L.88 42.85c-1.173 1.17-1.173 3.07 0 4.242.585.585 1.353.878 2.12.878s1.535-.293 2.12-.88l18.866-18.863L42.85 47.09c.586.587 1.354.88 2.12.88s1.536-.293 2.122-.88c1.172-1.17 1.172-3.07 0-4.24L28.228 23.985z"/>
							</svg>
							
							<span class="text-hidden">Close</span>
						</button>
						<div class="description description--preview">
							
						</div>
					</div>
					<!-- /preview -->
				</div>
			</div>
		</div>
		<!-- close .container -->
	</section>
	<!-- close .portfolio container -->
<?php get_footer(); // подключаем footer.php ?>