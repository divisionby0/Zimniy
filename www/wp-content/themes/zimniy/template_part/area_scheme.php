<?php
/**
 * The template part for displaying template part
 *
 * @package WordPress
 * @subpackage zimniy
 */
?>
<div class="girl-back">

    <!-- begin scheme -->
    <section id="scheme">
        <div class="container">
            <div class="text-center tittle">
                <h2>Выбрать столики на схеме зала</h2>
                <div class="clearfix"></div>
                <span>Выберите столик на схеме зала, чтобы узнать его стоимость* или выберите предложение и столики выделятся на схеме зала</span>
            </div>
            <div class="row">
                <div class="visible-lg visible-md col-md-8 col-lg-8 pl-0">
                    <div class="plane">
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/plane.png" alt="" id="" usemap="#simple" class="map">
                        <map name="simple">
                            <area id="dir1" shape="poly" alt="" title="" coords="80,15,80,315,126,315,123,15" data-maphilight='{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}' />
                            <area id="dir2" shape="rect" alt="" title="" coords="155,311,385,393" data-maphilight='{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}' />
                            <area id="dir3" shape="rect" alt="" title="" coords="159,15,562,77" data-maphilight='{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}' />
                            <area id="dir3-1" shape="rect" alt="" title="" coords="390,341,582,397" data-maphilight='{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}' />
                            <area id="dir5" shape="rect" alt="" title="" coords="290,93,417,269" data-maphilight='{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}' />
                        </map>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 pr-0">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 pl-0">
                            <div class="room-item room-1">
                                <div class="room-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/css/images/k1.jpg" alt="">
                                </div>
                                <h3>Vip зона</h3>
                                <p>Изолированные кабинки<br>
                                    с диванами до<br>
                                    10 человек</p>
                                <div class="price">
                                    4000р.*
                                </div>
                                <a href="#popup-online" class="modalbox">Заказать</a>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-lg-6 pr-0">
                            <div class="room-item room-2 m0">
                                <div class="room-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/css/images/k1.jpg" alt="">
                                </div>
                                <h3>Подиум</h3>
                                <p>Столики с диванами в<br>
                                    отдельной зоне до<br>
                                    10 человек</p>
                                <div class="price">
                                    3000р.*
                                </div>
                                <a href="#popup-online" class="modalbox">Заказать</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row custom-margin">
                        <div class="col-sm-6 col-md-6 col-lg-6 pl-0">
                            <div class="room-item room-3">
                                <div class="room-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/css/images/k1.jpg" alt="">
                                </div>
                                <h3>Боковые</h3>
                                <p>Столики сдиванами<br>
                                    в общем зале до<br>
                                    10 человек</p>
                                <div class="price">
                                    2500р.*
                                </div>
                                <a href="#popup-online" class="modalbox">Заказать</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 pr-0">
                            <div class="room-item room-4 m0">
                                <div class="room-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/css/images/k1.jpg" alt="">
                                </div>
                                <h3>Центр</h3>
                                <p>Столики со стульями<br>
                                    в общем зале до<br>
                                    4 человек</p>
                                <div class="price">
                                    1000р.*
                                </div>
                                <a href="#popup-online" class="modalbox">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <p class="custom-1">*Депозит можно израсходовать на оплату счета бара или ресторана (за исключением крейзи-меню)<br>
                    Если сумма счета меньше размера депозита то его остаток не возвращается</p>
                <div class="other-a">
                    <a class="anhor2" href="#photo">Просмотреть фото интерьера</a>
                    <a href="#popup-rent" class="modalbox">Арендовать зал целиком</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <!-- end scheme -->
