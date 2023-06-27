<?php
namespace eveSI\endpoints\characters\blueprints;

class blueprints extends convertAPIData{
    protected function getUrl($character_id) {
        return "characters/{$character_id}/blueprints";
    }
}
?>