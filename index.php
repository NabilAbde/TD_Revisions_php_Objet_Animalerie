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
        <?php include("view/vueAnimal.php"); ?>
    </header>
    <section>
        <?php include("view/vueCategory.php"); ?>
        <?php include("view/vueBrand.php"); ?>
<<<<<<< HEAD
    </header>
=======
    </section>
>>>>>>> b9ab4cb320d5787cdd82ef98848581a8556a6f8c
</body>
</html>