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
        'label' => 'Заголовок секции',
    ],
    'reviews' => array(
        'type' => 'addable-popup',
        'label' => __('Добавить отзыв', '{domain}'),
        'template' => '{{- name }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('+', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'id_video'=> [
                'type' => 'text',
                'label' => 'ID видео YouTube'
            ],
            'name'=> [
                'type' => 'text',
                'label' => 'Имя'
            ],
            'position'=> [
                'type' => 'text',
                'label' => 'Должность'
            ],
            'photo'=> [
                'type' => 'upload',
                'label' => 'Превью видео'
            ],


        ),
    ),


];