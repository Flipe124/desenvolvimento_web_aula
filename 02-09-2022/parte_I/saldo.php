<?php
echo "SALDO.PHP  <br>";

class Conta {
    public $saldo = 0;
    public $titular;
    
    function depositar($valor){
        $this->saldo += $valor;
    }

    function sacar($valor){
        if (($this->saldo > 0) && ($this->saldo >= $valor)) {
            $this->saldo -= $valor;
        } else{
            echo "Saldo insuficiente!!! <br>";
        }
    }

    function verSaldo(){
        echo "Saldo disponível: " . $this->saldo . "<br>";
    }

}

$novaConta = new conta();
$novaConta->verSaldo();
$novaConta->depositar(500);
$novaConta->verSaldo();
$novaConta->sacar(100);
$novaConta->verSaldo();
$novaConta->sacar(100);
$novaConta->verSaldo();
$novaConta->sacar(600);
$novaConta->verSaldo();
