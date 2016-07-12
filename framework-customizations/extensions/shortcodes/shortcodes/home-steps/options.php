<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title' => array(
        'label' => __( 'Заголовок блока', 'unyson' ),
        'type'  => 'textarea',
        'value' => '<strong>3</strong>ШАГА НА ПУТИ К СОЗДАНИЮ <span>САЙТА</span>',
    ),
    'steps' => array(
        'type'            => 'addable-box',
        'label'           => __( 'Шаги', '{domain}' ),
        'box-options'     => array(
            'image' => array(
                'type'        => 'upload',
                'images_only' => 'true',
                'label'       => __( 'Изображение', 'unyson' ),
            ),
            'title' => array(
                'type'  => 'textarea',
                'label' => __( 'Заголовок', 'unyson' ),
            ),
            'desc'  => array(
                'type'  => 'textarea',
                'label' => __( 'Текст', 'unyson' ),
            ),
        ),
        'template'        => '{{- title }}', // box title
        'box-controls'    => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit'           => 0, // limit the number of boxes that can be added
        'add-button-text' => __( 'Добавить', '{domain}' ),
        'sortable'        => true,
    )
);