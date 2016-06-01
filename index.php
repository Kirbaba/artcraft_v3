<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<div id="fullpage">
	<div class="section home-banner" id="section0">
		<!-- open .container -->
		<div class="container">
			<!-- open .home-banner_title -->
			<div class="home-banner_title">
				<!-- open .home-banner_rectangle -->
				<h2 class="home-banner_text" >ART CRAFT</h2>
				<div   class="home-banner_rectangle">
						<img class="home-banner_interface" src="<?php bloginfo('template_directory'); ?>/img/interface.png" alt="" />
				</div>
				<!-- close .home-banner_rectangle -->
				<!-- close .home-banner_title -->
				<!-- open .home-banner_desc -->
				<h3 class="home-banner_desc">DESIGN & WEB</h3>
				<!-- close .home-banner_desc -->
				<div class="mouse animated fadeInUp" data-top=" opacity:1;  " data-top-bottom=" opacity:0; " data-anchor-target="header">
					<div class="scroll"></div>
				</div>
			</div>
			<a href="#" class="home-banner_btn btn-1">
				<svg>
					<rect x="0" y="0" fill="none" width="100%" height="100%"/>
				</svg>
				УЗНАТЬ  БОЛЬШЕ
			</a>
		</div>
		<!-- close .container -->

	</div>
	<div class="section home-partners" id="section1">
	<!-- open .container -->
	<div class="container">
		<h2>С нами работают</h2>
		<!-- open .home-partners_carousel -->
		<div class="home-partners_carousel">
			<!-- open .home-partners_carousel_item -->
			<div class="home-partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/kewledits.weebly(65).png" alt="" />
			</div>
			<!-- close .home-partners_carousel_item -->
			<!-- open .home-partners_carousel_item -->
			<div class="home-partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/HTML5_Logo_512.png" alt="" />
			</div>
			<!-- close .home-partners_carousel_item -->
			<!-- open .home-partners_carousel_item -->
			<div class="home-partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/nirvana02.png" alt="" />
			</div>
			<!-- close .home-partners_carousel_item -->
			<!-- open .home-partners_carousel_item -->
			<div class="home-partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo1.png" alt="" />
			</div>
			<!-- close .home-partners_carousel_item -->
			<!-- open .home-partners_carousel_item -->
			<div class="home-partners_carousel_item">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo2.png" alt="" />
			</div>
			<!-- close .home-partners_carousel_item -->
		</div>
		<!-- close .home-partners_carousel -->
	</div>
 	<img class="home-partners_mockup" src="<?php bloginfo('template_directory'); ?>/img/mac-mocup.png" alt="" />

	</div>

	<div class="section home-services" id="section3">
		<div id="particles-js"></div>
		<div class="intro">
		<!-- open .container -->
		<div class="container">
			<h3>#Я<strong>ARTCRAFT</strong></h3>
			<!-- open .home-services_item -->
			<!-- open .home-services__flex -->
			<div class="home-services__flex">
				<div class="home-services_item">
					<!-- open .home-services_icon -->
					<div class="home-services_icon">
						<img src="<?php bloginfo('template_directory'); ?>/img/04298abddeeee76679ef90e2dcb1f72b.png" alt="" />
					</div>
					<!-- close .home-services_icon -->
					<!-- open .home-services_title -->
					<div class="home-services_title">
						<h4>СТРАТЕГИЯ</h4>
					</div>
					<!-- close .home-services_title -->

					<!-- open .home-services_list -->
					<ul class="home-services_list">
						<li>аудит сайта</li>
						<li>Online-исследования</li>
						<li>Коммуникационная стратегия</li>
						<li>SMM-стратегия</li>
					</ul>
					<!-- close .home-services_list -->
				</div>
				<!-- close .home-services_item -->
				<!-- open .home-services_item -->
				<div class="home-services_item">
					<!-- open .home-services_icon -->
					<div class="home-services_icon">
						<img src="<?php bloginfo('template_directory'); ?>/img/00179f806d7cfba4274a5d1705fa1ece.png" alt="" />
					</div>
					<!-- close .home-services_icon -->
					<!-- open .home-services_title -->
					<div class="home-services_title">
						<h4>ДИЗАЙН</h4>
					</div>
					<!-- close .home-services_title -->
					<!-- open .home-services_list -->
					<ul class="home-services_list">
						<li>Прототипы</li>
						<li>Информационный дизайн</li>
						<li>Полиграфия</li>
						<li>Разработка платформы бренда</li>
						<li>Нейминг, разработка слогана</li>
						<li>Логотип, фирменный стиль</li>
					</ul>
					<!-- close .home-services_list -->
				</div>
				<!-- close .home-services_item -->
				<!-- open .home-services_item -->
				<div class="home-services_item">
					<!-- open .home-services_icon -->
					<div class="home-services_icon">
						<img src="<?php bloginfo('template_directory'); ?>/img/c64d6ce166af46960db44ea1213cbfb3.png" alt="" />
					</div>
					<!-- close .home-services_icon -->
					<!-- open .home-services_title -->
					<div class="home-services_title">
						<h4>разработка</h4>
					</div>
					<!-- close .home-services_title -->
					<!-- open .home-services_list -->
					<ul class="home-services_list">
						<li>Техническое задание</li>
						<li>Веб-разработка</li>
						<li>Адаптивный дизайн</li>
						<li>Адаптивный дизайн</li>
					</ul>
					<!-- close .home-services_list -->
				</div>
				<!-- close .home-services_item -->
			</div>
			<!-- close .home-services__flex -->

		</div>
		<!-- close .container -->

		</div>
	</div>


	<!-- <div class="section home-projects" id="section4">
		<div class="intro">
				<div class="container">
					<h2>ПРОЕКТЫ</h2>
					<h4>В данном разделе представлены только избранные проекты нашей компании за период с 2004 года.</h4>
				</div>
		</div>
	</div> -->



	<div class="section home-steps">
		<div class="intro">
			<div class="container">
				<div class="home-steps__title">
					<h2><strong>3</strong>ШАГА НА ПУТИ К СОЗДАНИЮ <span>САЙТА</span></h2>
				</div>
				<!-- Swiper -->
				<div class="swiper-container home-steps__container">
					<div class="swiper-wrapper">
						<div class="swiper-slide home-steps__item">
							<div class="home-steps__item_thumb" data-swiper-parallax="-400" >
								<img src="<?php bloginfo('template_directory'); ?>/img/steps_01.jpg" alt="" />
							</div>
							<div class="home-steps__item_description">
								<!-- open .flexw -->
								<div class="flexw">
									<h3 class="home-steps__item_description_title" data-swiper-parallax="-100">СОЗДАНИЕ <br /><strong>ПРОТОТИПА</strong> <span>01</span></h3>
									<div class="home-steps__item_description_text" data-swiper-parallax="-300">
										<p>Мы разрабатываем прототип Landing Jage, на основе
										заполненного брифа и анализза ЦА. На этом этапе Вы
										получаете готовый план взаимодействия Landing Page
										с клиентом. Все это совершенно БЕСПЛАТНО!
										</p>
									</div>
									<a href="#" class="home-steps__item_description_btn"><span>Оформить заказ</span></a>	
								</div>
								<!-- close .flexw -->
								
							</div>
						</div>
						<div class="swiper-slide home-steps__item">
							<div class="home-steps__item_thumb" data-swiper-parallax="-400" >
								<img src="<?php bloginfo('template_directory'); ?>/img/steps_02.jpg" alt="" />
							</div>
							<div class="home-steps__item_description">
								<!-- open .flexw -->
								<div class="flexw">
									<h3 class="home-steps__item_description_title" data-swiper-parallax="-100">РАЗРАБОТКА <br /><strong>ДИЗАЙНА</strong> <span>02</span></h3>
									<div class="home-steps__item_description_text" data-swiper-parallax="-300">
										<p>Тестированием мы определили, что первые 3 секунды
											являются решающими, чтобы посетитель реши»уду
											покупать» илил нет. Для этого нужен профессиональный подход,
											тоторый обеспечивает наша стулия.
										</p>
									</div>
									<a href="#" class="home-steps__item_description_btn"><span>Оформить заказ</span></a>	
								</div>
								<!-- close .flexw -->
								
							</div>
						</div>
						<div class="swiper-slide home-steps__item">
							<div class="home-steps__item_thumb" data-swiper-parallax="-400" >
								<img src="<?php bloginfo('template_directory'); ?>/img/steps_03.jpg" alt="" />
							</div>
							<div class="home-steps__item_description">
								<!-- open .flexw -->
								<div class="flexw">
									<h3 class="home-steps__item_description_title" data-swiper-parallax="-100">ПРОГРАММИРОВАНИЕ И  br<strong>ВЕРСТКА</strong> <span>03</span></h3>
									<div class="home-steps__item_description_text" data-swiper-parallax="-300">
										<p>Лендинг - это круглосуточный менеджер продаж вашей
											компании. Естественно. если у менеджера продаж правый
											рукав пиджака длиннеее левого, Вы отнесетесь к его
											предложению скептически 
										</p>
									</div>
									<a href="#" class="home-steps__item_description_btn"><span>Оформить заказ</span></a>	
								</div>
								<!-- close .flexw -->
								
							</div>
						</div>
						
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
</div>

<?php get_footer(); // подключаем footer.php ?>
