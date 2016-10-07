<?php

class Calendar
{
    public function __construct()
    {
        $this->createPrefix();

        $this->createCalendar();
        $this->createCalendarMobile();

        $tagsGetter = new GetTags();
        $tags = $tagsGetter->execute();

        new TagsView($tags);
        
        $this->createPostfix();
    }
    
    private function createPrefix(){
        echo '<div class="col-md-12 col-lg-4">';
        echo '<div class="callendar">';
    }
    private function createPostfix(){
        echo '</div></div>';
    }

    private function createCalendarMobile(){
        echo '<div class="callendar-mobile hidden-lg">
            <p>Выбрать фотографии за интересующую дату</p>
            <input type="text" class="datepicker" placeholder="Выберите число">
        </div>';
    }
    private function createCalendar(){
        echo '<div class="slider-calendar visible-lg">
            <img src="../../../../css/images/calendar.jpg" alt="">
        </div>';
    }
}