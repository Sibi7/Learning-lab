<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<section class="section" id="section__results">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section__title text-uppercase"><?= $atts['title']?></h2>
                <h2 class="section__undertitle text-uppercase"><?= $atts['subtitle']?></h2>
            </div>

            <div class="col-md-5 offset-md-1">

                <?php if (is_array($atts['results']) && !empty($atts['results'])): ?>
                    <?php foreach ($atts['results'] as $key => $att): ?>


                        <div class="results__item">
                            <div class="point results__item__point"></div>
                            <?= $att['desk']; ?>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
