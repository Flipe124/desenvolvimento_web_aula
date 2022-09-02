<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAY</title>
</head>
<body>
    <?php
    $frutas = ["Morango", "Banana", "Acabate", "Uva"];
    $frutas = array("Morango", "Banana", "Acabate", "Uva");
    print_r($frutas);

    echo $frutas[2];

    $grupos = array("Marca" => array("BMW", "Ford", "Ram"), "Carros" => array("X6", "Mustang", "1500"));

    echo "<br>";

    print_r($grupos["Marca"][2]);

    echo "<br>";

    define('CONSTANTE', "Olá mundo");
    echo CONSTANTE;

    echo "<br>";

    function calcularCirculo($raio){
        return M_PI * pow($raio, 2);
    }

    $meuRaio = 5;
    $area = calcularCirculo($meuRaio);
    echo "<b>Raio = </b>$meuRaio <br>";
    echo "<b>Área = </b>$area";

    ?>
</body>
</html>