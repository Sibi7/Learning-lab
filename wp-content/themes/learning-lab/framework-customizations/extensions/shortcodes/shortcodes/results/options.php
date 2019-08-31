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
    'title'=>[
        'type'=>'text',
        'label' => 'Заголовок секции'
    ],
    'subtitle'=>[
        'type'=>'text',
        'label' => 'Подзаголовок секции'
    ],
    'results' => array(
        'type' => 'addable-popup',
        'label' => __('Добавить итог', '{domain}'),
        'template' => '{{- desk }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('+', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'desk' => array(
                'type' => 'text',
                'label' => __('Описание', '{domain}'),
            ),
        ),
    ),
];