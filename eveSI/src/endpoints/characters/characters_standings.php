<?php
Class characters_standings extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/standings", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/standings", $access_token));
    }
}
?>