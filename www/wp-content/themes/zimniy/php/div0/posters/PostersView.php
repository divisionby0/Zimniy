<?php

class PostersView
{
    public function __construct(Map $data)
    {
        echo '<div class="poster-slider"><ul class="bxslider">';

        $postersIterator = $data->getIterator();
        while($postersIterator->hasNext()){
            $poster = $postersIterator->next();

            echo '<li>';
            echo '<div class="poster-item">';
            echo '<div class="poster-img">';
                echo '<img src="'.$poster->getImage().'" alt="'.$poster->getLabel().'" width="540" height="540">';

                echo '<h3>'.$poster->getLabel().'</h3>';
                echo '<span>'.$poster->getDate().'</span><br>';

                //echo '<mark>Line up:</mark><br>';
                echo $poster->getContent();

                $prices = $poster->getPrices();

            echo '</div>';

            /*
            echo '<div class="poster-link">
                            <a href="">Заказать столик</a>
                            <a id="buyOnlineButton" href="#popup-online2" class="modalbox" data-partydate="'.$poster->getDate().'" data-partyimage="'.$poster->getImage().'" data-partycost="'.$prices[0].'" data-partysaleprice="'.$prices[1].'">Купить стоячий билет</a>
                            <a id="buyOnlineButton" href="#popup-online2" class="modalbox" data-partydate="'.$poster->getDate().'" data-partyimage="'.$poster->getImage().'" data-partycost="'.$prices[0].'" data-partysaleprice="'.$prices[1].'">Купить стоячий билет</a>
                        </div>';
            */

            echo '<div class="poster-link">
                            <a href="">Заказать столик</a>
                            <a id="buyOnlineButton" href="#popup-online2" class="modalbox buyOnlineButton" data-partydate="'.$poster->getDate().'" data-partyimage="'.$poster->getImage().'" data-partycost="'.$prices[0].'" data-partysalecost="'.$prices[1].'">Купить стоячий билет</a>
                        </div>';

            echo '</div></li>';
        }

        echo '</ul></div>';
    }
}