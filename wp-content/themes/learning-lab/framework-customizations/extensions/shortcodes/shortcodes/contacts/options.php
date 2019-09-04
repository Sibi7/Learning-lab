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
    'desk' => [
        'type' => 'wp-editor',
        'label' => 'Контакты'
    ],
    'phone' => [
        'type' => 'text',
        'label' => 'Телефон'
    ],
    'email' => [
        'type' => 'text',
        'label' => 'email'
    ],
    'map' => [
        'type' => 'text',
        'label' => 'Сслыка API яндекс карт'
    ],


];