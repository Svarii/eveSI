<?php
abstract class convertAPIData extends eveSI {
    protected function getAssociativeArray($id = null) : array {
        return json_decode($this->_esiRequestHandler($this->identifier($id)), true);
    }
    protected function getObject($id = null) : \stdClass {
        return json_decode($this->_esiRequestHandler($this->identifier($id)));
    }
    protected function getJSONString($id = null) : string {
        return $this->_esiRequestHandler($this->identifier($id));
    }
    abstract protected function identifier($id = null);
}
?>
