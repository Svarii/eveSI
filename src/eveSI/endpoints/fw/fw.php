<?php
namespace eveSI\endpoints\fw;

Class fw{
    public $leaderboards;
    public $stats;
    public $systems;
    public $wars;
        
    public funcion __construct(){
        $this->leaderboards = new eveSI\endpoints\fw\leaderboards();
        $this->stats = new eveSI\endpoints\fw\stats();
        $this->systems = new eveSI\endpoints\systems();
        $this->system = new eveSI\endpoints\wars();
    }
}
?>
