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


        if(!isset($_SESSION['ID'])) { ?>

    <h1>Logout form</h1>
    <form action="login_proc.php" method="POST">
        <pre><?php var_dump($_SESSION); ?></pre>
        <input type="hidden" name="action" value="logout">
        <button type="submit">Tancar sessió</button>
    </form> 

    <?php } else { ?>

    
    <h1>Login form</h1>
    <form action="login_proc.php" method="POST">
        <input type="text" name="usuari" placeholder="Nom d'usuari" value="user" autofocus>
        <input type="password" name="contrasenya" placeholder="Paraula clau" value="pass">
        <input type="hidden" name="action" value="login">
        <button type="submit">Entrar</button>
    </form> 


    <?php } ?>
    </div>

</body>
</html>