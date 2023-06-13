
<?php
//TODO:: Add this structure/functionality to all files in the endpoints folder
//TODO: Remove extends, this should not be nessarcy since it's included, you should be able to use $this->_esiRequestHandler
//TDOD: Complete Abstract Class for dataconversion methods.

abstract class convertAPIData{
    protected abstract function getAssociativeArray($endpoint_path) : array{
        return json_decode($this->_esiRequestHandler($endpoint_path), true);
    }
    protectect abstract function getObject($endpoint_path) : \stdClass{
        return json_decode($this->_esiRequestHandler($endpoint_path), true);
    }
    protected abstract function getJSONString($endpoint_path) : \\ string{
        return ($this->_esiRequestHandler($endpoint_path));
    }
}


Class allAlliancesList extends eveSI{
    function getAssociativeArray() : array{
        return json_decode($this->_esiRequestHandler('alliances'), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->_esiRequestHandler('alliances'), true);
    }
    function getJSONString() : \\ string{
        return ($this->_esiRequestHandler('alliances'));
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
