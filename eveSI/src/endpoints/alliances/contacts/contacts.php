<?php
namespace eveSI\endpoints\alliances\contacts;

Class contacts extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/contacts";
    }
}
?>
