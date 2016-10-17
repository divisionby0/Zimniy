<?php
?>
<div class="container">
    <div class="text-center tittle">
        <h2>Контакты</h2>
    </div>
    <div class="col-md-4 col-lg-4">
        <h4>Развлекательный комплекс<br>“Зимний Клуб”</h4>

        <?php
        $address = get_option( 'address', '' );
        echo '<mark>'.$address.'</mark>';
        ?>
        
        <p>Время работы:<br>
            Кафе: с 18:00 до 05:00 ежедневно<br>
            Ресторан: с 18:00 до 24:00 (пн-чт)<br>
            Клуб: с 21:00 до 06:00 (пт-сб.)<br>
            Банкеты: По договоренности
        </p>
        <div class="form-footer">
            <div class="tittler-form">
                Задать вопрос
            </div>
            <form class="top-form" action="#" method="post">
                <div class="group">
                    <input type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="group">
                    <input type="text" name="name" placeholder="Ваш e-mail">
                </div>
                <div class="group">
                    <textarea name="text" placeholder="Ваш вопрос:"></textarea>
                </div>
                <div class="group">
                    <button>Оставить заявку</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-8 col-lg-8 p0">
        <div class="map2">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=0X2eBi0LRqoInQ_GzEkQReB3_9sn6Pwp&amp;width=100%&amp;height=508&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
        </div>
        <div class="soc-footer">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/soc-1.png" alt=""></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/soc-2.png" alt=""></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/soc-3.png" alt=""></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/soc-4.png" alt=""></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/soc-5.png" alt=""></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/soc-6.png" alt=""></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/soc-7.png" alt=""></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/soc-8.png" alt=""></a>
        </div>
        <div class="phone-footer">
            <?php
            $phone_number = get_option( 'phone_number', '' );
            echo $phone_number;
            ?>
        </div>
    </div>
</div>
