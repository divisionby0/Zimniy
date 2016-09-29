<?php

class InitQuoteAdmin {
    public function __construct(){

        function my_plugin_menu() {
            add_menu_page( 'Цитаты опции', 'Цитаты', 'edit_posts', 'quotes', 'my_plugin_options', plugin_dir_url(__FILE__) . 'images/icon_wporg.png', 20);
        }

        function my_plugin_options() {
            if ( !current_user_can( 'manage_options' ) )  {
                wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
            }
            $quotesGetter = new GetQuotes();
            $quotes = $quotesGetter->execute();

            $quotesParser = new QuotesParser($quotes);
            $quotesCollection = $quotesParser->parse();

            // get notes collection
            $notesGetter = new GetNotes();
            $notes = $notesGetter->execute();

            var_dump($notes);
            
            echo '<h1>Quotes</h1>';
            echo '<div class="wrap">';
            new QuotesTableView(null, $quotesCollection);
            echo '</div>';

        }

        add_action( 'admin_menu', 'my_plugin_menu' );
        
    }
} 