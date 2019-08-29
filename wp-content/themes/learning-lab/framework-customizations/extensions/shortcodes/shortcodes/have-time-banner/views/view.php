<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<!--START SECTION HAVE TIME BANNER-->
<section class="section" id="section__have-time-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title text-uppercase"><?= $atts['title']?></h2>
                <div class="have-time-banner__deadline">
                    <div class="have-time-banner__deadline__price">
                        <?= $atts['sale']?>
                        <div class="have-time-banner__deadline__old-price text-right">
                            <span><?= $atts['data_sale']?></span>
                            <br>
                            <b><?= $atts['price']?> <span>тг</span></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="have-time-banner__form">
            <form class="d-block" onsubmit="send_order(this);return false;">
                <div class="d-flex flex-row justify-content-center align-items-center have-time-banner__input-groups">
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" placeholder="Имя" aria-label="Имя">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" name="phone" placeholder="Телефон" aria-label="Телефон" required>
                    </div>
                    <input type="hidden" name="type" value="Форма со скидкой">
                    <button type="submit" class="btn btn-primary" title="Заказать звонок">Заказать звонок</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--END SECTION HAVE TIME BANNER-->
