<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning Lab</title>

    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href=" <?php bloginfo('template_directory') ;?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory') ;?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ;?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory') ;?>/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory') ;?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ;?>/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="<?php bloginfo('template_directory') ;?>/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!--OPEN GRAPH-->
    <meta property="og:image" content="<?php bloginfo('template_directory') ;?>/images/opengraph/og-image.jpg">
    <meta property="og:image:height" content="473">
    <meta property="og:image:width" content="903">
    <meta property="og:title" content="Learning Lab">
    <meta property="og:description" content="Learning Lab">

<?php wp_head(); ?>
</head>
<?php
$headerLogo = fw_get_db_customizer_option('header_logo');
$headerContacts = fw_get_db_customizer_option('header_contacts');
?>
<body>
<!--START HEADER-->

<header class="position-fixed vw-100">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2">
                <div class="header__logo"><a href="/"><img src="<?= $headerLogo['url']; ?>" class="mw-100" alt="logo"></a></div>
            </div>
            <div class="d-block d-md-none col-6">
                <div class="mobile-menu-btn float-right" onclick="show_mobile_menu();">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="col-md-10 mobile-menu" id="mobile-menu">
                <button type="button" class="mobile-menu__close-btn d-md-none btn btn-light" onclick="hide_mobile_menu();">&times;</button>
                <div class="text-center text-md-right fixed-hide">

                    <?php if (is_array($headerContacts) && !empty($headerContacts)): ?>
                        <?php foreach ($headerContacts as $key => $att): ?>
                            <a href="tel:<?=$att['phone']?>" class="link link--white link__phone" title="+7 701 795 32 33"><b><img src="<?=$att['icon_phone']['url']?>">  <?=$att['phone']?></b></a>

                        <?php endforeach; ?>
                    <?php endif; ?>


                </div>
                <nav class="float-none float-md-right">
                    <ul class="list-unstyled nav main-menu main-menu--white">
                        <li class="nav-item"><a href="#section__first-screen" class="nav-link link__anchor" title="Главная">Главная</a></li>
                        <li class="nav-item"><a href="#section__program" class="nav-link link__anchor" title="Программа">Программа</a></li>
                        <li class="nav-item"><a href="#section_lecturers" class="nav-link link__anchor" title="Преподаватели">Преподаватели</a></li>
                        <li class="nav-item"><a href="#section__reasons" class="nav-link link__anchor" title="Приемущества">Приемущества</a></li>
                        <li class="nav-item"><a href="#section__trust" class="nav-link link__anchor" title="О нас">О нас</a></li>
                        <li class="nav-item"><a href="#section__reviews" class="nav-link link__anchor" title="Отзывы">Отзывы</a></li>
                        <li class="nav-item"><a href="#section__results" class="nav-link link__anchor" title="Чему вы научитесь">Чему вы научитесь</a></li>
                    </ul>
<!--                    --><?php //wp_nav_menu(array(
//                        'theme_location' => 'top',
//                        'menu_class'
//                    ));
//
//                    ?>
                </nav>

            </div>
        </div>
    </div>
</header>
<!--END HEADER-->

