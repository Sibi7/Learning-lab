<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<section class="section" id="section__questions">
    <div class="container">
        <div class="row">
            <?php if (is_array($atts['questions']) && !empty($atts['questions'])): ?>
                <?php foreach ($atts['questions'] as $key => $att): ?>

                    <div class="col-md-6 col-xl-3">
                        <div class="questions__item">
                            <div class="questions__item__icon"></div>
                            <div class="questions__item__text">
                                <?= $att['desk']; ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
