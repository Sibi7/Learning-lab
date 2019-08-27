<?php
// Бекенд

/**
 * Дебаг переменной
 */
// fw_print($value);


/**
 * Рендер шаблона
 */
// fw_render_view($file_path, $view_variables = [])

/**
 * AJAX
 *
 * @link
 */
//Регестрируем экшны для обработки аякса
//add_action( 'wp_ajax_НАЗВАНИЕ_ЭКШЕНА', 'НАЗВАНИЕ_МЕТОДА' );
//add_action( 'wp_ajax_nopriv_НАЗВАНИЕ_ЭКШЕНА', 'НАЗВАНИЕ_МЕТОДА' );
//
//function НАЗВАНИЕ_МЕТОДА() {
//    if ( $_POST ) {
//        // обрабатываем запрос
//
//        // возвращаем результат
//        wp_send_json([
//            'variable' => 'value'
//        ]);
//    }
//    wp_die();
//}
//register_nav_menus(array(
//    'top'    => 'Верхнее меню',
//    'bottom' => 'Нижнее меню'
//));


add_filter('show_admin_bar', '__return_false'); // return_false - отключить, return_true - включить

