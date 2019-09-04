<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
 * Настройки сайта (телефоны, соц-сети и пр.)
 * Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'header_logo' => [
        'type' => 'upload',
        'label' => 'Логотип в шапке'
    ],
    'header_contacts' => array(
        'type' => 'addable-popup',
        'label' => __('Контакты в шапке', '{domain}'),
        'template' => '{{- phone }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'limit' => 2,
        'sortable' => true,
        'popup-options' => array(
            'phone' => array(
                'label' => __('Телефон', '{domain}'),
                'type' => 'text',
            ),
            'icon_phone' => array(
                'label' => __('Иконка', '{domain}'),
                'type' => 'upload',
            ),
        ),
    ),
    'footer_contacts' => array(
        'type' => 'addable-popup',
        'label' => __('Контакты в футере', '{domain}'),
        'template' => '{{- phone }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'limit' => 2,
        'sortable' => true,
        'popup-options' => array(
            'phone' => array(
                'label' => __('Телефон', '{domain}'),
                'type' => 'text',
            ),
            'icon_phone' => array(
                'label' => __('Иконка', '{domain}'),
                'type' => 'upload',
            ),
        ),
    ),
    'footer_logo' => array(
        'type' => 'addable-popup',
        'label' => __('Логотип в футере', '{domain}'),
        'template' => '{{- name }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'limit' => 2,
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'label' => __('Имя', '{domain}'),
                'type' => 'text',
            ),
            'logo' => array(
                'label' => __('Логотип', '{domain}'),
                'type' => 'upload',
            ),
        ),
    ),
    'social_link' => array(
        'type' => 'addable-popup',
        'label' => __('Социальные сети', '{domain}'),
        'template' => '{{- name }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'name' => array(
                'label' => __('Название', '{domain}'),
                'type' => 'text',
            ),
            'link' => array(
                'label' => __('Ссылка', '{domain}'),
                'type' => 'text',
            ),
            'icon' => array(
                'label' => __('Иконка', '{domain}'),
                'type' => 'upload',
            ),
        ),
    ),

    'copy_foot' => [
        'type' => 'text',
        'label' => 'Копирайт в футере'
    ],
];