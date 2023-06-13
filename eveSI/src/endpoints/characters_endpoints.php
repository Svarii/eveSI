<?php
Class publicInformation extends eveSI{
    function getAssociativeArray() : array{
        return json_decode($this->_esiRequestHandler('characters', {$character_id}), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->_esiRequestHandler('characters', {$character_id}));
    }
}
Class agentsResearch extends eveSI{
    function getAssociativeArray() : array{
        return json_decode($this->_esiRequestHandler('agents_research', {$character_id}), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->_esiRequestHandler('agents_research', {$character_id}));
    }
}
?>
