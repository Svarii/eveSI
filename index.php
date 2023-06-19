<?php
require_once('eveSI/boostrap.php');

$esi = new eveSI;

function loadCharacterDetails($character_id){}
    //Use Character Affiliation instead?
    $characterDetails = [];
    $characterDetails['characterName'] = $esi->characters->publicInformation->getObject($character_id)->name;
    $characterDetails['characterCorporationID'] = $esi->characters->publicInformation->getObject($character_id)->corporation;
    return $characterDetails;
}

var_dump($characterDetails);
?>