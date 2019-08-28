<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<!--START SECTION ADVANTAGES-->
<section id="section__advantages">
    <div class="container">
        <div class="row">
            <!--START ADVANTAGES ITEM-->
            <div class="col-md-4">
                <div class="advantages__item">
                    <div class="row">
                        <div class="col-3 col-md-12 col-lg-3">
                            <div class="advantages__item__icon advantages__item__icon--online"></div>
                        </div>
                        <div class="col-9 col-md-12 col-lg-9 text-left text-md-center text-lg-left">
                            <div class="advantages__item__title">Обучение 100% онлайн</div>
                            <div class="advantages__item__text">в любое время, в любом месте, с телефона или компьютера</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END ADVANTAGES ITEM-->
            <!--START ADVANTAGES ITEM-->
            <div class="col-md-4">
                <div class="advantages__item">
                    <div class="row">
                        <div class="col-3 col-md-12 col-lg-3">
                            <div class="advantages__item__icon advantages__item__icon--guarantee"></div>
                        </div>
                        <div class="col-9 col-md-12 col-lg-9 text-left text-md-center text-lg-left">
                            <div class="advantages__item__title">Гарантия возврата денег</div>
                            <div class="advantages__item__text">вернём вам деньги без вопросов, пока вы не начали изучать вторую тему</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END ADVANTAGES ITEM-->
            <!--START ADVANTAGES ITEM-->
            <div class="col-md-4">
                <div class="advantages__item">
                    <div class="row">
                        <div class="col-3 col-md-12 col-lg-3">
                            <div class="advantages__item__icon advantages__item__icon--beginner"></div>
                        </div>
                        <div class="col-9 col-md-12 col-lg-9 text-left text-md-center text-lg-left">
                            <div class="advantages__item__title">Уровень: для начинающих</div>
                            <div class="advantages__item__text">наш тренинг подайдет  любому, т.к мы начинаем с самого простого</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END ADVANTAGES ITEM-->
        </div>
    </div>
</section>
<!--END SECTION ADVANTAGES-->
<?php fw_print($atts); ?>