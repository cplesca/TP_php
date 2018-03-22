<?php

define('LOGIN','nassim');  // Login correct
define('PASSWORD','isi');  // Mot de passe correct
$message = '';      // Message à afficher à l'utilisateur


if(!empty($_POST))
{

    if(empty($_POST['login']))
    {
        $message = 'Veuillez indiquer votre login svp !';
    }

    elseif(empty($_POST['motDePasse']))
    {
        $message = 'Veuillez indiquer votre mot de passe svp !';
    }

    elseif($_POST['login'] !== LOGIN)
    {
        $message = 'Votre login est faux !';
    }

    elseif($_POST['motDePasse'] !== PASSWORD)
    {
        $message = 'Votre mot de passe est faux !';
    }
    else
    {

        $message = 'Bienvenue '. LOGIN .' !';
    }
}
?>

    <main>
    <?php if(!empty($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
        <fieldset>
            <legend>Identifiant</legend>
            <p>
                <label for="login">Login :</label>
                <input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
            </p>
            <p>
                <label for="password">Mot de passe :</label>
                <input type="password" name="motDePasse" id="password" value="" />
                <input type="submit" name="submit" value="Identification" />
            </p>
        </fieldset>
    </form>
    </main>