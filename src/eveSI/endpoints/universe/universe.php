<?php
namespace eveSI\endpoints\universe;

Class universe{
    public $ancestries;
    public $asteroid;
    public $bloodlines;
    public $categories;
    public $constellations;
    public $factions;
    public $graphics;
    public $groups;
    public $ids;
    public $moons;
    public $names;
    public $planets;
    public $races;
    public $regions;
    public $stargates;
    public $stars;
    public $stations;
    public $structures;
    public $systems;
    public $types;

    protected function __construct(){
        $this->ancestries = new eveSI\endpoints\universe\ancestries();
        $this->asteroid = new eveSI\endpoints\universe\asteroid();
        $this->bloodlines = new eveSI\endpoints\universe\bloodlines();
        $this->categories = new eveSI\endpoints\universe\categories();
        $this->constellations = new eveSI\endpoints\universe\contellations();
        $this->factions = new eveSI\endpoints\universe\factions();
        $this->graphics = new eveSI\endpoints\universe\graphics();
        $this->groups = new eveSI\endpoints\universe\groups();
        $this->ids = new eveSI\endpoints\universe\ids();
        $this->moons = new eveSI\endpoints\universe\moons();
        $this->names = new eveSI\endpoints\universe\names();
        $this->planets = new eveSI\endpoints\universe\planets();
        $this->races = new eveSI\endpoints\universe\races();
        $this->regions = new eveSI\endpoints\universe\regions();
        $this->stargates = new eveSI\endpoints\universe\stargates();
        $this->stars = new eveSI\endpoints\universe\stars();
        $this->stations = new eveSI\endpoints\universe\stations();
        $this->structures = new eveSI\endpoints\universe\structures();
        $this->systems = new eveSI\endpoints\universe\systems();
        $this->types = new eveSI\endpoints\universe\types();
    }
}
?>
