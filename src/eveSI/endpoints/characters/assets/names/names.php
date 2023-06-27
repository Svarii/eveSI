<?php
namespace eveSI\endpoints\characters\assets\names;

Class names extends eveSIDataConverter {
    protected function identifier($character_id) {
        return "characters/{$character_id}/assets/names";
    }
}
?>