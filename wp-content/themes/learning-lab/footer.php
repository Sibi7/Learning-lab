<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>


<!--START FOOTER-->
<footer>
    <div class="footer__top">
        <div class="container">
            <div class="row d-flex flex-row justify-content-between align-items-center">
                <div class="col-lg-2 col-xl-3 d-none d-lg-block d-xl-flex flex-row justify-content-between align-items-center">
                    <div class="footer__logo mb-lg-3 mb-xl-0">
                        <img src="<?php bloginfo('template_directory') ;?>/images/logo.png" class="mw-100" alt="logo">
                    </div>
                    <div class="footer__payments">
                        <img src="<?php bloginfo('template_directory') ;?>/images/payments.png" class="mw-100" alt="Visa & MasterCard">
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-xl-9 d-flex flex-row justify-content-center align-items-center d-lg-block">
                    <ul class="list-unstyled nav main-menu float-right">
                        <li class="nav-item"><a href="#section__first-screen" class="nav-link link__anchor" title="Главная">Главная</a></li>
                        <li class="nav-item"><a href="#section__program" class="nav-link link__anchor" title="Программа">Программа</a></li>
                        <li class="nav-item"><a href="#section_lecturers" class="nav-link link__anchor" title="Преподаватели">Преподаватели</a></li>
                        <li class="nav-item"><a href="#section__reasons" class="nav-link link__anchor" title="Приемущества">Приемущества</a></li>
                        <li class="nav-item"><a href="#section__trust" class="nav-link link__anchor" title="О нас">О нас</a></li>
                        <li class="nav-item"><a href="#section__reviews" class="nav-link link__anchor" title="Отзывы">Отзывы</a></li>
                        <li class="nav-item"><a href="#section__results" class="nav-link link__anchor" title="Чему вы научитесь">Чему вы научитесь</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row d-flex flex-row justify-content-between align-items-center">
                <div class="d-none d-lg-block col-lg-6">
                    <div class="footer__copyright">
                        <span>e-Learning Lab.</span> Лаборатория решений для онлайн обучения. &copy; <?= date('Y'); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="footer__contacts d-flex flex-row justify-content-center align-items-center d-lg-block float-lg-right">
                        <div class="d-block d-lg-none footer__logo">
                            <img src="<?php bloginfo('template_directory') ;?>/images/logo.png" class="mw-100" alt="logo">
                        </div>
                        <div class="d-block d-lg-none footer__payments">
                            <img src="<?php bloginfo('template_directory') ;?>/images/payments.png" class="mw-100" alt="Visa & MasterCard">
                        </div>
                        <a href="tel:87017953233" class="link d-none d-md-inline-block link--black link__phone" title="+7 701 795 32 33">
                            <img src="<?php bloginfo('template_directory') ;?>/images/icons/icon__phone.png?v=1.1" alt="phone icon"> +7 701 795 32 33
                        </a>
                        <a href="#" class="link d-none d-md-inline-block link__social link__facebook" title="Facebook">
                            <img src="<?php bloginfo('template_directory') ;?>/images/icons/icon__facebook.png" alt="Facebook icon">
                        </a>
                        <a href="#" class="link d-none d-md-inline-block link__social link__instagram" title="Instagram">
                            <img src="<?php bloginfo('template_directory') ;?>/images/icons/icon__instagram.png" alt="Instagram icon">
                        </a>
                    </div>
                </div>
                <div class="col-12 d-none d-md-block d-lg-none">
                    <div class="footer__copyright text-center">
                        <span>e-Learning Lab.</span> Лаборатория решений для онлайн обучения. &copy; <?= date('Y'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--END FOOTER-->
<?php wp_footer(); ?>
</body>
</html>
