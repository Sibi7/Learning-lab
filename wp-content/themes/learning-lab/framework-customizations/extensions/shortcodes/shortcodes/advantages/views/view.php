<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

    <section id="section__advantages">
        <div class="container">
            <div class="row">
                <?php if (is_array($atts['list']) && !empty($atts['list'])): ?>
                    <?php foreach ($atts['list'] as $key => $att): ?>
                        <div class="col-md-4">
                            <div class="advantages__item">
                                <div class="row">
                                    <div class="col-3 col-md-12 col-lg-3">
                                        <div class="advantages__item__icon"><img src="<?= $att['icon']['url']; ?>"
                                                                                 alt="<?= $att['icon']['attachment_id']; ?>"></div>
                                    </div>
                                    <div class="col-9 col-md-12 col-lg-9 text-left text-md-center text-lg-left">
                                        <div class="advantages__item__title"><?= $att['title']; ?></div>
                                        <div class="advantages__item__text"><?= $att['desk']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
