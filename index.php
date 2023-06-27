<?php
require_once('src/bootstrap.php');

$esi = new \eveSI\eveSI();

echo 'All systems online. Awaiting commands.';

// Example Usage
//$charInfo = $esi->characters->publicInformation->getObject($character_id);

function loadCharacterDetails($character_id, $esi){
    //Use Character Affiliation instead?
    $characterDetails = [];
    $characterDetails['characterName'] = $esi->characters->publicInformation->getObject($character_id)->name;
    $characterDetails['characterCorporation'] = $esi->characters->publicInformation->getAssociativeArray($characer_id)['corporation'];
    return $characterDetails;
}
$characterDetails = loadCharacterDetails($character_id, $esi);
var_dump($characterDetails);
?>