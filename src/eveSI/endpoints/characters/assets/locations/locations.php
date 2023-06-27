<?php
namespace eveSI\endpoints\characters\assets\locations;

Class locations extends eveSI{
    protected function identifier($character_id = null) {
        return "characters/{$character_id}/assets/locations";
    }
}
?>