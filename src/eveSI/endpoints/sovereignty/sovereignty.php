<?php
namespace eveSI\endpoints\sovereignty;

Class sovereignty{
    public $campaigns;
    public $map;
    public $structures;

    protected function __construct(){
        $this->campaigns = new eveSI\endpoints\sovereignty\campaigns();
        $this->map = new eveSI\endpoints\sovereignty\map();
        $this->structures = new eveSI\endpoints\sovereignty\structures;
    }
}
?>
