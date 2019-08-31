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
    'subtitle' => [
        'type' => 'text',
        'label' => 'Подзаголовок'
    ],
    'counter' => [
        'type' => 'text',
        'label' => 'Количество проектов'
    ],

];