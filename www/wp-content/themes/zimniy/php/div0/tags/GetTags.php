<?php


class GetTags
{
    public function execute()
    {
        $tagsCollection = new Map('tags');
        
        $tags = get_terms(array(
            'taxonomy' => 'post_tag',
            'hide_empty' => false,
        ));

        foreach($tags as &$tag){
            $tagName = $tag->name;
            $tagsCollection->add($tagName, $tagName);
        }
        return $tagsCollection;
    }
}