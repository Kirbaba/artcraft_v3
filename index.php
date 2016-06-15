<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>


	<div class="home-banner" id="banner">
		<!-- open .navigation -->
		<nav class="navigation">
			<!-- open .container -->
			<div class="container">
				<!-- open .navigation__logo -->
				<div class="navigation__logo">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="-307.5 347.6 137.2 17">
					  <style>
					    .st0{fill:#FFFFFF;} .st1{fill:#42FFEB;}
					  </style>
					  <path class="st0" d="M-296.8 361.8h-5.8l-.8 2.6h-4.1l5.4-16.5h4.8l5.4 16.5h-4.1l-.8-2.6zm-1.1-3.5l-1.8-6.2-1.8 6.2h3.6zm14.9.7h-1.5v5.4h-3.8v-16.5h6.4c3.1 0 5.6 2.5 5.6 5.6 0 2-1.2 3.8-2.9 4.7l4.8 6.1h-4.4l-4.2-5.3zm-1.4-3.3h2.6c1 0 1.9-.9 1.9-2.1s-.8-2.1-1.9-2.1h-2.6v4.2zm22.5-4.1h-3.8v12.8h-3.8v-12.8h-3.8V348h11.3l.1 3.6zm11.6 4.6c0-4.8 3.6-8.6 8.6-8.6 4 0 7.4 2.7 8.1 6.4h-3.9c-.5-1.7-2.2-2.8-4.1-2.8-2.9 0-4.8 2-4.8 4.9s1.9 4.9 4.8 4.9c2 0 3.6-1.1 4.1-2.8h3.9c-.7 3.8-4 6.4-8.1 6.4-5 .1-8.6-3.6-8.6-8.4zm25.8 2.8h-1.5v5.4h-3.8v-16.5h6.4c3.1 0 5.6 2.5 5.6 5.6 0 2-1.2 3.8-2.9 4.7l4.8 6.1h-4.4l-4.2-5.3zm-1.4-3.3h2.6c1 0 1.9-.9 1.9-2.1s-.8-2.1-1.9-2.1h-2.6v4.2zm22.6 6.1h-5.8l-.8 2.6h-4.1l5.4-16.5h4.8l5.4 16.5h-4.1l-.8-2.6zm-1-3.5l-1.8-6.2-1.8 6.2h3.6zm13.4-6.7v3.4h5.9v3.6h-5.9v5.8h-3.8v-16.5h9.8v3.6h-6v.1zm20.6 0h-3.8v12.8h-3.8v-12.8h-3.8V348h11.3v3.6h.1z"/>
					  <path class="st1" d="M-262.3 355h16.1v2.7h-16.1z"/>
					</svg>
				</div>
				<!-- close .navigation__logo -->
				<ul class="navigation__menu">
					<li><a href="/" id="moveToTop">Главная</a></li>
					<li><a data-scroll href="#moveto_projects">Проекты</a></li>
					<li><a data-scroll href="#moveto_about">О нас</a></li>
				</ul>

				<!-- open .navigation__lang -->
				<div class="navigation__lang">
					<a href="#nowhere" class="navigation__lang_active">ru </a>
					<!-- open .navigation__lang -->
					<ul class="navigation__lang_list">
						<li><a href="#nowhere" class="navigation__lang_val" data-lang="en">en</a></li>
						<li><a href="#nowhere" class="navigation__lang_val" data-lang="ru">ru</a></li>
					</ul>
					<!-- close .navigation__lang -->
				</div>
				<!-- close .navigation__lang -->

			</div>
			<!-- close .container -->
		</nav>
		<!-- close .navigation -->
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
				<a data-scroll href="#moveto_about" class="mouse animated fadeInUp" data-top=" opacity:1;  " data-top-bottom=" opacity:0; " data-anchor-target="header">
					<div class="scroll"></div>
				</a>
			</div>
			<a href="#" class="home-banner_btn btn-1">
				<svg>
					<rect x="0" y="0" fill="none" width="100%" height="100%"/>
				</svg>
				УЗНАТЬ  БОЛЬШЕ
			</a>
		</div>		<!-- close .container -->

	</div>

<!-- open .particles -->
<div class="box-part" id="particles-js">
	<div ></div>
	<div class="home-partners" id="moveto_about">
		<!-- open .container -->
		<div class="container">
			<h2>С нами работают</h2>
			<!-- open .home-partners_carousel -->
			<div class="home-partners_carousel">
				<!-- open .home-partners_carousel_item -->
				<div class="home-partners_carousel_item">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo2.png" alt="" />
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
			<h3>Далеко-далеко за словесными.</h3>
			<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Текстами, дал осталось вскоре заманивший.</p>
			<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Встретил осталось они дал, коварный выйти запятых возвращайся переписали гор.</p>
		</div>
	 	<img class="home-partners_mockup" src="<?php bloginfo('template_directory'); ?>/img/mac-mocup.png" alt="" />

	</div>

	<div class="home-services" id="home-services">
		
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
</div>

	<div class="section home-projects" id="moveto_projects">
		<div class="intro">
				<div class="container">
					<h2>ПРОЕКТЫ</h2>
					<h4>В данном разделе представлены только избранные проекты нашей компании за период с 2004 года.</h4>
					<div class="home-projects__flex">
						<a href="#" class="home-projects__more">
							<img src="<?php bloginfo('template_directory'); ?>/img/portfolio_0.png" alt="" />
							<span class="home-projects__more_hover">
								<span class="home-projects__more_hover_box">
									<span class="home-projects__more_type">яркий дизайн</span>
									<span class="home-projects__more_btn"><span>больше работ</span></span>
								</span>

							</span>
						</a>
						<!-- open .home-projects__more_diamond -->
						<div class="home-projects__more_diamond">
							<img src="<?php bloginfo('template_directory'); ?>/img/diamond.png" alt="" />
						</div>
						<!-- close .home-projects__more_diamond -->
						<a href="#" class="home-projects__more">
							<img src="<?php bloginfo('template_directory'); ?>/img/portfolio_1.png" alt="" />
							<span class="home-projects__more_hover">
								<span class="home-projects__more_hover_box">
									<span class="home-projects__more_type">сайт под ключ</span>
									<span class="home-projects__more_btn"><span>больше работ</span></span>
								</span>

							</span>
						</a>
						<div class="home-projects__tabs show_site">
								<a href="#" class="home-projects__tabs_item">
									<img src="<?php bloginfo('template_directory'); ?>/img/sites.jpg" alt="" />
								</a>
								<a href="#" class="home-projects__tabs_item">
									<img src="<?php bloginfo('template_directory'); ?>/img/sites.jpg" alt="" />
								</a>
								<a href="#" class="home-projects__tabs_item">
									<img src="<?php bloginfo('template_directory'); ?>/img/sites.jpg" alt="" />
								</a>
						</div>
						<div class="home-projects__tabs show_design">
							<a href="#" class="home-projects__tabs_item">
								<img src="<?php bloginfo('template_directory'); ?>/img/design_thumb.png" alt="" />
							</a>
							<a href="#" class="home-projects__tabs_item">
								<img src="<?php bloginfo('template_directory'); ?>/img/design_thumb.png" alt="" />
							</a>
							<a href="#" class="home-projects__tabs_item">
								<img src="<?php bloginfo('template_directory'); ?>/img/design_thumb.png" alt="" />
							</a>
						</div>
						<div class="home-projects__tabs show_smm">
							<a href="#" class="home-projects__tabs_item">
								<img src="<?php bloginfo('template_directory'); ?>/img/ssm.jpg" alt="" />
							</a>
							<a href="#" class="home-projects__tabs_item">
								<img src="<?php bloginfo('template_directory'); ?>/img/ssm.jpg" alt="" />
							</a>
							<a href="#" class="home-projects__tabs_item">
								<img src="<?php bloginfo('template_directory'); ?>/img/ssm.jpg" alt="" />
							</a>
						</div>
						<nav class="home-projects__nav">
							<ul>
								<li>
									<a href="#" class="home-projects__nav_btn home-projects__nav_btn_active" data-activity="show_site"><span>РАЗРАБОТКА САЙТА</span></a>
								</li>
								<li>
									<a href="#" class="home-projects__nav_btn" data-activity="show_design"><span>ДИЗАЙН</span></a>
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
									<h3 class="home-steps__item_description_title" data-swiper-parallax="-100">ПРОГРАММИРОВАНИЕ И <strong>ВЕРСТКА</strong> <span>03</span></h3>
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

	<!-- open .section home-order -->
	<div class="section home-order">
		<!-- open .intro -->
		<div class="intro">
			<!-- open .container -->
			<div class="container">
				<!-- open .home-order__box -->
				<div class="home-order__box">
					<h2>ЗАКАЖИТЕ <span>БЕСПЛАТНО</span> РАЗРАБОТКУ ПРОТОТИПА</h2>
					<a href="#" class="home-order_btn"><span>Оформить заказ</span></a>
					<small>Далеко-далеко за словесными горами в стране.</small>
				</div>
				<!-- close .home-order__box -->
			</div>
			<!-- close .container -->
		</div>
		<!-- close .intro -->
	</div>
	<!-- close .section home-order -->


<?php get_footer(); // подключаем footer.php ?>
