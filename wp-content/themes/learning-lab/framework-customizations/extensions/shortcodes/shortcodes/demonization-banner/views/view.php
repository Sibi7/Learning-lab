<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="section" id="section__demonization-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-block text-center">
                    <div class="banner-block__title text-uppercase"><?= $atts['title']?></div>
                    <div class="banner-block__undertitle text-uppercase"><?= $atts['subtitle']?></div>
                    <div class="banner-block__btn">
                        <button class="btn btn-primary" title="Получить доступ" data-toggle="modal" data-modal-title="<?= $atts['modal_title']?>" data-target="#send-order-modal"><?= $atts['btn_name']?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


