<?php
class CharactersAgentsResearch extends eveSIDataConverter {
    protected function getUrl($character_id) {
        return "characters/{$character_id}/agents_research";
    }
}
?>