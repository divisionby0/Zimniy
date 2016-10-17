<?php

class RentClubPopup
{
    public function __construct()
    {
        echo '<div id="popup-rent">
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
</div>';
    }
}