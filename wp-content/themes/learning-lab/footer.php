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

<?php
$copy = fw_get_db_customizer_option('copy_foot');
$footer_contacts = fw_get_db_customizer_option('footer_contacts');
$social_link = fw_get_db_customizer_option('social_link');
$footer_logo = fw_get_db_customizer_option('footer_logo');
?>
<!--START FOOTER-->
<footer>
    <div class="footer__top">
        <div class="container">
            <div class="row d-flex flex-row justify-content-between align-items-center">
                <div class="col-lg-2 col-xl-3 d-none d-lg-block d-xl-flex flex-row justify-content-between align-items-center">

                    <?php if (is_array($footer_logo) && !empty($footer_logo)): ?>
                        <?php foreach ($footer_logo as $key => $att): ?>
                            <div class="footer__logo mb-lg-3 mb-xl-0">
                                <img src="<?= $att['logo']['url']?>" class="mw-100" alt="<?= $att['name']?>">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
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
                        <?php echo $copy;?> &copy; <?= date('Y'); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="footer__contacts d-flex flex-row justify-content-center align-items-center d-lg-block float-lg-right">
                        <?php if (is_array($footer_contacts) && !empty($footer_contacts)): ?>
                            <?php foreach ($footer_contacts as $key => $att): ?>
                                <a href="tel:87017953233" class="link d-none d-md-inline-block link--black link__phone" title="+7 701 795 32 33">
                                    <img src="<?= $att['icon_phone']['url']?>" alt="phone icon"> <?= $att['phone']?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>



                        <?php if (is_array($social_link) && !empty($social_link)): ?>
                            <?php foreach ($social_link as $key => $att): ?>
                                <a href="<?=$att['link']?>" class="link d-none d-md-inline-block link__social" title="Facebook">
                                    <img src="<?=$att['icon']['url']?>" alt="">
                                </a>
                          <?php endforeach; ?>
                        <?php endif; ?>


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
