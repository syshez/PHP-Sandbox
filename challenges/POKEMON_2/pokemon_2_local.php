<?php
namespace Challenges\POKEMON_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$pokemons = ['Eau:29', 'Poison:74', 'Poison:70', 'Feu:29', 'Eau:16', 'Air:60', 'Eau:45', 'Psychique:33', 'Feu:10', 'Poison:75', 'Glace:98', 'Eau:42', 'Herbe:13', 'Herbe:46'];

Html::debug($pokemons, '$pokemons');

// CODE DU CHALLENGE ------------------

print_r ($pokemons);
// 'Air:79' => ['type' => 'Air', 'puissance' => 79]
function informationsPokemon(string $informations): array
{
 
    explode(':',$pokemons);

    return print_r($pokemons);
}



/*
$pokemons
[
['type' => 'Air', 'puissance' => 79],
['type' => 'Air', 'puissance' => 84],
['type' => 'Eau', 'puissance' => 79],
['type' => 'Herbe', 'puissance' => 12],
['type' => 'Air', 'puissance' => 60]
]



$type 'Air'



$pokemonsTries
[
['type' => 'Air', 'puissance' => 79],
['type' => 'Air', 'puissance' => 84],
['type' => 'Air', 'puissance' => 60]
]
*/
function triPokemonsSelonUnType(array $pokemons, string $type): array
{



return $pokemonsTries;
}



/*
$pokemons
[
['type' => 'Air', 'puissance' => 79],
['type' => 'Air', 'puissance' => 84],
['type' => 'Air', 'puissance' => 60]
]



$puissance
84
*/
function meilleurePuissance(array $pokemons): int
{
// Recherche de maximum

}



// REPONSE ATTENDUE -------------------
Html::debug('218', 'Réponse attendue', 'success');