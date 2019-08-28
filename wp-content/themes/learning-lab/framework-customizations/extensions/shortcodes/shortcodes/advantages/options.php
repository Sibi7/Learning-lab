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
    'list' => array(
        'type' => 'addable-popup',
        'label' => __('Услуги', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('Заголовок', '{domain}'),
            ),
            'desk' => [
                'type' => 'text',
                'label' => 'Описание'
            ],
            'icon' => [
                'type' => 'upload',
                'label' => 'Иконка'
            ]

        ),
    ),
];