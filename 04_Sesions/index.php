<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    session_start();

    if(isset($_SESSION['missatge'])) { 
        // Si hi ha un missatge a la sessió, el mostrem i després el borrem
        echo "<div><p>" . $_SESSION['missatge'] . "</p></div>";
        unset($_SESSION['missatge']);
    }

    if(isset($_POST['action']) && $_POST['action'] == 'logout') {
        // Si el usuari ha fet clic al botó de logout, tanquem la sessió
        session_destroy();
        // Redirigim a la pàgina de index després de tancar sessió
        $_SESSION['missatge'] = "Has tancat sessió correctament.";
        header('Location: index.php');

    } else if(isset($_SESSION['username'])) { 
        // Si el usuari ja està loguejat, mostrem el formulari de logout
    ?>

    <h1>Logout form</h1>
    <form action="index.php" method="POST">
        <input type="hidden" name="action" value="logout">
        <button type="submit">Tancar sessió</button>
    </form> 
    <?php 
    
    } else if(isset($_POST['usuari'])) {
        // Si el formulari de login ha estat enviat, processem les dades
        if ($_POST['usuari'] == 'user' && $_POST['contrasenya'] == 'r23r4y45u5u67i68o79o') {
            // Si les credencials són correctes, guardem el nom d'usuari a la sessió
            $_SESSION['username'] = 'user';
            $_SESSION['missatge'] = "Benvingut, " . $_SESSION['username'] . "! Has iniciat sessió correctament.";
        } else {
            $_SESSION['missatge'] = "Usuari i/o paraula clau incorrectes!";
        }
        // Redirigim a la pàgina de index després de loguejar
        header('Location: index.php');
    
    } else { 
        // Si el usuari no està loguejat, mostrem el formulari de login.
        ?>
    
    <h1>Login form</h1>
    <form action="index.php" method="POST">
        <input type="text" name="usuari" placeholder="Nom d'usuari" value="user" autofocus>
        <input type="password" name="contrasenya" placeholder="Paraula clau" value="r23r4y45u5u67i68o79o">
        <button type="submit">Entrar</button>
    </form> 

    <?php } ?>
    </div>
    <pre>$_SESSION: <?php var_dump($_SESSION); ?></pre>

</body>
</html>