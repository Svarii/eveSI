<?php
require_once('eveSI/src/bootstrap.php');

$esi = new \eveSI\eveSI;

echo 'All systems online.  Awaiting commands.';

//Example Usage
//$charInfo = $esi->characters->publicInformation->getObject($character_id);

function loadCharacterDetails($character_id){}
    //Use Character Affiliation instead?
    $characterDetails = [];
    $characterDetails['characterName'] = $esi->characters->publicInformation->getObject($character_id)->name;
    $characterDetails['characterCorporation'] = $esi->characters->publicInformation->getAsscoaiteArray($characer_id)['corporation'];
    return $characterDetails;
}
$characterDetails = loadCharacterDetails($character_id);
var_dump($characterDetails);
?>