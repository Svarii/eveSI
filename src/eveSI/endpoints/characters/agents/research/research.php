<?php
namespace eveSI\endpoints\characters\agents\research;

class agents_research extends eveSIDataConverter {
    protected function identifier($character_id) {
        return "characters/{$character_id}/agents_research";
    }
}
?>
