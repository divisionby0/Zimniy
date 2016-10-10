<?php


class GalleryView
{
    private $images;
    private $totalRows;
    private $columns = 4;
    private $rows = 5;
    private $ids;
    private $totalPages;
    private $pages;
    private $logger;

    public function __construct(Map $collection)
    {
        //$this->logger = Logger::getRootLogger();
        /*
        $this->pages = new Map('pages');
        $this->images = $collection;
        $this->ids = $collection->getKeys();
        $this->totalRows = round($collection->size()/$this->columns);
        $this->totalPages = ceil($collection->size()/20);

        $this->createContainerPrefix();
        $this->createContent();
        $this->createContainerPostfix();
        */

        $this->createContainerPrefix();
        $this->createContainerPostfix();
    }

    private function createContent(){

        for($k=0; $k<$this->totalPages; $k++){

            $this->createPagePrefix();

            $startIndex = $k*$this->columns*$this->rows;
            $finishIndex = $startIndex + $this->columns*$this->rows;

            if($finishIndex > ($this->images->size()-1)){
                $finishIndex = $this->images->size();
            }

            for($i=$startIndex; $i<$finishIndex; $i+=$this->rows-1){
                $rowStartIndex = $i;
                $this->createRow($rowStartIndex);
            }
            
            $this->createPagePostfix();
        }
    }

    private function createRow($startIndex){
        $this->createRowPrefix();
        for($j=$startIndex; $j<$startIndex+$this->columns; $j++){

            if($j<sizeof($this->ids)){
                $key = $this->ids[$j];
                $image = $this->images->get($key);
                $this->createImageHtml($image);
            }
        }
        $this->createRowPostfix();
    }

    private function log($message){
        //$this->logger->debug($message);
    }

    private function createImageHtml(Image $image){
        echo '<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">';
        echo '<div class="slide-item">';

        echo '<a href="'.$image->getUrl().'" class="modalbox" rel="gallery"><img src="'.$image->getThumb().'" width="160" height="96" alt=""></a>';
        echo '</div></div>';
    }

    private function createRowPrefix(){
        echo '<div class="row">';
    }
    private function createRowPostfix(){
        echo '</div>';
    }

    private function createPagePrefix(){
        echo '<li>';
    }
    private function createPagePostfix(){
        echo '</li>';
    }

    private function createContainerPrefix(){
        echo '<div class="col-md-12 col-lg-8 pr-0">';
        echo '<div class="bxslider2" id="gallerySlider">';
    }
    private function createContainerPostfix(){
        echo '</div></div>';
    }
}