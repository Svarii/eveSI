<?php
require_once('eveSI/boostrap.php');

$esi = new eveSI;

function loadCharacterDetails($character_id){}
    //Use Character Affiliation instead?
    $characterDetails = [];
    $characterDetails['characterName'] = $esi->characters->publicInformation->name;
    $characterDetails['characterCorporation'] = $esi->characters->publicInformation->corporation;
    return $characterDetails;
}
?>