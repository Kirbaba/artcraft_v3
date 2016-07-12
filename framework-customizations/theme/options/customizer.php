<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'panel_1' => array(
        'title'   => __( 'Site settings', '{domain}' ),
        'options' => array(
            'email_callback' => array(
                'type'  => 'text',
                'value' => 'vvex@mail.ru',
                'label' => __( 'Почта для обратной связи', '{domain}' ),
            ),
        ),
    ),
);