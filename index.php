<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ALOE !</title>
    <link rel="stylesheet" href="./css/style.css">
    <?php require_once './templates/favicon.html' ?>
</head>
<body>
    <?php require_once './templates/headernav.html' ?>
    <?php require_once './templates/logindiv.php' ?>
    <?php if (isset($_SESSION['login'])):?>   
        <form class="check" action="./index.php" method="POST">
            <div>
                <input type="checkbox" id="checktext" name="checktext">
                <label for="checktext">Texte</label>
                <?php if ( isset($_POST['checktext']) ): ?>                
                    <p>Le terme escargot est un nom vernaculaire qui en français désigne des gastéropodes à coquille, généralement terrestres et appelés aussi des colimaçons, par opposition aux limaces. Ce sont tous des mollusques, quelle que soit leur taille (certains mesurent à peine 2 millimètres) ou leur forme. 40 % des mollusques étant des escargots terrestres1, certains escargots toutefois sont des espèces aquatiques, plutôt d'eau douce : Basommatophora tels les limnées ou les planorbes, souvent appelés « escargots nettoyeurs » par les amateurs d'aquariophilie.</p>
                <?php else: ?>
                <?php endif ?>
            </div>
            <div>
                <input type="checkbox" id="checkimg" name="checkimg">
                <label for="checkimg">Image</label>
                <?php if ( isset($_POST['checkimg']) ): ?>
                    <img class="faviscargot" src="./img/faviscargot.jpg" alt="snail">
                <?php else: ?>
                <?php endif ?>
            </div>
            <input type="submit" value="Envoyer">
    </form>
    <?php else: ?>
    <?php endif ?>



    <?php require_once './templates/footer.html' ?>
</body>
</html>