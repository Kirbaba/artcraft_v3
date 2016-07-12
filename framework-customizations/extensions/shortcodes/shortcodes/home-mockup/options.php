<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title'       => array(
        'label' => __( 'Заголовок блока', 'unyson' ),
        'type'  => 'text',
        'value' => 'ЗАКАЖИТЕ <span>БЕСПЛАТНО</span> РАЗРАБОТКУ ПРОТОТИПА',
    ),
    'description' => array(
        'label' => __( 'Текст акции', 'unyson' ),
        'type'  => 'textarea',
        'value' => 'Далеко-далеко за словесными горами в стране.',
    ),
    'link_title'  => array(
        'label' => __( 'Текст ссылки', 'unyson' ),
        'type'  => 'text',
        'value' => 'Оформить заказ',
    ),
);