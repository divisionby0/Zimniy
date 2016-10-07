<?php


class Image
{
    private $id;
    private $thumb;
    private $url;
    
    public function __construct($id, $url, $thumb)
    {
        $this->id = $id;
        $this->url = $url;
        $this->thumb = $thumb;
    }
    
    public function getId(){
        return $this->id;
    }
    public function getUrl(){
        return $this->url;
    }

    public function getThumb(){
        return $this->thumb;
    }
}