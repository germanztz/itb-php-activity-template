<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays en PHP</title>
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
    <h1>Arrays en PHP</h1>
    <div class="container">
        <pre>

        // Els tipus de dades estructurats on emmagatzemar un conjunt de dades homogeni, arrays, es poden accedir mitjançant l’índex (que com és habitual, comença pel 0)

        $alumnes = array("Carles", "Laura", "Víctor", "Sílvia"); 
        echo $alumnes[1];
        </pre>
        <?php

        $alumnes = array("Carles", "Laura", "Víctor", "Sílvia"); 
        echo $alumnes[1];
        ?>

        <pre>

        // Recorregut d'un array amb foreach

        $alumnes = ["Carles", "Laura", "Víctor", "Sílvia"];
        foreach ($alumnes as $alumne) {
            echo "$alumne&lt;br&gt;";
        }
        </pre>
        <?php
        $alumnes = ["Carles", "Laura", "Víctor", "Sílvia"];

        foreach ($alumnes as $alumne) {
            echo "$alumne<br>";
        }

        ?>

        <pre>
            $bici = array("marca"=>"Cannondale", "model"=>"Topstone Carbon 4", "any"=>2023);
            var_dump($bici);
            echo "Marca: " . $bici["marca"];
        </pre>

        <?php
            $bici = array("marca"=>"Cannondale", "model"=>"Topstone Carbon 4", "any"=>2023);
            var_dump($bici);
            echo "<br>Marca: " . $bici["marca"];
        ?>

        <pre>
            function fun1() { echo "Primera funció!"; }
            function fun2() { echo "Segona funció!"; }
            function fun3() { echo "Tercera funció!"; }

            // Guardem els noms de les funcions com a cadenes (strings)
            $arrayDeFuncions = array("f1" => "fun1", "f2" => "fun2", "f3" => "fun3");

            $arrayDeFuncions["f2"]();
        </pre>
        <?php
            function fun1() { echo "Primera funció!"; }
            function fun2() { echo "Segona funció!"; }
            function fun3() { echo "Tercera funció!"; }

            // Guardem els noms de les funcions com a cadenes (strings)
            $arrayDeFuncions = array("f1" => "fun1", "f2" => "fun2", "f3" => "fun3");

            $arrayDeFuncions["f2"]();
        ?>
    </div>
</body>
</html>