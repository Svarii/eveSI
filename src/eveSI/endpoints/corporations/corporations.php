<?php
namespace eveSI\endpoints\corporations;

Class corporations{
    public $information;
    public $alliancehistory;
    public $blueprints;
    public $containers;
    
    public funcion __construct(){
        $this->information = new eveSI\endpoints\corporations\information();
        $this->alliancehistory = new eveSI\endpoints\corporations\alliancehistory();
    }
}
?>