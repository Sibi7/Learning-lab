<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="section section--bordered" id="section__guarantee">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__bordered-block">
                    <h2 class="section__title text-uppercase"><?=$atts['title']?></h2>
                    <div class="guarantee__value text-uppercase">
                        <?=$atts['interest']?><br>
                        <span><?=$atts['condition']?></span>
                        <div class="section__undertitle"><?=$atts['desk']?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
