<?php
namespace eveSI\endpoints\alliances;

Class allianceIcon extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/icons";
    }
}
?>
