<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'benefits' => array(
        'type'            => 'addable-box',
        'label'           => __( 'Преимущества', '{domain}' ),
        'box-options'     => array(
            'title'  => array(
                'label' => __( 'Название преимущества', 'unyson' ),
                'type'  => 'text',
            ),
            'image'  => array(
                'label'       => __( 'Картинка', 'unyson' ),
                'type'        => 'upload',
                'images_only' => 'true',
            ),
            'prices' => array(
                'type'            => 'addable-box',
                'label'           => __( 'Цены', '{domain}' ),
                'box-options'     => array(
                    'price_title' => array(
                        'label' => __( 'Название опции', 'unyson' ),
                        'type'  => 'text',
                    ),
                    'mount'       => array(
                        'label' => __( 'Цена', 'unyson' ),
                        'type'  => 'text',
                        'value' => 'XXXX'
                    ),
                ),
                'template'        => '{{- price_title }}', // box title
                'box-controls'    => array( // buttons next to (x) remove box button
                    'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                ),
                'limit'           => 0, // limit the number of boxes that can be added
                'add-button-text' => __( 'Добавить', '{domain}' ),
                'sortable'        => true,
            )
        ),
        'template'        => '{{- title }}', // box title
        'box-controls'    => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit'           => 0, // limit the number of boxes that can be added
        'add-button-text' => __( 'Добавить', '{domain}' ),
        'sortable'        => true,
    ),
);