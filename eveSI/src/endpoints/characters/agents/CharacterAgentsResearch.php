<?php
namespace eveSI\endpoints\characters;

class CharactersAgentsResearch extends eveSIDataConverter {
    protected function identifier($character_id) {
        return "characters/{$character_id}/agents_research";
    }
}
?>
