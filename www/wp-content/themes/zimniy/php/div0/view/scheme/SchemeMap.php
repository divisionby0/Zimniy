<?php

class SchemeMap
{

    private function createArea1(){
        echo '<area id="dir1" shape="poly" alt="" title="" coords="80,15,80,315,126,315,123,15" data-maphilight=\'{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}\' />';
    }
    private function createArea2(){
        echo '<area id="dir2" shape="rect" alt="" title="" coords="155,311,385,393" data-maphilight=\'{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}\' />';
    }
    private function createArea3(){
        echo '<area id="dir3" shape="rect" alt="" title="" coords="159,15,562,77" data-maphilight=\'{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}\' />';
    }
    private function createArea4(){
        echo '<area id="dir3-1" shape="rect" alt="" title="" coords="390,341,582,397" data-maphilight=\'{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}\' />';
    }
    private function createArea5(){
        echo '<area id="dir5" shape="rect" alt="" title="" coords="290,93,417,269" data-maphilight=\'{"strokeColor":"ff3e84","strokeWidth":3,"fillColor":"ff3e84","fillOpacity":0.5}\' />';
    }
    
    private function createBackgroundImage(){
        echo '<img src="'.get_template_directory_uri().'/css/images/plane.png" alt="" id="" usemap="#simple" class="map">';
    }

    private function createMap(){
        echo '<map name="simple">';
        $this->createArea1();
        $this->createArea2();
        $this->createArea3();
        $this->createArea4();
        $this->createArea5();
        echo '</map>';
    }
    
    public function create(){
        echo '<div class="plane">';
        $this->createBackgroundImage();
        $this->createMap();
        echo '</div>';
    }
}