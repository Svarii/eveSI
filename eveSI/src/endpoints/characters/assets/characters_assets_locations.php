<?php
namespace eveSI\endpoints\characters;

Class characters_assets_locations extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/assets/locations", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/assets/locations", $access_token));
    }
}
?>