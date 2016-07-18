<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'main' => array(
        'type'    => 'box',
        'title'   => __( 'Описание', '{domain}' ),
        'options' => array(
            'description' => array(
                'type'  => 'text',
                'label' => __( 'Автор (приписка)', '{domain}' ),
            ),
            'author'      => array(
                'type'  => 'text',
                'label' => __( 'Автор (приписка)', '{domain}' ),
            ),
        ),
    ),
);