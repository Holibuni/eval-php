<?php

// https://tpdev2025.notion.site/valuation-PHP-Logique-POO-21d4abdc974980678e45d0e458fb5e4e

$lecteurs = [
  [ 'prenom' => 'Aline',   'livres_empruntes'  => 12 ],
  [ 'prenom' => 'Brahim',  'livres_empruntes'  => 5 ],
  [ 'prenom' => 'Chloé',   'livres_empruntes'  => 18] ,
  [ 'prenom' => 'Damien',  'livres_empruntes'  => 2 ],
  [ 'prenom' => 'Élodie',  'livres_empruntes'  => 9 ],
  [ 'prenom' => 'Farid',   'livres_empruntes'  => 21 ],
  [ 'prenom' => 'Gaëlle',  'livres_empruntes'  => 14 ],
  [ 'prenom' => 'Hugo',    'livres_empruntes'  => 6 ],
  [ 'prenom' => 'Inès',    'livres_empruntes'  => 0 ],
  [ 'prenom' => 'Julien',  'livres_empruntes'  => 17 ],
  [ 'prenom' => 'Karima',  'livres_empruntes'  => 11 ],
  [ 'prenom' => 'Luc',     'livres_empruntes'  => 3 ],
];

// Créez une fonction calculMoyenneEmprunts(array $lecteurs): float qui retourne la moyenne de livres empruntés. (2 pts)
function calculMoyenneEmprunts(array $lecteurs) {
    $somme = 0;
    $nombre = count($lecteurs);
    foreach ($lecteurs as $lecteur) {
        $somme += $lecteur['livres_empruntes'];
    }
$moyenne = $nombre > 0 ? $somme / $nombre : 0;
echo "Moyenne des emprunts :" . $moyenne;
};
calculMoyenneEmprunts($lecteurs);

// Créez une fonction trierLecteurs(array $lecteurs): array qui trie les lecteurs par nombre d’emprunts décroissant. (2 pts)
function trierLecteurs(array $lecteurs) {
    usort($lecteurs, function($a, $b) {
        return $b['livres_empruntes'] - $a['livres_empruntes']; 
    });
    return $lecteurs;
};
var_dump (trierLecteurs($lecteurs));

// Créez une fonction lecteursFrequents(array $lecteurs): array qui retourne les lecteurs ayant emprunté au moins 10 livres. (2 pts)
function lecteursFrequents(array $lecteurs): array {
    $lecteursFrequents=[];
    foreach($lecteurs as $lecteur);
asort($lecteurs, functions($a, $b) {
    return $a($lecteurs >= 10 );
});
return $lecteurs;
}
echo lecteursFrequents($lecteurs);







// function trierLecteurs(array $lecteurs);

// function lecteursFrequents(array $lecteurs);