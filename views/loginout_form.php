<div id="loginoutform">

    <?php if ( ! user_is_logged() ) { ?>
        <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>"method="post" name="login">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value=""/>
            <br>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>"/>
            <br>
            <input type="submit" name="login_submit" value="Se connecter" />
        </form>

    <?php } else { ?>
        <form method="post" name="logout">
            <input type="submit" name="logout_submit" value="Se déconnecter"/>
        </form>
    <?php } ?>
</div>
