<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';
require_once TM_DIR . '/lib/bootstrap_menu.php';
require_once TM_DIR . '/lib/clean_comments_constructor.php';

function typical_title() { // функция вывода тайтла
	global $page, $paged; // переменные пагинации должны быть глобыльными
	wp_title('', true, 'right'); // вывод стандартного заголовка без разделителя
	$site_description = get_bloginfo('description', 'display'); // получаем описание сайта
	if ($site_description && (is_home() || is_front_page())) //если описание сайта есть и мы на главной
		echo " | $site_description"; // выводим описание сайта с "|" разделителем
	if ($paged >= 2 || $page >= 2) // если пагинация была использована
		echo ' | '.sprintf(__( 'Страница %s'), max($paged, $page)); // покажем номер страницы с "|" разделителем
}

register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее', // Верхнее
	'bottom' => 'Внизу' // Внизу
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Сайдбар', // Название в админке
	'id' => "sidebar", // идентификатор для вызова в шаблонах
	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
	'after_widget' => "</div>\n", // разметка после вывода каждого виджета
	'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
	'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));

function pagination() { // функция вывода пагинации
	global $wp_query; // текущая выборка должна быть глобальной
	$big = 999999999; // число для замены
	$links = paginate_links(array( // вывод пагинации с опциями ниже
		'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
		'format' => '?paged=%#%', // формат, %#% будет заменено
		'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
		'type' => 'array', // нам надо получить массив
		'prev_text'    => 'Назад', // текст назад
    	'next_text'    => 'Вперед', // текст вперед
		'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
		'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
		'end_size'     => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
		'mid_size'     => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
		'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
		'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
		'before_page_number' => '', // строка перед цифрой
		'after_page_number' => '' // строка после цифры
	));
 	if( is_array( $links ) ) { // если пагинация есть
	    echo '<ul class="pagination">';
	    foreach ( $links as $link ) {
	    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
	        else echo "<li>$link</li>";
	    }
	   	echo '</ul>';
	 }
}

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
function add_scripts() { // добавление скриптов
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_deregister_script('jquery'); // выключаем стандартный jquery
   /* wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js','','',true);*/
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js','','');


    wp_enqueue_script('easings', get_template_directory_uri().'/js/jquery.easings.min.js','','',true);
    /*wp_enqueue_script('simmScroll', get_template_directory_uri().'/js/jquery.slimscroll.min.js','','',true);*/
    wp_enqueue_script('owl', get_template_directory_uri().'/js/owl.carousel.min.js','','',true);
    wp_enqueue_script('smoothscrall', get_template_directory_uri().'/js/smooth-scroll.min.js','','',true);



    wp_enqueue_script('swiper', get_template_directory_uri().'/js/swiper.min.js','','',true);
    wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.js','','');
    wp_enqueue_script('particles',  get_template_directory_uri().'/js/particles.min.js','','', true);

    wp_enqueue_script('modernizr-custom', get_template_directory_uri().'/js/gallery/modernizr-custom.js','','');
    wp_enqueue_script('imagesloaded', get_template_directory_uri().'/js/gallery/imagesloaded.pkgd.min.js','','',true);
    wp_enqueue_script('masonry', get_template_directory_uri().'/js/gallery/masonry.pkgd.min.js','','',true);
    wp_enqueue_script('classie', get_template_directory_uri().'/js/gallery/classie.js','','',true);
    wp_enqueue_script('portfolio_main', get_template_directory_uri().'/js/gallery/main.js','','',true);


    wp_enqueue_script('custom-scripts', get_template_directory_uri().'/js/script.min.js','','',true); // бутстрап
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js','',''); // portfolio size
	wp_localize_script('main', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
function add_styles() { // добавление стилей
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_enqueue_style( 'libs', get_template_directory_uri().'/css/libs.min.css' );// Нормалайз
    wp_enqueue_style( 'swiper', get_template_directory_uri().'/css/swiper.min.css' );
    wp_enqueue_style( 'custom-styles', get_template_directory_uri().'/css/style.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' ); // основные стили шаблона
}

function prn($content) {
	echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
	print_r ( $content );
	echo '</pre>';
}

function content_class_by_sidebar() { // функция для вывода класса в зависимости от существования виджетов в сайдбаре
	if (is_active_sidebar( 'sidebar' )) { // если есть
		echo 'col-sm-9'; // пишем класс на 80% ширины
	} else { // если нет
		echo 'col-sm-12'; // контент на всю ширину
	}
}
