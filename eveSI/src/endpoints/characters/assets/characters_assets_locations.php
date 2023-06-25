<?php
namespace eveSI\endpoints\characters;

Class characters_assets_locations extends eveSI{
    Class allianceContacts extends {   
        protected function identifier($id) {
            return "alliances/{$id}/contacts";
        }
    }
}
?>