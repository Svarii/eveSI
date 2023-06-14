<?php
Class characters_assets_endpoints{
    public $locations;
    public $names;
    
    private function __construct(){
        $this->locations = new characters_assets_locations();
        $this->names = new characters_assets_names();
    }
}
?>