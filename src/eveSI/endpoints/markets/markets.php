<?php
namespace eveSI\endpoints\markets;

Class markets extends eveSI{
    public $history;
    public $orders;
    public $types;
    public $groups;
    public $prices;
    public $structures;
    
    public funcion __construct(){
        $this->history = new eveSI\markets\history;
        $this->orders = eveSI\markets\orders;
        $this->types = eveSI\markets\types;
        $this->group = eveSI\markets\groups;
        $this->prices = eveSI\markets\prices;
    }
}
?>
