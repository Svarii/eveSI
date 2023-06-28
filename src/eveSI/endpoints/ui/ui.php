<?php
namespace eveSI\endpoints\ui;

public $autopilot;
public $openwindow;

Class ui extends eveSI{
    $this->autopilot = new eveSI\endpoints\ui\autopilot();
    $this->openwindow = new eveSI\endpoints\ui\openwindow();
}
?>
