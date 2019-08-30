<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package artcraft
 */

?>

<?php the_content(); ?>
<body>




























<!--START SECTION GALLERY-->
<section class="section" id="section__gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title text-uppercase">Фотогалерея</h2>
            </div>
            <div class="col-12">
                <div class="gallery__items owl-carousel">
                    <!--START GALLERY ITEM-->
                    <div class="gallery__item"><a href="<?php bloginfo('template_directory') ;?>/images/gallery/gallery__item--01.jpg" class="fancybox__image" data-fancybox="gallery"><img src="<?php bloginfo('template_directory') ;?>/images/gallery/thumb/gallery__item--01.jpg"></a></div>
                    <!--END GALLERY ITEM-->
                    <!--START GALLERY ITEM-->
                    <div class="gallery__item"><a href="<?php bloginfo('template_directory') ;?>/images/gallery/gallery__item--02.jpg" class="fancybox__image" data-fancybox="gallery"><img src="<?php bloginfo('template_directory') ;?>/images/gallery/thumb/gallery__item--02.jpg"></a></div>
                    <!--END GALLERY ITEM-->
                    <!--START GALLERY ITEM-->
                    <div class="gallery__item"><a href="<?php bloginfo('template_directory') ;?>/images/gallery/gallery__item--03.jpg" class="fancybox__image" data-fancybox="gallery"><img src="<?php bloginfo('template_directory') ;?>/images/gallery/thumb/gallery__item--03.jpg"></a></div>
                    <!--END GALLERY ITEM-->
                    <!--START GALLERY ITEM-->
                    <div class="gallery__item"><a href="<?php bloginfo('template_directory') ;?>/images/gallery/gallery__item--04.jpg" class="fancybox__image" data-fancybox="gallery"><img src="<?php bloginfo('template_directory') ;?>/images/gallery/thumb/gallery__item--04.jpg"></a></div>
                    <!--END GALLERY ITEM-->
                    <!--START GALLERY ITEM-->
                    <div class="gallery__item"><a href="<?php bloginfo('template_directory') ;?>/images/gallery/gallery__item--05.jpg" class="fancybox__image" data-fancybox="gallery"><img src="<?php bloginfo('template_directory') ;?>/images/gallery/thumb/gallery__item--05.jpg"></a></div>
                    <!--END GALLERY ITEM-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--END SECTION GALLERY-->

<!--START SECTION RESULTS-->
<section class="section" id="section__results">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section__title text-uppercase">Итоги обучения</h2>
                <h2 class="section__undertitle text-uppercase">что вы получаете,после нашего тренинга</h2>
            </div>
            <div class="col-md-5 offset-md-1">
                <!--START RESULTS ITEM-->
                <div class="results__item">
                    <div class="point results__item__point"></div>
                    <b>Научитесь монтировать видео</b>: добавлять <br>анимации, иконки, слайды, кадры из фильмов
                </div>
                <!--END RESULTS ITEM-->
                <!--START RESULTS ITEM-->
                <div class="results__item">
                    <div class="point results__item__point"></div>
                    <b>Самостоятельно создадите обучающие <br>видео</b> без бюджета
                </div>
                <!--END RESULTS ITEM-->
                <!--START RESULTS ITEM-->
                <div class="results__item">
                    <div class="point results__item__point"></div>
                    <b>Создадите собственные онлайн курсы</b> и у вас появятся слушатели по всей стране
                </div>
                <!--END RESULTS ITEM-->
                <!--START RESULTS ITEM-->
                <div class="results__item">
                    <div class="point results__item__point"></div>
                    <b>Снимете обучающие видео</b> при помощи <br>мобильного телефона
                </div>
                <!--END RESULTS ITEM-->
                <!--START RESULTS ITEM-->
                <div class="results__item">
                    <div class="point results__item__point"></div>
                    <b>Обучитесь работе в компьютерных программах</b> <br>при помощи съёмки видео с экрана
                </div>
                <!--END RESULTS ITEM-->
                <!--START RESULTS ITEM-->
                <div class="results__item">
                    <div class="point results__item__point"></div>
                    <b>Получите сертификат</b> подтверждающий <br>освоенные навыки
                </div>
                <!--END RESULTS ITEM-->
            </div>
        </div>
    </div>
</section>
<!--END SECTION RESULTS-->

<!--START SECTION GUARANTEE-->
<section class="section section--bordered" id="section__guarantee">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__bordered-block">
                    <h2 class="section__title text-uppercase">гарантия возврата средств</h2>
                    <div class="guarantee__value text-uppercase">
                        100%<br>
                        <span>* при условии что вы не начали обучение вторго блока</span>
                        <div class="section__undertitle">мы вернем вам стоимомть тренинга без каких либо вопросов</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END SECTION GUARANTEE-->

<!--START SECTION FAQ-->
<section class="section" id="section__faq">
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-12">
                <h2 class="section__title text-uppercase">Отвечаем на самые популярные вопросы</h2>
            </div>
            <div class="d-md-none col-12">
                <h2 class="section__title text-uppercase">Отвечаем на вопросы</h2>
            </div>
        </div>
        <!--START FAQ ITEM-->
        <div class="row">
            <div class="col-12">
                <div class="faq__item">
                    <a href="#faq__item__answer--01" class="link link--black faq__item__question" data-toggle="collapse" role="button" aria-expanded="false">
                        <span class="faq__item__question__btn"></span>
                        Я никогда не занимался видеосъемкой и монтажем,действительно ли у меня получится?
                    </a>
                    <div id="faq__item__answer--01" class="collapse">
                        <div class="faq__item__answer">
                            <p>Конечно!Мы учим с нуля.Во всем помогут опытные наставники,которые будут курировать вас на протяжении всей программы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END FAQ ITEM-->
        <!--START FAQ ITEM-->
        <div class="row">
            <div class="col-12">
                <div class="faq__item">
                    <a href="#faq__item__answer--02" class="link link--black faq__item__question" data-toggle="collapse" role="button" aria-expanded="false">
                        <span class="faq__item__question__btn"></span>
                        Я никогда не занимался видеосъемкой и монтажем,действительно ли у меня получится?
                    </a>
                    <div id="faq__item__answer--02" class="collapse">
                        <div class="faq__item__answer">
                            <p>Конечно!Мы учим с нуля.Во всем помогут опытные наставники,которые будут курировать вас на протяжении всей программы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END FAQ ITEM-->
        <!--START FAQ ITEM-->
        <div class="row">
            <div class="col-12">
                <div class="faq__item">
                    <a href="#faq__item__answer--03" class="link link--black faq__item__question" data-toggle="collapse" role="button" aria-expanded="false">
                        <span class="faq__item__question__btn"></span>
                        Я никогда не занимался видеосъемкой и монтажем,действительно ли у меня получится?
                    </a>
                    <div id="faq__item__answer--03" class="collapse">
                        <div class="faq__item__answer">
                            <p>Конечно!Мы учим с нуля.Во всем помогут опытные наставники,которые будут курировать вас на протяжении всей программы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END FAQ ITEM-->
        <!--START FAQ ITEM-->
        <div class="row">
            <div class="col-12">
                <div class="faq__item">
                    <a href="#faq__item__answer--04" class="link link--black faq__item__question" data-toggle="collapse" role="button" aria-expanded="false">
                        <span class="faq__item__question__btn"></span>
                        Я никогда не занимался видеосъемкой и монтажем,действительно ли у меня получится?
                    </a>
                    <div id="faq__item__answer--04" class="collapse">
                        <div class="faq__item__answer">
                            <p>Конечно!Мы учим с нуля.Во всем помогут опытные наставники,которые будут курировать вас на протяжении всей программы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END FAQ ITEM-->
    </div>
</section>
<!--END SECTION FAQ-->

<!--START SECTION HAVE QUESTIONS-->
<section class="section" id="section__have-questions">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-block get-program-banner__block text-center">
                    <div class="banner-block__title text-uppercase">Остались вопросы?</div>
                    <div class="banner-block__undertitle text-uppercase">мы ответим на все ваши вопросы,просто напишите нам</div>
                    <div class="banner-block__btn">
                        <button class="btn btn-primary" title="Задать свой вопрос" data-toggle="modal"  data-modal-title="Задать вопрос" data-target="#send-order-modal">Задать свой вопрос</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END SECTION HAVE QUESTIONS-->

<!--START SECTION CONTACTS-->
<section class="section" id="section__contacts">
    <div class="contacts__map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A969db3ee9bc5bc61e0f1252f863b66dd69379c57c139222bff38b93b97c9b6d9&amp;width=100%25&amp;height=500&amp;lang=ru_UA&amp;scroll=true"></script>
    </div>
    <div class="contacts__block">
        <div class="section__title text-uppercase text-left">Наши контакты</div>
        <p>
            <b>Ул.Жандосова ,55 1-й микрорайон,</b> <br>
            81 г.Алматы,Казахстан. <br>
            050035 При университете «НАРХОЗ»
        </p>
        <p>
            <a href="tel:87017953233" title="+7 701 795 32 33" class="link link--black link__phone">+7 701 795 32 33</a>
            <a href="mailto:info@ell.kz" title="info@ell.kz" class="link link--blue">info@ell.kz</a>
        </p>
    </div>
</section>
<!--END SECTION CONTACTS-->



<!--START SEND ORDER MODAL-->
<div class="modal fade" id="send-order-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form onsubmit="send_order(this);return false;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Отправить код на почту</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 pt-3 pb-3">
                            <div class="form-group mb-4">
                                <label for="input_email">Введите Ваше имя:</label>
                                <input type="email" name="email" class="form-control" id="input_email" placeholder="Введите Ваше имя">
                            </div>
                            <div class="form-group mb-5">
                                <label for="input_phone">Введите номер телефона</label>
                                <input type="text" name="phone" class="form-control" id="input_phone" placeholder="Введите номер телефона" required>
                            </div>
                            <input type="hidden" name="type">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END SEND ORDER MODAL-->

<!--START THANKS MODAL-->
<div class="modal fade" id="thanks-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заявка успешно отправлена</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 offset-md-2 pt-3 pb-3">
                        <div class="alert alert-success text-center" role="alert">
                            <p>Вашая заявка успешно отправлена!</p> <p>В ближайщее время с Вами свяжется наш менеджер</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END THANKS MODAL-->

<!--START GO TOP BTN-->
<div id="gotop-btn"></div>
<!--START GO TOP BTN-->

</body>