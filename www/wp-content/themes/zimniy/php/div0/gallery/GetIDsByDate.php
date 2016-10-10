<?php

class GetIDsByDate
{
    public function execute($date)
    {
        global $wpdb;
        $query = 'SELECT post_id FROM wp_postmeta WHERE (CONVERT(`meta_id` USING utf8) LIKE '.$date.' OR CONVERT(`post_id` USING utf8) LIKE '.$date.' OR CONVERT(`meta_key` USING utf8) LIKE '.$date.' OR CONVERT(`meta_value` USING utf8) LIKE '.$date.')';
        $results = $wpdb->get_results($query, ARRAY_A);
        var_dump($results);
    }
}