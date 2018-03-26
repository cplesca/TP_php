<?php
require_once (dirname(__FILE__) . '/../defines.php');

session_start();
if ( ! array_key_exists(NB_WISH, $_SESSION)) {
    $_SESSION[NB_WISH] = 0;
}

?>

<div id="wrapmenu">
    <nav id="main-menu">
        <ul>
            <li>
                <a class="accueil" href="index.php" >Accueil</a>
            </li>
            <li>
                <a class="catalogue" href="catalogue.php" >Catalogue</a>
            </li>
            <li>
                <a class="contact" href="contact.php" >Contactez-nous</a>
            </li>
        </ul>
    </nav>
    <div id="starlogo"">
        <a href="login.php" id="logo"><img src="images/favorite.png" alt="favorite"/><span class="grey"><?= $_SESSION[NB_WISH] ?></span></a>
        <a href="login.php" id="logo"><img src="images/loginicon.png" alt="se connecter"/></a>
    </div>
</div>