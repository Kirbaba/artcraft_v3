<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title'       => array(
        'label' => __( 'Заголовок блока', 'unyson' ),
        'type'  => 'text',
        'value' => 'АКЦИИ И СКИДКИ',
    ),
    'icon'        => array(
        'label'       => __( 'Иконка', 'unyson' ),
        'type'        => 'upload',
        'images_only' => 'true',
    ),
    'description' => array(
        'label' => __( 'Текст акции', 'unyson' ),
        'type'  => 'textarea',
        'value' => 'ЗАКАЖИ БЫСТРЕЕ
					<strong>ПО ЦЕНЕ 2Х!</strong>
					Вот это, я понимаю,
					<strong>скидка!</strong>',
    ),
    'link_title'  => array(
        'label' => __( 'ТЕкст ссылки', 'unyson' ),
        'type'  => 'text',
        'value' => 'Хочу учавствовать',
    ),
    'image'       => array(
        'label'       => __( 'Банер', 'unyson' ),
        'type'        => 'upload',
        'images_only' => 'true',
    ),
);