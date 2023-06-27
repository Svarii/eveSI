<?php
namespace eveSI\endpoints\characters\affiliation;
//FIXME::POST Has not been implimented or tested yet
//Will not work at all.
//Needs to support bulk request : Not yet implemented.
class affiliation extends eveSIDataConverter {
    protected function getUrl($listOfIds) {
        return "characters/affiliation";
    }
}
?>
