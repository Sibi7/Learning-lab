<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

    <!--START SECTION LAST VIDEO-->
    <section class="section" id="section__last-video">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section__title text-uppercase"><?= $atts['title']?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="last-video__items owl-carousel">

                        <?php if (is_array($atts['last_video']) && !empty($atts['last_video'])):?>
                            <?php foreach ($atts['last_video'] as $key => $att): ?>
                                <!--START LAST VIDEO ITEM-->
                                <div class="last-video__item">
                                    <div class="last-video__item__preview" style="background-image: url(<?= $att['logo']['url']?>)"><a
                                                class="play-video-btn fancybox__video"
                                                href="https://www.youtube.com/embed/<?=$att['id_video']?>?autoplay=1"
                                                title="Воспроизвести"></a></div>
                                    <div class="last-video__item__title text-center"><b><?= $att['title']?></b></div>
                                    <div class="last-video__item__text text-center">
                                        <?= $att['desk']?>
                                    </div>
                                </div>
                                <!--END LAST VIDEO ITEM-->
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END SECTION LAST VIDEO-->


