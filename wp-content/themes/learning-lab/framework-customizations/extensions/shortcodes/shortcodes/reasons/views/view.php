<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="section" id="section__reasons">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 reasons__title">
                <h2 class="section__title text-uppercase text-left"><?= $atts['title']?></h2>
                <h2 class="section__undertitle text-uppercase text-left"><?= $atts['subtitle']?></h2>
            </div>
            <!--STAT REASONS ITEM-->

            <?php if (is_array($atts['reasons']) && !empty($atts['reasons'])): ?>
                <?php foreach ($atts['reasons'] as $key => $att): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="reasons__item">
                            <div class="row">
                                <div class="col-3">
                                    <div class="reasons__item__icon">
                                        <img src="<?= $att['icon']['url']?>" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="reasons__item__title text-uppercase"><?= $att['title']?></div>
                                    <div class="reasons__item__text">
                                        <?= $att['desk']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
