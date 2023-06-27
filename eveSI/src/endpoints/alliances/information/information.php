<?php
namespace eveSI\endpoints\alliances\information;

Class information extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/icons";
    }
}
?>
