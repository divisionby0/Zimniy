<?php


class Messenger
{
    public function __construct()
    {
        $phone_number = get_option( 'phone_number', '' );
        
        echo '<div id="messenger">
    <div class="text-center tittle2">
        <h3>Связь через месенджер</h3>
    </div>
    <div class="cont-popup">
        <p><span><img src="'.get_template_directory_uri().'/css/images/vibe.png" alt=""></span><mark>Добавьте номер Зимнего Клуба '.$phone_number.'<br>в свою телефонную книгу и найдите нас в программе.</mark></p>
    </div></div>';
    }
}