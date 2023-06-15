<?php
namespace eveSI\endpoints\characters;

Class characters_agents_research extends eveSI{
    function getAssociativeArray() : array{
        return json_decode($this->_esiRequestHandler('agents_research', $character_id), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->_esiRequestHandler('agents_research', $character_id));
    }
}
?>