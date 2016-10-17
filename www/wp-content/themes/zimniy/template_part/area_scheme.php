<?php
/**
 * The template part for displaying template part
 *
 * @package WordPress
 * @subpackage zimniy
 */
?>
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
                    <?php
                    $schemeMap = new SchemeMap();
                    $schemeMap->create();
                    ?>
                </div>

                <?php
                $schemeControls = new SchemeControls();
                $schemeControls->create();
                ?>
                
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
