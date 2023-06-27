<?php
namespace eveSI\endpoints;

Class endpoints{
    public $alliances;
    public $characters;
    public $coporations; 
    public $dogma;
    public $fw;
    public $fleet;
    public $incursion;
    public $industry;
    public $insurance;
    public $killmails;
    public $loyalty;
    public $markets;
    public $route;
    public $sovereignty;
    public $status;
    public $opportunities;
    public $universe;
    public $ui;
    
    public function __construct(){
        $this->alliances = new eveSI\endpoints\alliances();
        $this->characters = new eveSI\endpoints\characters();
        $this->corporations = new eveSI\endpoints\corporations();
        $this->dogma = new eveSI\endpoints\dogma();
        $this->fw = new eveSI\endpoints\fw_endpoints();
        $this->fleet = new eveSI\endpoints\fleet_endpoints();
        $this->incursion = new eveSI\endpoints\incursion_endpoints();
        $this->industry = new eveSI\endpoints\industry_endpoints();
        $this->insurance = new eveSI\endpoints\insurance_endpoints();
        $this->killmails = new eveSI\endpoints\killmails_endpoints();
        $this->loyalty = new eveSI\endpoints\loyalty_endpoints();
        $this->markets = new eveSI\endpoints\markets_endpoints();
        $this->route = new eveSI\endpoints\route_endpoints();
        $this->opportunities = new eveSI\endpoints\opportunities_endpoints();
        $this->sovereignty = new eveSI\endpoints\sovereignty_endpoints();
        $this->status = new eveSI\endpoints\status_endpoints();
        $this->universe = new eveSI\endpoints\universe_endpoints();
        $this->ui = new eveSI\endpoints\ui_endpoints();
    }
    
}
?>
