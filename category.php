<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<section>
	<!-- open .portfolio container -->
	<section class="portfolio">
		<!-- open .navigation -->
		<nav class="navigation navigation_pages">
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
				<!-- open .navigation__menu_toggle -->
				<a href="#" class="navigation__menu_toggle">
					<span></span>
				</a>
				<!-- close .navigation__menu_toggle -->
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
			<h2>Наши работы</h2>
			<!-- open .portfolio__flex -->
			<div class="portfolio__flex">
				<nav class="portfolio-projects__nav">
					<ul>
						<li>
							<a href="#" class="portfolio-projects__nav_btn portfolio-projects__nav_btn_active" data-activity="show_site"><span>РАЗРАБОТКА САЙТА</span></a>
						</li>
						<li>
							<a href="#" class="portfolio-projects__nav_btn" data-activity="show_design"><span>ДИЗАЙН</span></a>
						</li>
						<li>
							<a href="#" class="portfolio-projects__nav_btn" data-activity="show_smm"><span>SMM</span></a>
						</li>
					</ul>
				</nav>
				
				<!-- open .home-projects__tabs show_site -->		
				<div class="home-projects__tabs show_site">
					<!-- close .home-projects__tabs show_site -->
					<div class="grid">
						<div class="grid__item" data-size="">
							<a href="<?php bloginfo('template_directory'); ?>/img/screencapture-bmw-web-artcraft-com-1454661116692.png" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/screencapture-bmw-web-artcraft-com-1454661116692.png" alt="img06" />
								<div class="description description--grid">
									<h3>BMW X6 Scolcino</h3>
									<p>Русаков наделал <em>&mdash; Gary L. Francione</em></p>
									<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Журчит вершину о меня ее, продолжил все снова предложения безорфографичный?</p>
									<button class="portfolio_btn btn-1 js_get-modal" data-modal="modal__share">
										<svg>
											<rect x="0" y="0" fill="none" width="100%" height="100%"/>
										</svg>
										заказать
									</button>
								</div>
							</a>
						</div>
						<div class="grid__item">
							<a href="<?php bloginfo('template_directory'); ?>/img/HTML5_Logo_512.png" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/HTML5_Logo_512.png" alt="img07" />
								<div class="description description--grid">
									<h3>Silent Killer</h3>
									<p>Cows’ milk protein may be the single most significant chemical carcinogen to which humans are exposed. <em>&mdash; T. Colin Campbell</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x853">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/8.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/8.jpg" alt="img08" />
								<div class="description description--grid">
									<h3>Senseless Suffering</h3>
									<p>The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?' <em>&mdash; Jeremy Bentham</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="865x1280">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/9.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/9.jpg" alt="img09" />
								<div class="description description--grid">
									<h3>Rabbit Intelligence</h3>
									<p>If a rabbit defined intelligence the way man does, then the most intelligent animal would be a rabbit, followed by the animal most willing to obey the commands of a rabbit. <em>&mdash; Robert Brault</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x1280">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/10.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/10.jpg" alt="img10" />
								<div class="description description--grid">
									<h3>Friendly Terms</h3>
									<p>Man is the only animal that can remain on friendly terms with the victims he intends to eat until he eats them. <em>&mdash; Samuel Butler</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x850">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/11.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/11.jpg" alt="img11" />
								<div class="description description--grid">
									<h3>Murder of Men</h3>
									<p>The time will come when men such as I will look upon the murder of animals as they now look upon the murder of men.<em>&mdash; Leonardo Da Vinci</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x853">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/1.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/1.jpg" alt="img01" />
								<div class="description description--grid">
									<h3>Highest Ethics</h3>
									<p>Non-violence leads to the highest ethics, which is the goal of all evolution. Until we stop harming all other living beings, we are still savages <em>&mdash; Thomas Edison</em></p>
									<div class="details">
										<ul>
											<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
											<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
											<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
											<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
											<li><i class="icon icon-iso"></i><span>80</span></li>
										</ul>
									</div>
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="958x1280">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/2.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/2.jpg" alt="img02" />
								<div class="description description--grid">
									<h3>Pleasure, Amusement &amp; Convenience</h3>
									<p>We do not need to eat animals, wear animals, or use animals for entertainment purposes, and our only defense of these uses is our pleasure, amusement, and convenience.<em>&mdash; Gary L. Francione</em></p>
									<div class="details">
										<ul>
											<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
											<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
											<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
											<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
											<li><i class="icon icon-iso"></i><span>80</span></li>
										</ul>
									</div>
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="837x1280">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/3.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/3.jpg" alt="img03" />
								<div class="description description--grid">
									<h3>Dinner</h3>
									<p>We all love animals. Why do we call some 'pets' and others 'dinner'? <em>&mdash; K.D. Lang</em></p>
									<div class="details">
										<ul>
											<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
											<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
											<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
											<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
											<li><i class="icon icon-iso"></i><span>80</span></li>
										</ul>
									</div>
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x961">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/4.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/4.jpg" alt="img04" />
								<div class="description description--grid">
									<h3>Appetite or Suffering?</h3>
									<p>Could you look an animal in the eyes and say to it, 'My appetite is more important than your suffering'? <em>&mdash; Moby</em></p>
									<div class="details">
										<ul>
											<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
											<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
											<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
											<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
											<li><i class="icon icon-iso"></i><span>80</span></li>
										</ul>
									</div>
								</div>
							</a>
						</div>
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
				
				<!-- open .home-projects__tabs show_site -->		
				<div class="home-projects__tabs show_design">
					<!-- close .home-projects__tabs show_site -->
					<div class="grid_box">
						<div class="grid__item" data-size="">
							<a href="<?php bloginfo('template_directory'); ?>/img/screencapture-bmw-web-artcraft-com-1454661116692.png" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/screencapture-bmw-web-artcraft-com-1454661116692.png" alt="img06" />
								<div class="description description--grid">
									<h3>BMW X6 Scolcino</h3>
									<p>Русаков наделал <em>&mdash; Gary L. Francione</em></p>
									<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Журчит вершину о меня ее, продолжил все снова предложения безорфографичный?</p>
								</div>
							</a>
						</div>
						<div class="grid__item">
							<a href="<?php bloginfo('template_directory'); ?>/img/HTML5_Logo_512.png" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/HTML5_Logo_512.png" alt="img07" />
								<div class="description description--grid">
									<h3>Silent Killer</h3>
									<p>Cows’ milk protein may be the single most significant chemical carcinogen to which humans are exposed. <em>&mdash; T. Colin Campbell</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x853">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/8.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/8.jpg" alt="img08" />
								<div class="description description--grid">
									<h3>Senseless Suffering</h3>
									<p>The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?' <em>&mdash; Jeremy Bentham</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="865x1280">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/9.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/9.jpg" alt="img09" />
								<div class="description description--grid">
									<h3>Rabbit Intelligence</h3>
									<p>If a rabbit defined intelligence the way man does, then the most intelligent animal would be a rabbit, followed by the animal most willing to obey the commands of a rabbit. <em>&mdash; Robert Brault</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x1280">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/10.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/10.jpg" alt="img10" />
								<div class="description description--grid">
									<h3>Friendly Terms</h3>
									<p>Man is the only animal that can remain on friendly terms with the victims he intends to eat until he eats them. <em>&mdash; Samuel Butler</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x850">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/11.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/11.jpg" alt="img11" />
								<div class="description description--grid">
									<h3>Murder of Men</h3>
									<p>The time will come when men such as I will look upon the murder of animals as they now look upon the murder of men.<em>&mdash; Leonardo Da Vinci</em></p>
									
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x853">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/1.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/1.jpg" alt="img01" />
								<div class="description description--grid">
									<h3>Highest Ethics</h3>
									<p>Non-violence leads to the highest ethics, which is the goal of all evolution. Until we stop harming all other living beings, we are still savages <em>&mdash; Thomas Edison</em></p>
									<div class="details">
										<ul>
											<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
											<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
											<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
											<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
											<li><i class="icon icon-iso"></i><span>80</span></li>
										</ul>
									</div>
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="958x1280">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/2.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/2.jpg" alt="img02" />
								<div class="description description--grid">
									<h3>Pleasure, Amusement &amp; Convenience</h3>
									<p>We do not need to eat animals, wear animals, or use animals for entertainment purposes, and our only defense of these uses is our pleasure, amusement, and convenience.<em>&mdash; Gary L. Francione</em></p>
									<div class="details">
										<ul>
											<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
											<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
											<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
											<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
											<li><i class="icon icon-iso"></i><span>80</span></li>
										</ul>
									</div>
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="837x1280">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/3.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/3.jpg" alt="img03" />
								<div class="description description--grid">
									<h3>Dinner</h3>
									<p>We all love animals. Why do we call some 'pets' and others 'dinner'? <em>&mdash; K.D. Lang</em></p>
									<div class="details">
										<ul>
											<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
											<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
											<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
											<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
											<li><i class="icon icon-iso"></i><span>80</span></li>
										</ul>
									</div>
								</div>
							</a>
						</div>
						<div class="grid__item" data-size="1280x961">
							<a href="<?php bloginfo('template_directory'); ?>/img/original/4.jpg" class="img-wrap"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/4.jpg" alt="img04" />
								<div class="description description--grid">
									<h3>Appetite or Suffering?</h3>
									<p>Could you look an animal in the eyes and say to it, 'My appetite is more important than your suffering'? <em>&mdash; Moby</em></p>
									<div class="details">
										<ul>
											<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
											<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
											<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
											<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
											<li><i class="icon icon-iso"></i><span>80</span></li>
										</ul>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /grid -->	
					<div class="preview">
						<button class="action action--close">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971">
								<path fill="#D80027" d="M28.228 23.986L47.092 5.122c1.172-1.17 1.172-3.07 0-4.242-1.172-1.172-3.07-1.172-4.242 0L23.986 19.744 5.12.88C3.95-.292 2.05-.292.88.88-.294 2.05-.294 3.95.88 5.122l18.864 18.864L.88 42.85c-1.173 1.17-1.173 3.07 0 4.242.585.585 1.353.878 2.12.878s1.535-.293 2.12-.88l18.866-18.863L42.85 47.09c.586.587 1.354.88 2.12.88s1.536-.293 2.122-.88c1.172-1.17 1.172-3.07 0-4.24L28.228 23.985z"/>
							</svg>
							
							<span class="text-hidden">Close</span>
						</button>
						<div class="description description--preview"></div>
					</div>
					<!-- /preview -->	
				</div>	

				
			</div>
			
			
		</div>
		<!-- close .container -->
		
			
	</section>
	<!-- close .portfolio container -->
</section>
<?php get_footer(); // подключаем footer.php ?>