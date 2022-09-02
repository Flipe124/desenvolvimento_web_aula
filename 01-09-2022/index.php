<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    echo "<p>Olá mundo</p>";
    ?>
    <?= "<p>Olá mundo</p>" ?>
    <?php
    $a = 10;
    $b = 15;
    $c = $a + $b;

    echo "$a + $b =   $c<br>";

    function soma($a)
    {
        $b = $a + 5;
    }
    soma(10);

    echo "O valor de 'b' é $b";
    ?>
</body>

</html>