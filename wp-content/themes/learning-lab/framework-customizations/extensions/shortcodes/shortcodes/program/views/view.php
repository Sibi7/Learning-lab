<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

    <section class="section" id="section__program">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section__title text-uppercase"><?= $atts['title'] ?></h2>
                </div>
            </div>
            <?php if (is_array($atts['program']) && !empty($atts['program'])): ?>
                <?php foreach ($atts['program'] as $key => $att): ?>

                    <div class="row program__item">
                        <div class="col-md-6 program__item__left-block">
                            <div class="program__item__theme-number text-uppercase"><?= $att['theme'] ?></div>
                            <div class="program__item__title text-uppercase"><b><?= $att['title'] ?></b></div>
                            <div class="program__item__lessons">
                                <a href="#section__get-program-banner"  class="btn btn-primary program__item__lessons__btn link__anchor"></a>
                                <ul class="list-unstyled program__item__lessons__list">
                                    <?php if (is_array($att['list_program']) && !empty($att['list_program'])): ?>
                                        <?php foreach ($att['list_program'] as $key => $at): ?>

                                            <li><?= $at['item'] ?></li>

                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 program__item__right-block">
                            <div class="program__item__icons d-flex flex-row justify-content-center align-items-center">
                                <?php if (is_array($att['icon_program']) && !empty($att['icon_program'])): ?>
                                    <?php foreach ($att['icon_program'] as $key => $at): ?>
                                        <div class="program__item__icon">
                                            <span class="program__item__icon--before"
                                                  style="background-image: url(<?= $at['icon']['url'] ?>)"></span>
                                            <?= $at['name'] ?>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="program__item__shadow"></div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </section>
