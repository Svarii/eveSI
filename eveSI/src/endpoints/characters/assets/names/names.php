<?php
namespace eveSI\endpoints\characters\assets\names;

Class names extends eveSIDataConverter {
    protected function getUrl($character_id) {
        return "characters/{$character_id}/assets/names";
    }
}
?>