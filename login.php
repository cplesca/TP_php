<?php
/*****************************************
 *  Constantes et variables
 *****************************************/
define('LOGIN','nassim');  // Login correct
define('PASSWORD','isi');  // Mot de passe correct
$message = '';      // Message à afficher à l'utilisateur

/*****************************************
 *  Vérification du formulaire
 *****************************************/
// Si le tableau $_POST existe alors le formulaire a été envoyé
if(!empty($_POST))
{
    // Le login est-il rempli ?
    if(empty($_POST['login']))
    {
        $message = 'Veuillez indiquer votre login svp !';
    }
    // Le mot de passe est-il rempli ?
    elseif(empty($_POST['motDePasse']))
    {
        $message = 'Veuillez indiquer votre mot de passe svp !';
    }
    // Le login est-il correct ?
    elseif($_POST['login'] !== LOGIN)
    {
        $message = 'Votre login est faux !';
    }
    // Le mot de passe est-il correct ?
    elseif($_POST['motDePasse'] !== PASSWORD)
    {
        $message = 'Votre mot de passe est faux !';
    }
    else
    {
        // L'identification a réussi
        $message = 'Bienvenue '. LOGIN .' !';
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title>Formulaire didentificqtion</title>
</head>
<header>
    <nav>
        <a href="<?= $_SERVER['PHP_SELF']?>">Retour au GET</a>
    </nav>
</header>
<body>

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
</body>
</html>