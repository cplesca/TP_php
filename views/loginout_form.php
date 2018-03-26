<?php
require_once 'db/data.php';
require_once 'function/loginout.php';

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

    <?php } else
    {if (! array_key_exists(NB_WISH, $_SESSION)) {
        $_SESSION[NB_WISH] = "0";
    }

    if (array_key_exists(OP_NAME, $_GET)) {
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

 } else { ?>
        <div id="formdiv">
            <div id="filds">
                <?php foreach ($product as $id  => $item) {
                    if($_SESSION[IDPROD] === (string)$id){                    ?>
                    <div class="col-4">
                        <h2><?= $item[ART_MODEL] ?></h2>
            </div>


                <?php } } ?>
                <form method="post" name="logout">
                    <input id="btnconnecter" type="submit" name="logout_submit" value="Se déconnecter"/>
                </form>
            </div>
        </div>

    <?php }} ?>
</div>
