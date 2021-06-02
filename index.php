<?php require('model/category.php'); ?>
<?php require('model/brand.php'); ?>
<?php require('model/animal.php'); ?>

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
        <?php include("view/vueCategory.php"); ?>
        <?php include("view/vueAnimal.php"); ?>
        <?php include("view/vueBrand.php"); ?>
    </header>
</body>
</html>