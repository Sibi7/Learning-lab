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
        'value' => 'КОМУ ПОДОЙДЕТ КУРС?'
    ],
    'who_hom' => array(
        'type' => 'addable-popup',
        'label' => __('Добавить блок', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('+', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => [
                'type' => 'text',
                'label' => 'Заголовок'
            ],
            'desk' => array(
                'type' => 'wp-editor',
                'label' => __('Описание', '{domain}'),
            ),
        ),
    ),
];