<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="section" id="section__gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title text-uppercase"><?= $atts['title']?></h2>
            </div>
            <div class="col-12">
                <div class="gallery__items owl-carousel">
<!--                    --><?php //if (is_array($atts['gallery']) && !empty($atts['gallery'])): ?>
<!--                        --><?php //foreach ($atts['gallery'] as $key => $att): ?>
<!---->
<!--                            <div class="gallery__item">-->
<!--                                <a href="--><?//= $atts['title']?><!--" class="fancybox__image" data-fancybox="gallery">-->
<!--                                    <img src="--><?php //bloginfo('template_directory') ;?><!--/images/gallery/thumb/gallery__item--01.jpg">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        --><?php //endforeach; ?>
<!--                    --><?php //endif; ?>


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
