<?php
class Usuario
{
    public $nome;
    public $cpf;
    public $endereco;

    // CONSTRUTOR DA CLASSE
    function __construct()
    {
        $this->preparaUsuario();
    }

    private function preparaUsuario()
    {
        $this->nome = "Felipe Oliveira";
        $this->cpf = "000.000.000-00";
        $this->endereco = "Rua Roma";

        return;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}
echo "Entrou usuário <hr>";

$usuario = new Usuario();
$usuario->getNome();
$usuario->getCpf();
$usuario->getEndereco();

var_dump($usuario);
