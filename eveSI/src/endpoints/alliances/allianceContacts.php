<?php
Class allianceContacts extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/contacts";
    }
}
?>