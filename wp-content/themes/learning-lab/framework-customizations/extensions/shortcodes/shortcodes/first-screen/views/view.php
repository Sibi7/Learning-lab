<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<!--START SECTION FIRST SCREEN-->
<section id="section__first-screen" class="text-white">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?= $atts['title']; ?>
<!--                <h1 class="text-uppercase">Научитесь создавать <br><b>обучающие видео</b></h1>-->
            </div>
            <div class="col-12 first-screen__undertitle">
                <p class="text-uppercase">
                    всего за
                    <br class="d-inline d-md-none">
                    <span class="first-screen__undertitle__bordered-text"><b><?= $atts['time']; ?></b> дней</span>
                    <span class="first-screen__undertitle__bordered-text"><b><?= $atts['money']; ?></b> тыс. тг</span>
                </p>
                <p><?= $atts['desk']; ?></p>
            </div>
            <div class="col-12 text-center text-md-left">
                <button type="button" data-toggle="modal" data-target="#send-order-modal" class="btn btn-primary btn-primary--linked" title="Записаться на курс" data-modal-title="Записаться на курс">Записаться на курс</button>
            </div>
        </div>
    </div>
</section>
<!--END SECTION FIRST SCREEN-->
