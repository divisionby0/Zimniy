<?php

class SchemeControls
{
    private function createRow1(){
        echo '<div class="row custom-margin">
                        <div class="col-sm-6 col-md-6 col-lg-6 pl-0">
                            <div class="room-item room-3">
                                <div class="room-img">
                                    <img src="'.get_template_directory_uri().'/css/images/k1.jpg" alt="">
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
                                    <img src="'.get_template_directory_uri().'/css/images/k1.jpg" alt="">
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
                    </div>';
    }
    private function createRow2(){
        echo '<div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 pl-0">
                            <div class="room-item room-1">
                                <div class="room-img">
                                    <img src="'.get_template_directory_uri().'/css/images/k1.jpg" alt="">
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
                                    <img src="'.get_template_directory_uri().'/css/images/k1.jpg" alt="">
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
                    </div>';
    }
    
    private function createRows(){
        $this->createRow1();
        $this->createRow2();
    }
    
    public function create(){
        echo '<div class="col-sm-12 col-md-4 col-lg-4 pr-0">';
        $this->createRows();
        echo '</div>';
    }
}