<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>



<section class="section" id="section__who-hom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title text-uppercase"><?=$atts ['title'] ?></h2>
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-between">
            <?php if (is_array($atts['who_hom']) && !empty($atts['who_hom'])): ?>
                <?php foreach ($atts['who_hom'] as $key => $att): ?>

                    <div class="col-md-6 col-xl-3">
                        <div class="who-hom__item text-center">
                            <div class="who-hom__item__title text-uppercase"><?= $att['title'] ?></div>
                            <div class="who-hom__item__text">
                                <?= $att['desk'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php fw_print($atts); ?>