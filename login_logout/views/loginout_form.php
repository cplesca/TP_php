<div id = "loginoutform">


<?php if ( ! user_is_logged() ) { ?>
    <form method="post" name="login">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" value=""/>
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" value=""/>
        <br>
        <input type="submit" name="login_submit" value="Se connecter" />
    </form>
<?php } else {
    //il est connecté
    ?>
    <form method="post" name="logout">
        <input type="submit" name="logout_submit" value="Se déconnecter"/>
    </form>
<?php } ?>

</div>
