<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'title' => [
        'type' => 'text',
        'label' => 'Заголовок секции'
    ],
    'last_video' => array(
        'type' => 'addable-popup',
        'label' => __('Добавить видео', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('+', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'id_video'=> [
                'type' => 'text',
                'label' => 'ID видео YouTube'
            ],
            'title'=> [
                'type' => 'text',
                'label' => 'Заголовок'
            ],
            'desk'=> [
                'type' => 'wp-editor',
                'label' => 'Описание'
            ],
            'logo'=> [
                'type' => 'upload',
                'label' => 'Видео превью'
            ],


        ),
    ),


];