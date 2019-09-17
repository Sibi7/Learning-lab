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
                                <input type="text" name="text" class="form-control" id="input_email" placeholder="Введите Ваше имя">
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