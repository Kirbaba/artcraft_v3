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
				<div   class="home__banner_rectangle parallax-layer">
					<h2 class="parallax parallax-layer">ART CRAFT</h2>
					<img class="home__banner_interface parallax parallax-layer" src="<?php bloginfo('template_directory'); ?>/img/interface.png" alt="" />
				</div>
				<!-- close .home__banner_rectangle -->
			
			</div>
			<!-- close .home__banner_title -->	
			
		</div>
		<!-- close .container -->
		<div class="mouse animated fadeInUp" data-top=" opacity:1;  " data-top-bottom=" opacity:0; " data-anchor-target="header">
			<div class="scroll">
			</div></div>
	</div>
	<div class="section home__partners" id="section1">
	   

	</div><!-- 
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