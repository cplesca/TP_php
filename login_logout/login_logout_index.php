<?php
require_once 'function/loginout.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Login-Logout</title>
    <style>
        form {
            border: 5px solid red;
            margin: 15px;
            padding: 15px;
        }
    </style>
</head>
<body>
	<header>
		<h1>Login-Logout</h1>
        <nav>
            <ul>
                <li><a href=" <?= $_SERVER['PHP_SELF'] ?>">Retour au GET</a></li>
            </ul>
        </nav>
	</header>
	<main>
        <?php require_once 'views/loginout_form.php';?>
	</main>
</body>
</html>