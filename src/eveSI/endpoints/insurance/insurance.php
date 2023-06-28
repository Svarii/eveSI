<?php
namespace eveSI\endpoints\insurance;

Class prices extends eveSI{
    public $prices;
    
    public function __construct(){
        $this->prices = new eveSI\endpoints\prices();
    }
}
?>
