<?php

class GetQuotes
{
    public function __construct()
    {
    }

    public function execute()
    {
        global $wpdb;
        $results = $wpdb->get_results( 'SELECT id, quote, postId, sentenceId, (SELECT post_title FROM wp_posts WHERE id=postId) as postTitle FROM `wp_custom_quotes`', ARRAY_A );

        return $results;
    }
}