<?php
namespace eveSI\endpoints\universe\asteroid;

Class asteroid extends eveSI{
    public $belts;

    protected function __construct(){
        $this->belts = new eveSI\endpoints\universe\asteroid();
    }
}
?>