<?php
namespace eveSI\endpoints\characters\calendar;

Class calendar extends convertAPIData{
    public $events;
    public $calendar;
    private function __constructor(){
        $this->events = new characters_calendar_events;
        $this->calendar = new characters_calendar;
    }
}
?>