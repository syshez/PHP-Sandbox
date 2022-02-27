<?php
namespace Challenges\COLLECTION_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$exemplaires = [50000, 50000, 50000, 50000, 50000, 50000, 2000, 2000, 50000, 50000, 50000, 2000, 2000, 2000, 2000, 2000, 50000, 2000, 2000, 2000, 50000, 50000, 2000, 50000, 50000];
$cotes = [0.8, 1.2, 1.2, 1, 0.8, 1.2, 0.6, 1.2, 0.8, 1, 0.8, 1, 1.2, 1, 0.6, 0.8, 1.2, 0.6, 0.6, 0.6, 0.8, 1, 0.8, 0.6, 0.8];

Html::debug($exemplaires, '$exemplaires');
Html::debug($cotes, '$cotes');

// CODE DU CHALLENGE ------------------
$prixTotalAchat = 0;


foreach ($exemplaires as $i => $exemplaire){
    if($exemplaire >= 2000){
        $prixUnitaire = 15;
    } else {
        $prixUnitaire = 30;
    }
    $prixTotalAchat += $prixUnitaire;

    $cote = $cotes[$i];
}
echo $cote;




// REPONSE ATTENDUE -------------------
Html::debug('-42', 'Réponse attendue', 'success');