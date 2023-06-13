
<?php
//TODO:: Add this structure/functionality to all files in the endpoints folder
//TODO:: Ignore previous todo, that guy forgot what I was doing.  I think this guy is back on track.

abstract class convertAPIData extends eveSI {
    protected function getAssociativeArray() : array {
        return json_decode($this->_esiRequestHandler($this->identifier()), true);
    }

    protected function getObject() : \stdClass {
        return json_decode($this->_esiRequestHandler($this->identifier()));
    }

    protected function getJSONString() : string {
        return $this->_esiRequestHandler($this->identifier());
    }

    abstract protected function identifier($id);
}
Class allAlliancesList extends convertAPIData {
    protected function identifier($id = null) {
        return 'alliances';
    }
}
Class allianceCorporations extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/corporations";
    }
}
Class allianceContacts extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/contacts";
    }
}
Class allianceIcon extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/icons";
    }
}
Class allianceInformation extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/icons";
    }
}
?>
