<?php
require_once 'db/data.php';
require_once 'function/loginout.php';
require_once 'function/wishlist.php';
require_once 'views/page_top.php';
?>


<div id="loginoutform">

    <?php if ( ! user_is_logged() ) { ?>
    <div id="formdiv">
        <div id="filds">
        <form method="post" name="login">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value=""/>
            <br>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password" value=""/>
            <br>
            <input id="btnconnecter" type="submit" name="login_submit" value="Se connecter" />
        </form>
            </div>

    </div>

    <?php }
    else
    {
        if (! array_key_exists(NB_WISH, $_SESSION)) {
            $_SESSION[NB_WISH] = "0";
        }

 /*   if (array_key_exists(OP_NAME, $_GET)) {
        switch ($_GET[OP_NAME]) {
            case OP_RETRAIT:
                if ($_SESSION[NB_WISH] > 0) {
                $_SESSION[NB_WISH]--;
            }
            break;
        case OP_MAZ:
            $_SESSION[NB_WISH] = 0;
            break;
        }

    } else { */ ?>
        <div id="formdiv">
            <div id="filds">

                <?php foreach ($product as $id  => $item) {
                foreach ($_SESSION[SESS_WISHLIST] as $idwl => $itemwl) {
                    if($itemwl === (string)$id){                    ?>
                    <div class="col-4">
                        <h2>Liste d'envies</h2>
                        <ul>
                            <li><?= $item[ART_MODEL] ?> <a href=""><span class="grey">X</span></a> </li>
                        </ul>

            </div>


                <?php }} } ?>
                <form method="post" name="logout">
                    <input id="btnconnecter" type="submit" name="logout_submit" value="Se déconnecter"/>
                </form>
            </div>
        </div>

    <?php } ?>
</div>
