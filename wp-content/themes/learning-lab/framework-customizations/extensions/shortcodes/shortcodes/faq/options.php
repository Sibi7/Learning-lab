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
    'faq' => array(
        'type' => 'addable-popup',
        'label' => __('Добавить вопрос/ответ', '{domain}'),
        'template' => '{{- question }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('+', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'question'=> [
                'type' => 'text',
                'label' => 'Вопрос'
            ],
            'answer'=> [
                'type' => 'text',
                'label' => 'Ответ'
            ],
        ),
    ),
];