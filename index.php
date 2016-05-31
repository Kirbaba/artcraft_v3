<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

<div id="fullpage">
	<div class="section home__banner" id="section0">
		<!-- open .container -->
		<div class="container">
			<!-- open .home__banner_title -->
			<div class="home__banner_title">
				<!-- open .home__banner_rectangle -->
				<h2 class="home__banner_text layer" data-depth="0.5">ART CRAFT</h2>
				<div   class="home__banner_rectangle parallax-layer layer" data-depth="0.1">
				
				<img class="home__banner_interface parallax parallax-layer layer" data-depth="0.3" src="<?php bloginfo('template_directory'); ?>/img/interface.png" alt="" />
				</div>
				<!-- close .home__banner_rectangle -->			
				<!-- close .home__banner_title -->	
				<!-- open .home__banner_desc -->
				<h3 class="home__banner_desc">DESIGN & WEB</h3>
				<!-- close .home__banner_desc -->
				<div class="mouse animated fadeInUp" data-top=" opacity:1;  " data-top-bottom=" opacity:0; " data-anchor-target="header">
					<div class="scroll"></div>
				</div>
			</div>
			<a href="#" class="home__banner_btn btn-1">
				<svg>
					<rect x="0" y="0" fill="none" width="100%" height="100%"/>
				</svg>
				УЗНАТЬ  БОЛЬШЕ
			</a>
		</div>
		<!-- close .container -->
		
	</div>
	<div class="section home__partners" id="section1">
	<!-- open .container -->
	<div class="container">
		<h2>С нами работают</h2>
		<!-- open .home__partners_carousel -->
		<div class="home__partners_carousel">
			<!-- open .home__partners_carousel_item -->
			<div class="home__partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/kewledits.weebly(65).png" alt="" />
			</div>
			<!-- close .home__partners_carousel_item -->
			<!-- open .home__partners_carousel_item -->
			<div class="home__partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/HTML5_Logo_512.png" alt="" />
			</div>
			<!-- close .home__partners_carousel_item -->
			<!-- open .home__partners_carousel_item -->
			<div class="home__partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/nirvana02.png" alt="" />
			</div>
			<!-- close .home__partners_carousel_item -->
			<!-- open .home__partners_carousel_item -->
			<div class="home__partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo1.png" alt="" />
			</div>
			<!-- close .home__partners_carousel_item -->
			<!-- open .home__partners_carousel_item -->
			<div class="home__partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo2.png" alt="" />
			</div>
			<!-- close .home__partners_carousel_item -->
		</div>
		<!-- close .home__partners_carousel -->
	</div>
	close .container
	 	<img class="home__partners_mockup" src="<?php bloginfo('template_directory'); ?>/img/mac-mocup.png" alt="" />

	</div>

	<div class="section home__services" id="section3">
		<div class="intro">
			
		</div>
	</div>

	<!-- 
	<div class="section" id="section2">
		<div class="intro">
			<div class="slide" id="slide1">
				
			</div>
	
		    <div class="slide" id="slide2">
				<h1>This example uses responsiveWidth: 900</h1>
			</div>
		</div>
	</div> -->
</div>

<?php get_footer(); // подключаем footer.php ?>