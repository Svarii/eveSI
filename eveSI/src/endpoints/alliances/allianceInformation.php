<?php
namespace eveSI\endpoints\alliances;

Class allianceInformation extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/icons";
    }
}
?>
