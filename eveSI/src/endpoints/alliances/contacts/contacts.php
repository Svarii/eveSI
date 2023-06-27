<?php
namespace eveSI\endpoints\alliances\contacts;

Class contacts extends eveSI{   
    protected function identifier($id) {
        return "alliances/{$id}/contacts";
    }
}
?>
