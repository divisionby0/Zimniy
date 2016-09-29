<?php


class GetNotes
{
    public function execute()
    {
        global $wpdb;
        $results = $wpdb->get_results( 'SELECT note, author, authorName, quoteId, state FROM `wp_custom_quotes_notes`', ARRAY_A );

        return $results;
    }
}