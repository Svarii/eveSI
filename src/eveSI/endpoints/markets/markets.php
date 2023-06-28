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
        $this->history = new eveSI\markets\history();
        $this->orders = new eveSI\markets\orders();
        $this->types = new eveSI\markets\types();
        $this->group = new eveSI\markets\groups();
        $this->prices = new eveSI\markets\prices();
    }
}
?>
