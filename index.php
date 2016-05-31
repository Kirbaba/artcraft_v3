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
 	<img class="home__partners_mockup" src="<?php bloginfo('template_directory'); ?>/img/mac-mocup.png" alt="" />

	</div>

	<div class="section home__services" id="section3">
		<div class="intro">
		<!-- open .container -->
		<div class="container">
			<h3>#Я<strong>ARTCRAFT</strong></h3>
			<!-- open .home__services_item -->
			<!-- open .home__services__flex -->
			<div class="home__services__flex">
				<div class="home__services_item">
					<!-- open .home__services_icon -->
					<div class="home__services_icon">
						<img src="<?php bloginfo('template_directory'); ?>/img/04298abddeeee76679ef90e2dcb1f72b.png" alt="" />
					</div>
					<!-- close .home__services_icon -->
					<!-- open .home__services_title -->
					<div class="home__services_title">
						<h4>СТРАТЕГИЯ</h4>
					</div>
					<!-- close .home__services_title -->
					
					<!-- open .home__services_list -->
					<ul class="home__services_list">
						<li>аудит сайта</li>
						<li>Online-исследования</li>
						<li>Коммуникационная стратегия</li>
						<li>SMM-стратегия</li>
					</ul>
					<!-- close .home__services_list -->
				</div>
				<!-- close .home__services_item -->
				<!-- open .home__services_item -->
				<div class="home__services_item">
					<!-- open .home__services_icon -->
					<div class="home__services_icon">
						<img src="<?php bloginfo('template_directory'); ?>/img/00179f806d7cfba4274a5d1705fa1ece.png" alt="" />
					</div>
					<!-- close .home__services_icon -->
					<!-- open .home__services_title -->
					<div class="home__services_title">
						<h4>ДИЗАЙН</h4>
					</div>
					<!-- close .home__services_title -->
					<!-- open .home__services_list -->
					<ul class="home__services_list">
						<li>Прототипы</li>
						<li>Информационный дизайн</li>
						<li>Полиграфия</li>
						<li>Разработка платформы бренда</li>
						<li>Нейминг, разработка слогана</li>
						<li>Логотип, фирменный стиль</li>
					</ul>
					<!-- close .home__services_list -->
				</div>
				<!-- close .home__services_item -->
				<!-- open .home__services_item -->
				<div class="home__services_item">
					<!-- open .home__services_icon -->
					<div class="home__services_icon">
						<img src="<?php bloginfo('template_directory'); ?>/img/c64d6ce166af46960db44ea1213cbfb3.png" alt="" />
					</div>
					<!-- close .home__services_icon -->
					<!-- open .home__services_title -->
					<div class="home__services_title">
						<h4>СТРАТЕГИЯ</h4>
					</div>
					<!-- close .home__services_title -->
					<!-- open .home__services_list -->
					<ul class="home__services_list">
						<li>Техническое задание</li>
						<li>Веб-разработка</li>
						<li>Адаптивный дизайн</li>
						<li>Адаптивный дизайн</li>
					</ul>
					<!-- close .home__services_list -->
				</div>
				<!-- close .home__services_item -->
			</div>
			<!-- close .home__services__flex -->
			
		</div>
		<!-- close .container -->

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