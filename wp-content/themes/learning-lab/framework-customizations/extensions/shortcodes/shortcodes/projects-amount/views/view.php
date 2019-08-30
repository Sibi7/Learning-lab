<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>



<!--START SECTION PROJECTS AMOUNT-->
<section class="section section--bordered" id="section__projects-amount">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__bordered-block">
                    <h2 class="section__title text-uppercase"><?=$atts['title']?></h2>
                    <div class="section__undertitle text-center text-uppercase"><?=$atts['subtitle']?></div>
                    <div class="projects-amount__value text-center"><?=$atts['counter']?> <span>тг</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END SECTION PROJECTS AMOUNT-->

