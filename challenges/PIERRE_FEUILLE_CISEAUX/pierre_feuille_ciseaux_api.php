<?php
namespace Challenges\PIERRE_FEUILLE_CISEAUX;

use Tainix\Game;
use Tainix\Html;

// INITIALISATION ---------------------
$game = new Game(
	TAINIX_KEY,
	basename(__DIR__)
);

$data = $game->input();

// VISUALISATION DES DONNEES ----------
foreach ($data as $name => $value) {
	$$name = $value;
	Html::debug($$name, '$' . $name);
}

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



// REPONSE ----------------------------
// $game->output(['data' => ...]);