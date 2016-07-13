<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'main' => array(
        'type'    => 'box',
        'title'   => __( 'Описание', '{domain}' ),
        'options' => array(
            'author' => array(
                'type'  => 'text',
                'label' => __( 'Автор (приписка)', '{domain}' ),
            ),
        ),
    ),
);