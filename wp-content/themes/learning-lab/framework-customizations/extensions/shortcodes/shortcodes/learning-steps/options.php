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
        'value' => 'КАК ПРОХОДИТ ОБУЧЕНИЕ'
    ],
    'learning_steps' => array(
        'type' => 'addable-popup',
        'label' => __('Добавить этап', '{domain}'),
        'template' => '{{- number }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('+', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'number'=> [
                'type' => 'text',
                'label' => 'Номер этапа'
            ],
            'title'=> [
                'type' => 'text',
                'label' => 'Заголовок'
            ],
            'desk'=> [
                'type' => 'wp-editor',
                'label' => 'Описание'
            ],
        ),
    ),
];