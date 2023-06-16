<?php
namespace eveSI\endpoints\characters;

class CharactersBlueprints extends eveSIDataConverter {
    protected function getUrl($character_id) {
        return "characters/{$character_id}/blueprints";
    }
}
?>