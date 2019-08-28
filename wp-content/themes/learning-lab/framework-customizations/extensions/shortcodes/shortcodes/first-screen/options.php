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
    'title'     => [
        'type' => 'wp-editor',
        'label' => 'Заголовок',
        'value' => 'Научитесь создавать обучающие видео'
    ],
    'time'     => [
        'type' => 'text',
        'label' => 'Время',
        'value' => '15'
    ],
    'money'     => [
        'type' => 'text',
        'label' => 'Цена',
        'value' => '35'
    ],
    'desk'     => [
        'type' => 'text',
        'label' => 'Описание',
        'value' => 'Более 200 выпускников курса'
    ],

];