<?php
Class corporations_bookmarks extends eveSI{
    function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/bookmarks", $access_token), true);
    }
    function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/bookmarks", $access_token));
    }
}
?>