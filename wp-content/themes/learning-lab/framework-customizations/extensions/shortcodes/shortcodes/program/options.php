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
        'value' => 'ПРОГРАММА КУРСА'
    ],
    'program' => array(
        'type' => 'addable-popup',
        'label' => __('Добавить программу', '{domain}'),
        'template' => '{{- theme }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('+', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'theme'=> [
                'type' => 'text',
                'label' => 'Номер темы'
            ],
            'title'=> [
                'type' => 'text',
                'label' => 'Заголовок темы'
            ],
            'list_program' => array(
                'type' => 'addable-popup',
                'label' => __('Описание курса ', '{domain}'),
                'template' => '{{- item }}',
                'size' => 'large', // small, medium, large
                'add-button-text' => __('+', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'item'=> [
                        'type' => 'text',
                        'label' => 'Текст'
                    ],
                ),
            ),
            'icon_program' => array(
                'type' => 'addable-popup',
                'label' => __('Добавить иконки ', '{domain}'),
                'template' => '{{- name }}',
                'size' => 'large', // small, medium, large
                'add-button-text' => __('+', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'name'=> [
                        'type' => 'text',
                        'label' => 'Имя'
                    ],
                    'icon'=> [
                        'type' => 'upload',
                        'label' => 'Иконка'
                    ],
                ),
            ),

        ),
    ),
];