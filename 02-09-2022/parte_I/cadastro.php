<?php
require_once "./assistente.php";
$assistente = new Assistente();

echo $assistente->getRamal();
echo "<br>";
echo $assistente->getNome();
echo "<br>";
echo $assistente->getCpf();
echo "<br>";
echo $assistente->getEndereco();
echo "<br>";

// phpinfo();

//$_GET["NOME DO CAMPO"]  PEGA PARAMETRO DA URL

// SE EXISTE
if (isset($_GET["id"])) {
    echo $_GET['id'];
}

//SENÃO
if (!isset($_GET["id"])) {
    echo "Não existe";
}
