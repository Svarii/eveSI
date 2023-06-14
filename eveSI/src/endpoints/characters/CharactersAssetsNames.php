<?php
Class CharactersAssetsNames extends eveSIDataConverter {
    protected function getUrl($character_id) {
        return "characters/{$character_id}/assets/names";
    }
}
?>