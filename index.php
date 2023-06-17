<?php
require_once('eveSI/boostrap.php');

$esi = new eveSI;

$characterName = $esi->characters->publicInformation->name;
$characterCorporation = $esi->characters->publicInformation->corporation;
?>