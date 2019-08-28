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
    'questions' => array(
        'type' => 'addable-popup',
        'label' => __('Вопрос', '{domain}'),
        'template' => '{{- desk }}',
        'size' => 'large', // small, medium, large
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'desk' => array(
                'type' => 'wp-editor',
                'label' => __('Добавить вопрос', '{domain}'),
            ),
        ),
    ),
];