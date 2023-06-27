<?php
namespace eveSI\corporations\assets;

Class assets extends eveSI {
    protected function getUrl($corporation_id) {
        return "corporations/{$corporation_id}/assets";
    }
}
?>