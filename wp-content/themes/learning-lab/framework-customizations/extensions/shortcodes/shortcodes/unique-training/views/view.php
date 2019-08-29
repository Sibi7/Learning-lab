<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<section class="section" id="section__unique-training">
    <div class="container">
        <div class="row d-flex flex-row justify-content-between align-items-center">
            <div class="col-md-12 col-lg-5">
                <h2 class="section__title text-uppercase text-center text-lg-left"><?=$atts['title']?></h2>
                <div class="section__undertitle text-center text-lg-left"><?=$atts['subtitle']?></div>
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="unique-training__video" style="background-image: url(<?= $atts['preview']['url']?>)">
                    <a class="unique-training__video__play-btn fancybox__video" data-height="200px" href="https://www.youtube.com/embed/<?= $atts['video']?>?autoplay=1" title="Воспроизвести"></a>
                </div>
            </div>
        </div>
    </div>
</section>

