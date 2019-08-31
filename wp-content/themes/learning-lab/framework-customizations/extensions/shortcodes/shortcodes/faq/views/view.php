<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<!--START SECTION FAQ-->
<section class="section" id="section__faq">
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-12">
                <h2 class="section__title text-uppercase"><?= $atts['title']?></h2>
            </div>
        </div>
        <!--START FAQ ITEM-->
        <?php if (is_array($atts['faq']) && !empty($atts['faq'])): $i = 01; $j = 01;?>
            <?php foreach ($atts['faq'] as $key => $att): ?>

                <div class="row">
                    <div class="col-12">
                        <div class="faq__item">
                            <a href="#faq__item__answer--<?=$i++?>" class="link link--black faq__item__question" data-toggle="collapse" role="button" aria-expanded="false">
                                <span class="faq__item__question__btn"></span>
                                <?= $att['question']?>
                            </a>
                            <div id="faq__item__answer--<?=$j++?>" class="collapse">
                                <div class="faq__item__answer">
                                    <p> <?= $att['answer']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>


    </div>
</section>
<!--END SECTION FAQ-->
