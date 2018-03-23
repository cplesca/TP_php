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

    <?php } else { ?>
        <form method="post" name="logout">
            <input type="submit" name="logout_submit" value="Se déconnecter"/>
        </form>
    <?php } ?>
</div>
