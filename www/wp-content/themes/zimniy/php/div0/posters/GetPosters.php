<?php

class GetPosters
{
    public function execute()
    {
        $args = array(
            'post_type' => 'product'
        );

        $postersCollection = new Map('posters');
        
        $posters = get_posts($args);
        
        foreach($posters as $poster){ 
            $label = $poster->post_title;
            $content = $poster->post_content;
            $content = apply_filters('the_content', $content);
            $date = get_post_meta($poster->ID, 'party_date');

            $_product = wc_get_product( $poster->ID );

            $regularPrice = $_product->get_regular_price();
            $salePrice = $_product->get_sale_price();

            $date = get_post_meta($poster->ID, 'party_date');

            $attachment_ids[0] = get_post_thumbnail_id( $poster->ID);
            $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' );

            $newPoster = new Poster($label, $content, $date[0], $attachment[0], array($regularPrice, $salePrice, $price));
            $postersCollection->add($poster->ID, $newPoster);
        }
        wp_reset_postdata();

        return $postersCollection;
    }
}