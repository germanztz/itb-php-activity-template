<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals en PHP</title>
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
        // Dump the variable for debugging
        echo "<h3>_POST:</h3>";
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        echo "<h3>_GET:</h3>";
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";

        echo "<h3>_REQUEST:</h3>";
        echo "<pre>";
        var_dump($_REQUEST);
        echo "</pre>";

        echo "<h3>_FILES:</h3>";
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";

        echo "<h3>_COOKIE:</h3>";
        echo "<pre>";
        var_dump($_COOKIE);
        echo "</pre>";

        echo "<h3>_SESSION:</h3>";
        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";

        echo "<h3>_SERVER:</h3>";
        echo "<pre>";
        var_dump($_SERVER);
        echo "</pre>";        
        ?>
    </div>
</body>
</html>