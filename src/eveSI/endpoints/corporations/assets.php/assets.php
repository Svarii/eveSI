<?php
namespace eveSI\corporations\assets;

Class assets extends eveSI {
    protected function identifier($corporation_id) {
        return "corporations/{$corporation_id}/assets";
    }
}
?>