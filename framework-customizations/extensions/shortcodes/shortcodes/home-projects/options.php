<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title'    => array(
        'label' => __( 'Заголовок блока', 'unyson' ),
        'type'  => 'text',
        'value' => 'ПРОЕКТЫ',
    ),
    'subtitle' => array(
        'label' => __( 'Подзаголовок', 'unyson' ),
        'type'  => 'textarea',
        'value' => 'В данном разделе представлены только избранные проекты нашей компании за период с 2004 года.',
    ),
    'promos'   => array(
        'type'            => 'addable-box',
        'label'           => __( 'Превью', '{domain}' ),
        'box-options'     => array(
            'image'      => array(
                'type'        => 'upload',
                'images_only' => 'true',
                'label'       => __( 'Изображение', 'unyson' ),
            ),
            'title'      => array(
                'type'  => 'text',
                'label' => __( 'Заголовок', 'unyson' ),
            ),
            'link'       => array(
                'type'  => 'text',
                'label' => __( 'Ссылка', 'unyson' ),
            ),
            'limk_title' => array(
                'type'  => 'text',
                'label' => __( 'Заголовок ссылки', 'unyson' ),
            ),
        ),
        'template'        => '{{- title }}', // box title
        'box-controls'    => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit'           => 2, // limit the number of boxes that can be added
        'add-button-text' => __( 'Добавить', '{domain}' ),
        'sortable'        => true,
    )
);