<?php
namespace eveSI\endpoints\alliances\icons;

Class icons extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/icons";
    }
}
?>
