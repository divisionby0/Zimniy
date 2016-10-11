<?php


class BuyOnlinePopup
{
    public function __construct()
    {
        echo '<div id="popup-online2">
    <div class="form-online">
        <div class="text-center tittle2">
            <h3>Электронный билет</h3>
        </div>
        <div class="clearfix"></div>
        <div class="hidden-lg hidden-md col-xs-12">
            <div class="online-img">
                <img src="" alt="" class="partyImage" width="311" height="311">
                <a href="#scheme">Просмотреть схему зала</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <form class="" action="#" method="post">
                <div class="group-date">
                    <div class="col-sm-12 col-md-6 pl-0">
                        <span>Интересующая дата:</span>
                        <input type="text" class="datepicker" placeholder="Дата">
                    </div>
                    <div class="col-sm-12 col-md-6 pr-0 сhek-style">
                        <span>Пол:</span>
                        <input type="radio" id="chek2" class="chekstyle" name="group1"> <label for="chek2">М</label>
                        <input type="radio" id="chek3" class="chekstyle" name="group1"> <label for="chek3">Ж</label>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="group">
                    <input type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="group">
                    <input type="text" name="phone" placeholder="Контактный номер телефона">
                </div>
                <div class="group-chek">
                    <p>Сумма заказа: <b id="costContainer">50 рублей</b></p>
                    <input type="checkbox" id="chek1"> <label for="chek1">Оплатить онлайн</label>
                </div>
                <div class="group">
                    <button>Получить билет</button>
                </div>
                <div class="podb">
                    Мы не гарантируем наличие свободного столика,<br>если за него не бы внесен депозит.
                </div>
            </form>
        </div>
        
        <div class="col-sm-12 col-md-6 visible-lg visible-md">
            <div class="online-img">
                <img src="" alt="" class="partyImage" width="311" height="311">
                <a href="#scheme">Просмотреть схему зала</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>';
    }
}