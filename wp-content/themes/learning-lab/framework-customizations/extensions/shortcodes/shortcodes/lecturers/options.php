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
        'value' => 'Преподаватели'
    ],
    'lecturers' => array(
        'type' => 'addable-popup',
        'label' => __('Добавить преподавателя', '{domain}'),
        'template' => '{{- name }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('+', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name'=> [
                'type' => 'text',
                'label' => 'Имя'
            ],
            'photo'=> [
                'type' => 'upload',
                'label' => 'Фото'
            ],
            'desk'=> [
                'type' => 'wp-editor',
                'label' => 'Описание'
            ],


        ),
    ),


];