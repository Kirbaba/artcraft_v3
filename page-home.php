<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php
if ( have_posts() ) {
    while ( have_posts() ) : the_post(); // старт цикла
        the_content(); // контент   
    endwhile;
} // конец цикла
get_footer(); // подключаем footer.php