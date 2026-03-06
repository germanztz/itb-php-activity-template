<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO en PHP</title>
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
    <h1>POO en PHP</h1>
    <div class="container">
        <pre>

class Bici {
  // Atributs
  public $marca;
  public $model;
  public $color;

  // Mètodes
  function setMarca($marca) {
    $this->marca = $marca;
  }
  function getMarca() {
    return $this->marca;
  }
}

$bici1 = new Bici();
$bici2 = new Bici();
$bici1->setMarca('Cannondale');
$bici2->setMarca("Kona");

echo $bici1->getMarca();
echo "&lt;br&gt;";
echo $bici2->getMarca();

_______________________________________________________________

<?php
    class Bici {
        // Atributs
        public $marca;
        public $model;
        public $color;

        // Mètodes
        function setMarca($marca) {
            $this->marca = $marca;
        }
        function getMarca() {
            return $this->marca;
        }
    }

    $bici1 = new Bici();
    $bici2 = new Bici();
    $bici1->setMarca('Cannondale');
    $bici2->setMarca("Kona");

    echo $bici1->getMarca();
    echo "<br>";
    echo $bici2->getMarca();

?>


        </pre>
    </div>
</body>
</html>