<?php
namespace Challenges\PIERRE_FEUILLE_CISEAUX;

use Tainix\Html;

// ECHANTILLON ------------------------
$coups = 'FPFCCCCPFFC';

Html::debug($coups, '$coups');

// CODE DU CHALLENGE ------------------
$reponse = '';

$longueur = strlen($coups);
for ($i = 0; $i < $longueur; $i++) {

    $jeu = $coups[$i];

    if ($jeu === 'F') {
        $contre = 'C';
    } elseif ($jeu === 'P'){
        $contre = 'F';
    } else {
        $contre = 'P';
    }
    $reponse .= $contre;
}

echo $reponse;





// REPONSE ATTENDUE -------------------
Html::debug('CFCPPPPFCCP', 'Réponse attendue', 'success');