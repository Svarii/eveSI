<?php
Class characters_assets_endpoints{
    public $locations;
    public $names;
    
    private function __construct(){
        $this->locations = new CharacterAssetsLocations();
        $this->names = new CharacterAssetsNames();
    }
}
?>
