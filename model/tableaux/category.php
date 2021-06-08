<?php
// $Category = [
//     'alimentation',
//     'niches et couchage',
//     'transport',
//     'hygiène et soin',
//     'Gamelles et accessoires',
//     'Jouets',
//     'Cages et accessoires',
//     'Entretiens de l’eau',
//     'Décorations de l’aquarium',
//     'Bassins',
//     'Aquariums et meubles',
// ];

$Category = [
    $alimentation = new category( 'Alimentation', ' ', NULL ),
    $nichesCouchage = new category( 'Niches et couchage', ' ', NULL ),
    $transport = new category( 'Transport', ' ', NULL ),
    $hygièneSoin = new category( 'Hygiène et soin', ' ', NULL ),
    $gamellesAccessoires = new category( 'Gamelles et accessoires', ' ', NULL ),
    $jouets = new category( 'Jouets', ' ', NULL ),
    $cagesAccessoires = new category( 'Cages et accessoires', ' ', NULL ),
    $entretiensEau= new category( 'Entretiens de l’eau', ' ', NULL ),
    $decoAquarium = new category( 'Décorations de l’aquarium', ' ', NULL ),
    $bassins = new category( 'Bassins', ' ', NULL ),
    $aquariumMeubles = new category( 'Aquariums et meubles', ' ', NULL ),
];