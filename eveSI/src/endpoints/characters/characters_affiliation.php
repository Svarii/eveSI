<?php
Class characters_affiliation extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/affiliation", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/affiliation", $access_token));
    }
}
?>