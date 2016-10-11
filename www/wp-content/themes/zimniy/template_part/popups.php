<?php
/**
 * The template part for displaying template part
 *
 * @package WordPress
 * @subpackage zimniy
 */
?>
<div id="popup-rent">
    <div class="form-rent text-center tittle2">
        <h3>Аренда клуба</h3>
        <form class="" action="#" method="post">
            <div class="group-date">
                <span>Интересующая дата:</span>
                <input type="text" class="datepicker" placeholder="Дата">
            </div>
            <div class="group">
                <input type="text" name="name" placeholder="Ваше имя">
            </div>
            <div class="group">
                <input type="text" name="phone" class="phone_numb" placeholder="Ваш телефон">
            </div>
            <div class="group">
                <button>Оставить заявку</button>
            </div>
        </form>
    </div>
</div>
<div id="popup-online">
    <div class="form-online">
        <div class="text-center tittle2">
            <h3>Онлайн заказ столика</h3>
        </div>
        <div class="clearfix"></div>
        <div class="hidden-lg hidden-md col-xs-12">
            <div class="online-img">
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/online-img.jpg" alt="">
                <a href="#scheme" class="">Просмотреть схему зала</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <form class="" action="#" method="post">
                <div class="group-date">
                    <div class="col-sm-12 col-md-6 pl-0">
                        <span>Интересующая дата:</span>
                        <input type="text" class="datepicker" placeholder="Дата">
                        <mark>Свободных столиков 2</mark>
                    </div>
                    <div class="col-sm-12 col-md-6 pr-0">
                        <span>Столик:</span>
                        <select class="select">
                            <option>Vip зона</option>
                            <option>Подиум</option>
                            <option>Боковые</option>
                            <option>Центр</option>
                        </select>
                        <a href="">Просмотреть схему зала</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="group">
                    <input type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="group">
                    <input type="text" name="phone" placeholder="Контактный номер телефна">
                </div>
                <div class="group-chek">
                    <p>Сумма заказа: <b>2500 рублей</b></p>
                    <input type="checkbox" id="chek1"> <label for="chek1">Оплатить онлайн</label>
                </div>
                <div class="group">
                    <button>Забронировать столик</button>
                </div>
                <div class="podb">
                    Мы не гарантируем наличие свободного столика,<br>если за него не бы внесен депозит.
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-6 visible-lg visible-md">
            <div class="online-img">
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/online-img.jpg" alt="">
                <a href="#scheme">Просмотреть схему зала</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!-- buy online popup -->

<?php
new BuyOnlinePopup();
?>

<div id="messenger">
    <div class="text-center tittle2">
        <h3>Связь через месенджер</h3>
    </div>
    <div class="cont-popup">
        <p><span><img src="<?php echo get_template_directory_uri(); ?>/css/images/vibe.png" alt=""></span><mark>Добавьте номер “Зимнего Клуба” +7 926 5 500 500<br>в свою телефонную книгу и найдите нас в программе.</mark></p>
    </div>
</div>
