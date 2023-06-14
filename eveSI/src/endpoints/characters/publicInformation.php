<?php
Class publicInformation extends eveSI{
    function getAssociativeArray() : array{
        return json_decode($this->_esiRequestHandler('characters', $character_id), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->_esiRequestHandler('characters', $character_id));
    }
}
?>