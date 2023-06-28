<?php
namespace eveSI\endpoints\ui\autopilot;

Class autopilot extends eveSI{
    public $waypoint;

    protected function __construct(){
        $this->waypoint = new eveSI\endpoints\ui\waypoint;
    }
}
?>