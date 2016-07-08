<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>


	<div class="home-banner" id="banner">
		
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
			<h2>Акции и скидки</h2>
			<!-- open .home-partners__shares -->
			<div class="home-partners__shares">
				<!-- open .home-partners__shares_icon -->
				<div class="home-partners__shares_icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/tree.png" alt="" />
				</div>
				<!-- close .home-partners__shares_icon -->
				<!-- open .home-partners__shares_desc -->
				<div class="home-partners__shares_desc">
					<h3>
						ЗАКАЖИ БЫСТРЕЕ 
						<strong>ПО ЦЕНЕ 2Х!</strong> 
						Вот это, я понимаю, 
						<strong>скидка!</strong>
					</h3>	
					<a href="#" class="home-partners__shares_desc_btn js_get-modal" data-modal="modal__share"><span>Хочу участвовать</span></a>
				</div>
				<!-- close .home-partners__shares_desc -->
				
			</div>
			<!-- close .home-partners__shares -->

		</div>
	 	<img class="home-partners_mockup" src="<?php bloginfo('template_directory'); ?>/img/mockups_works-1.png
	 	" alt="" />

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
					<!-- open .home-services_price -->
					<h5 class="home-services_price">
						от <strong class="js_price">X XXX</strong> ₽
					</h5>
					<!-- close .home-services_price -->
					<!-- open .home-services_list -->
					<ul class="home-services_list">
						<li><a href="#" class="js_service__item" data-price="20 000">аудит сайта</a></li>
						<li><a href="#" class="js_service__item" data-price="23 000">Online-исследования</a></li>
						<li><a href="#" class="js_service__item" data-price="28 000">Коммуникационная стратегия</a></li>
						<li><a href="#" class="js_service__item" data-price="2 000">SMM-стратегия</a></li>
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
					<!-- open .home-services_price -->
					<h5 class="home-services_price">
						от <strong class="js_price">X XXX</strong> ₽
					</h5>
					<!-- close .home-services_price -->
					<!-- open .home-services_list -->
					<ul class="home-services_list">
						<li><a href="#" class="js_service__item" data-price="20 000">Прототипы</a></li>
						<li><a href="#" class="js_service__item" data-price="20 111">Информационный дизайн</a></li>
						<li><a href="#" class="js_service__item" data-price="20 999">Полиграфия</a></li>
						<li><a href="#" class="js_service__item" data-price="20 8888">Разработка платформы бренда</a></li>
						<li><a href="#" class="js_service__item" data-price="20 222">Нейминг, разработка слогана</a></li>
						<li><a href="#" class="js_service__item" data-price="20 855">Логотип, фирменный стиль</a></li>
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
					<!-- open .home-services_price -->
					<h5 class="home-services_price">
						от <strong class="js_price">X XXX</strong> ₽
					</h5>
					<!-- close .home-services_price -->
					<!-- open .home-services_list -->
					<ul class="home-services_list">
						<li><a href="#" class="js_service__item" data-price="2 000">Техническое задание</a></li>
						<li><a href="#" class="js_service__item" data-price="5 000">Веб-разработка</a></li>
						<li><a href="#" class="js_service__item" data-price="2 000">Адаптивный дизайн</a></li>
						<li><a href="#" class="js_service__item" data-price="8 000">Адаптивный дизайн</a></li>
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
						<!-- open .home-projects__more_line -->
						<div class="home-projects__more_line">
							<!-- close .home-projects__more_line -->
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
						</div>
						
						<div class="home-projects__tabs show_site">
							<a href="<?php bloginfo('template_directory'); ?>/img/sites.jpg" class="home-projects__tabs_item" data-modal="modal__project">
								<img src="<?php bloginfo('template_directory'); ?>/img/sites.jpg" alt="" />
								<span class="home-projects__tabs_content">
									<h3>Rabbit Intelligence</h3>
									<p>If a rabbit defined intelligence the way man does, then the most intelligent animal would be a rabbit, followed by the animal most willing to obey the commands of a rabbit. <em>&mdash; Robert Brault</em></p>
									<button class="portfolio_btn btn-1 js_get-modal" data-modal="modal__share">
										<svg>
											<rect x="0" y="0" fill="none" width="100%" height="100%"/>
										</svg>
										заказать
									</button>
								</span>
							</a>
							<a href="<?php bloginfo('template_directory'); ?>/img/screencapture-bmw-web-artcraft-com-1454661116692.png" class="home-projects__tabs_item" data-modal="modal__project">
								<img src="<?php bloginfo('template_directory'); ?>/img/screencapture-bmw-web-artcraft-com-1454661116692.png" alt="" />
								<span class="home-projects__tabs_content">
									<h3>Русаковичь</h3>
									<p>Много-много разного текста</p>
									<button class="portfolio_btn btn-1 js_get-modal" data-modal="modal__share">
										<svg>
											<rect x="0" y="0" fill="none" width="100%" height="100%"/>
										</svg>
										заказать
									</button>
								</span>
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
									<a href="#" class="home-steps__item_description_btn js_get-modal" data-modal="modal__share"><span>Оформить заказ</span></a>
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
									<a href="#" class="home-steps__item_description_btn js_get-modal" data-modal="modal__share"><span>Оформить заказ</span></a>
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
									<a href="#" class="home-steps__item_description_btn js_get-modal" data-modal="modal__share"><span>Оформить заказ</span></a>
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
					<a href="#" class="home-order_btn js_get-modal" data-modal="modal__share"><span>Оформить заказ</span></a>
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
