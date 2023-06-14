<?php
Class characters_portraits extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/portrait", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/potrait", $access_token));
    }
}
?>