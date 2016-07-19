<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	 <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
	<title><?php typical_title(); // выводи тайтл, функция лежит в functions.php ?></title>
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-67894795-1', 'auto');
		ga('send', 'pageview');

	</script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function () {
				try {
					w.yaCounter38555610 = new Ya.Metrika({
						id: 38555610,
						clickmap: true,
						trackLinks: true,
						accurateTrackBounce: true,
						webvisor: true,
						trackHash: true
					});
				} catch (e) {
				}
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () {
					n.parentNode.insertBefore(s, n);
				};
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else {
				f();
			}
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/38555610" style="position:absolute; left:-9999px;" alt=""/></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body <?php body_class(); // все классы для body ?>>
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
			<!-- open .navigation__menu_toggle -->
			<a href="#" class="navigation__menu_toggle">
				<span></span>
			</a>
			<!-- close .navigation__menu_toggle -->
			<!-- close .navigation__logo -->
			<ul class="navigation__menu">
				<li><a href="/" id="moveToTop">Главная</a></li>
				<li><a data-scroll href="#moveto_projects">Проекты</a></li>
				<li><a data-scroll href="#moveto_about">Акции</a></li>
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
