
<?php
//TODO:: Add this structure/functionality to all files in the endpoints folder
Class allAlliancesList extends eveSI{
    function getAssociativeArray() : array{
        return json_decode($this->_esiRequestHandler('alliances'), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->_esiRequestHandler('alliances'), true);
    }
}
Class allianceCorporations extends eveSI{   
    function getAssociativeArray(string $alliance_id) : array{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/corporations'), true);
    }
    function getObject(string $alliance_id) : \stdClass{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/corporations'));
    }
}
Class allianceContacts extends eveSI{
    function getAssociativeArray(string $alliance_id) : array{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/contacts'), true);
    }
    function getObject(string $alliance_id) : \stdClass{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/contacts'));
    }
}
Class allianceIcon extends eveSI{
    function getAssociativeArray(string $alliance_id) : array{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/icons'), true);
    }
    function getObject(string $alliance_id) : \stdClass{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/icons'));
    }
}
Class allianceInformation extends eveSI{
    function getAssociativeArray(string $alliance_id) : array{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}'), true);
    }
    function getObject(string $alliance_id) : \stdClass{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}'));
    }
}
?>
