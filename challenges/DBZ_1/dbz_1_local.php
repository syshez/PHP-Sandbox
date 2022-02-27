<?php

namespace Challenges\DBZ_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$ennemis = [184, 231, 657, 726, 865, 1021, 1455];
$forceVegeta = 112;

Html::debug($ennemis, '$ennemis');
Html::debug($forceVegeta, '$forceVegeta');

// CODE DU CHALLENGE ------------------

$superSaiyan = 1;
$forceTotalVegeta = $forceVegeta * $superSaiyan;

$bloqueur = 1;
while ($forceVegeta < $ennemis) {

    // Calcul de la puissance de Vegeta
    $forceTotalVegeta = $forceVegeta * $superSaiyan;



        if ($forceTotalVegeta > $ennemis) {
            $forceTotalVegeta =  $ennemi * 0.1 + $forceTotalVegeta;
            echo "Victoire";
        } else {
            $superSaiyan++;
            $forceTotalVegeta = $forceVegeta * $superSaiyan;
            echo "Defaite";
        }

}

echo $forceTotalVegeta;
echo "salut";
// REPONSE ATTENDUE -------------------
Html::debug('3115', 'Réponse attendue', 'success');
