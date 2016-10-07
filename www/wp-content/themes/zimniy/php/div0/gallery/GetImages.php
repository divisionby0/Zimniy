<?php

class GetImages
{
    public function execute(){
        global $wpdb;
        $query = 'SELECT ID, guid FROM wp_posts WHERE post_type = "attachment" AND post_mime_type = "image/jpeg"';
        $results = $wpdb->get_results($query, ARRAY_A);
        return $this->parse($results);
    }
    
    private function addThumbs(){
        
    }
    
    private function parse($data){
        $collection = new Map('images');

        foreach($data as &$item){
            $id = $item["ID"];
            $imageUrl = $item["guid"];

            $thumb = wp_get_attachment_thumb_url($id);

            $image = new Image($id, $imageUrl, $thumb);

            //Logger::logMessage('thumb: '.$thumb);

            $collection->add($id, $image);
        }

        return $collection;
    }
}