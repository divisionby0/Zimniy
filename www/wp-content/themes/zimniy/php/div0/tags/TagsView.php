<?php

class TagsView
{
    public function __construct(Map $collection)
    {
        echo '<h4>Популярные метки</h4>';
        echo '<p>';
        $tagsIterator = $collection->getIterator();

        while($tagsIterator->hasNext()){
            $tag = $tagsIterator->next();
            echo '<span><a href="#" title="Select all data with '.$tag.'" data-tagname="'.$tag.'">#'.$tag.'</a></span>';
        }
        echo '</p>';
    }
}