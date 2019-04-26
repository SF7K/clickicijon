<div class="logindiv">
    <ul class="flex">
        <?php if (isset($_SESSION['login'])):?>
            <li>Bonjour <?= $_SESSION['login'] ?> !</li>
            <li><a href="./controllers/disconnect.php">Deconnexion</a></li>
        <?php else: ?>
            <li><a href="./login.php">Connexion</a></li>
            <li><a href="./img/itsatrap.jpg">Inscription</a></li>
        <?php endif ?>
    </ul>
</div>