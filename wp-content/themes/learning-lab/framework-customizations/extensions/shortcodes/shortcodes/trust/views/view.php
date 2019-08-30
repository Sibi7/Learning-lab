<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<section class="section" id="section__trust">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title text-uppercase"><?= $atts['title']?></h2>
                <div class="section__undertitle text-center"><?= $atts['subtitle']?></div>
            </div>
        </div>
        <!--START TRUST ITEM-->

        <?php if (is_array($atts['trust']) && !empty($atts['trust'])): $i = 01; $j = 1?>
            <?php foreach ($atts['trust'] as $key => $att): ?>
                <div class="row trust__item  d-flex flex-row justify-content-between align-items-center">
                    <div class="col-md-6 trust__item__text-block">
                        <div class="trust__item__text">
                           <?= $att['desk']?>
                        </div>
                    </div>
                    <div class="col-md-6 trust__item__logo">
                        <div class="trust__item__logo__block d-flex flex-row justify-content-center align-items-center">
                            <img src="<?= $att['logo']['url']?>" alt="Narxoz logo">
                        </div>
                    </div>
                    <div class="trust__item__shadow"></div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>


