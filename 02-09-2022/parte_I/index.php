<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 2;
    echo ($a + 2);

    echo "<br>";
    $a = 10;
    echo ($a / 5);

    echo "<br>";
    $a = 10;
    echo ($a % 5);

    echo "<br>";
    $a++;
    echo ($a);

    echo "<br>";
    $a--;
    echo ($a);

    echo "<br>";
    $a = 10;
    echo ($a * 5);

    //=====================

    echo "<hr>";
    $a = 5;
    $resultado = ($a == 5);

    echo $resultado == 1 ?  "Verdadeiro" :  "Falso";

    echo "<hr>";

    echo ($a * 5);

    echo "<hr>";

    $data = getdate();

    switch ($data['wday']) {
        case 6:
            echo "Finalmente sexta-feira!";
            break;

        case 7:
            echo "Finalmente sábado!";
            break;

        default:
        echo "Esperando o final de semana :(";
            break;
    }

    echo "<hr>";

    for ($i=1; $i < 10 ; $i++) { 
      echo $i . " ";
    }

    echo "<hr>";

    $i = 1;

    while ($i <= 10) {
        echo $i . "<br>";
        $i++;
    }

    echo "<hr>";

    $b = 0;
    do {
        echo "Linha $b <br>"; 
        $b++;
    } while ($b <= 10);

    ?>
</body>

</html>