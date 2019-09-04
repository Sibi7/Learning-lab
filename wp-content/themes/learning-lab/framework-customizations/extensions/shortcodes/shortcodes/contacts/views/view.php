<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="section" id="section__contacts">
    <div class="contacts__map">
        <script type="text/javascript" charset="utf-8" async src="<?=$atts['map']?>"></script>
    </div>
    <div class="contacts__block">
        <div class="section__title text-uppercase text-left"><?=$atts['title']?></div>
        <?=$atts['desk']?>
        <p>
            <a href="tel:87017953233" title="<?=$atts['phone']?>" class="link link--black link__phone"><?=$atts['phone']?></a>
            <a href="<?=$atts['email']?>" title="info@ell.kz" class="link link--blue"><?=$atts['email']?></a>
        </p>
    </div>
</section>


