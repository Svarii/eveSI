<?php
class CorporationsAssets extends eveSIDataConverter {
    protected function getUrl($corporation_id) {
        return "corporations/{$corporation_id}/assets";
    }
}
?>