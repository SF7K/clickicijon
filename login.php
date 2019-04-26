<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecte-toi bon sang</title>
    <?php require_once './templates/favicon.html' ?>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php require_once './templates/headernav.html' ?>

    <form class="formlog" action="./controllers/verify.php" method="POST">
            <div>
                <label for="login">Ton pseudo :</label>
                <input type="text" name="login" placeholder="juré c'est pas admin">
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" placeholder="juré c'est pas admin non plus">
            </div>
            <input type="submit" value="Envoyer">
        </form>
    
    <?php require_once './templates/footer.html' ?>
</body>
</html>