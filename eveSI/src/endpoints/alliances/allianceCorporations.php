<?php
namespace eveSI\endpoints\alliances;

Class allianceCorporations extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/corporations";
    }
}
?>
