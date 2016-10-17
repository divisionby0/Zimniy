<?php

class GetTicketButton
{
    public function __construct()
    {
        //$add_to_cart = do_shortcode('[add_to_cart_url id="25"]');
        $checkout = do_shortcode('[woocommerce_checkout id=58]');
        //do_shortcode('[viewBuyButton]');


        echo '<a href="'. $checkout .'"><img src="'. get_template_directory_uri() . '/img/small-cart.png" />Buy Now</a>';

        //echo '<button>Получить билет</button>';
    }
}