<?php
require('animal.php');
require('category.php');

$Product = [
       //Creation du tableau à plusieurs dimension des produits
       ['Name' => 'Litiere', 'PriceHT' => 10,'Quantity' => 1000,'Category' => $Category[3],'Animals' => $animals[1]],
       ['Name' => 'Friandise', 'PriceHT' => 5,'Quantity' => 250,'Category' => $Category[0],'Animals' => $animals[0]],
       ['Name' => 'Croquettes', 'PriceHT' => 50,'Quantity' => 3000,'Category' => $Category[0],'Animals' => $animals[1]],
       ['Name' => 'Paillettes', 'PriceHT' => 4,'Quantity' => 10,'Category' => $Category[0],'Animals' => $animals[2]],
       ['Name' => 'Souris', 'PriceHT' => 2,'Quantity' => 146,'Category' => $Category[0],'Animals' => $animals[5]],
       ['Name' => 'Cage', 'PriceHT' => 150,'Quantity' => 125,'Category' => $Category[6],'Animals' => $animals[3]],
       ['Name' => 'Foin', 'PriceHT' => 100,'Quantity' => 10000,'Category' => $Category[0],'Animals' => $animals[6]],
       ['Name' => 'Harnais', 'PriceHT' => 3,'Quantity' => 756,'Category' => $Category[4],'Animals' => $animals[4]],
       ['Name' => 'Antiparasitaires', 'PriceHT' => 45,'Quantity' => 156,'Category' => $Category[3],'Animals' => $animals[6]],
       ['Name' => 'Bout de bois', 'PriceHT' => 15,'Quantity' => 784,'Category' => $Category[9],'Animals' => $animals[6]],
       ['Name' => 'Laisse','PriceHT' => 15,'Quantity' => 100,'Category' => $Category[2],'Animals' => $animals[0]],
       ['Name' => 'Arbre à chat', 'PriceHT' => 20,'Quantity' => 635,'Category' => $Category[10],'Animals' => $animals[0]],
       ['Name' => 'Pince à serpent', 'PriceHT' => 50,'Quantity' => 780,'Category' => $Category[2],'Animals' => $animals[5]],
       ['Name' => 'Gamelle', 'PriceHT' => 10,'Quantity' => 45,'Category' => $Category[4],'Animals' => $animals[0]],
       ['Name' => 'Terrarium', 'PriceHT' => 100,'Quantity' => 650,'Category' => $Category[1],'Animals' => $animals[4]],
       ['Name' => 'Aquarium', 'PriceHT' => 80,'Quantity' => 180,'Category' => $Category[10],'Animals' => $animals[2]],
       ['Name' => 'Os en plastique', 'PriceHT' => 8,'Quantity' => 10505,'Category' => $Category[5],'Animals' => $animals[0]],
       ['Name' => 'Graines', 'PriceHT' => 10,'Quantity' => 200,'Category' => $Category[0],'Animals' => $animals[3]],
       ['Name' => 'Niche', 'PriceHT' => 50,'Quantity' => 1145,'Category' => $Category[1],'Animals' => $animals[0]],
       ['Name' => 'Cage de transport', 'PriceHT' => 30,'Quantity' => 136,'Category' => $Category[2],'Animals' => $animals[1]]
];