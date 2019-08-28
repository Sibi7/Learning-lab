<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="section" id="section__learning-steps">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title text-uppercase"><?= $atts['title']?></h2>
            </div>
        </div>
        <div class="row">
                <?php if (is_array($atts['learning_steps']) && !empty($atts['learning_steps'])): $i = 01; $j = 1?>
                <?php foreach ($atts['learning_steps'] as $key => $att): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="learning-steps__item">
                            <div class="learning-steps__item__number  learning-steps__item__number--<?=$j++?>">
                              <?= $att['number'] ?>
                                <div class="point learning-steps__item__point learning-steps__item__point--<?=$i++?>"></div>
                            </div>
                            <div class="learning-steps__item__title text-uppercase"><?= $att['title'] ?></div>
                            <div class="learning-steps__item__text">
                                <?= $att['desk'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
