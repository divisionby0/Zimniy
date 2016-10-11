<?php

class Poster
{
    private $label;
    private $content;
    private $date;
    private $image;
    private $prices;
    
    public function __construct($label, $content, $date, $image, $prices)
    {
        $this->label = $label;
        $this->content = $content;
        $this->date = $date;
        $this->image = $image;
        $this->prices = $prices;
    }
    
    public function getLabel(){
        return $this->label;
    }
    public function getContent(){
        return $this->content;
    }
    public function getDate(){
        return $this->date;
    }
    public function getImage(){
        return $this->image;
    }
    public function getPrices(){
        return $this->prices;
    }
}