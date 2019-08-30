<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="section" id="section__reviews">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title text-uppercase"><?= $atts['title'] ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="reviews__items owl-carousel">

                    <?php if (is_array($atts['reviews']) && !empty($atts['reviews'])): ?>
                        <?php foreach ($atts['reviews'] as $key => $att): ?>
                            <div class="reviews__item text-center">
                                <div class="reviews__item__video"
                                     style="background-image: url(<?= $att['photo']['url'] ?>)"><a
                                            class="play-video-btn fancybox__video"
                                            href="https://www.youtube.com/embed/<?= $att['id_video'] ?>?autoplay=1"
                                            title="Воспроизвести"></a></div>
                                <div class="reviews__item__name"><b><?= $att['name'] ?></b></div>
                                <div class="reviews__item__post"><?= $att['position'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
