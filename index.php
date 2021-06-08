<?php
//les class
require('model/class/classeCategory.php');
//les tableaux
require('model/tableaux/category.php');
// require('model/tableaux/brand.php');
// require('model/tableaux/animal.php');
// require('model/tableaux/product.php');
//les function
require('model/function/fonctionLuc.php');
require('model/function/prixAuGramme.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Revision</title>
</head>

<body>
    <header>
        <h1>L'Animalerie</h1>
        <?php include("view/vueAnimal.php"); ?>
    </header>
    <section>
        <?php include("view/vueCategory.php"); ?>
        <?php include("view/vueBrand.php"); ?>
    </section>

    <section>
    <?php include("view/vueProduct.php"); ?>
    </section>

    <section>
    <?php include("view/vueGramme.php"); ?>
    </section>

    
</body>
</html>