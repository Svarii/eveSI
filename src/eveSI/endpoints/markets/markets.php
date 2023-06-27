<?php
namespace eveSI\endpoints\markets;

public $history;
public $orders;
public $types;
public $groups;
public $prices;
public $structures;

Class markets extends eveSI{
    $this->history = new eveSI\markets\history;
    $this->orders = eveSI\markets\orders;
    $this->types = eveSI\markets\types;
    $this->group = eveSI\markets\groups;
    $this->prices = eveSI\markets\prices;
}
?>
