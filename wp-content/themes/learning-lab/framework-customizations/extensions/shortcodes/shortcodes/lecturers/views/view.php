<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="section" id="section_lecturers">
    <div class="container">
        <div class="row">
            <div class="col-12 d-block d-md-none">
                <h2 class="section__title text-uppercase"><?=$atts['title']?></h2>
            </div>
            <div class="col-12">
                <div class="lecturers__items owl-carousel">


                    <?php if (is_array($atts['lecturers']) && !empty($atts['lecturers'])):?>
                        <?php foreach ($atts['lecturers'] as $key => $att): ?>
                            <div class="lecturers__item text-center">
                                <div class="lecturers__item__photo"><img src="<?=$att['photo']['url']?>" alt="man"></div>
                                <div class="lecturers__item__name text-uppercase"><b><?=$att['name']?></b></div>
                                <div class="lecturers__item__text">
                                    <?=$att['desk']?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>


