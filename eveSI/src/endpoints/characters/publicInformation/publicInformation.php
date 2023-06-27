<?php
namespace eveSI\endpoints\characters\publicInformation;

Class publicInformation extends eveSI{
    protected function identifier($character_id = null) {
        return "characters\{$character_id}";
    }
}
?>
