<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="section" id="section__gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title text-uppercase"><?= $atts['title']?></h2>
            </div>
            <div class="col-12">
                <div class="gallery__items owl-carousel">
                    <?php if (is_array($atts['gallery']) && !empty($atts['gallery'])): ?>
                        <?php foreach ($atts['gallery'] as $key => $att): ?>
                            <div class="gallery__item">
                                <a href="<?= $att['photo']['url']?>" class="fancybox__image" data-fancybox="gallery">
                                    <img src="<?= $att['thumb']['url']?>">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
