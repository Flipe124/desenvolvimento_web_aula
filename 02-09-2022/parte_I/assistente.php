<?php
require_once "./usuario.php";

class Assistente extends Usuario{
    protected $ramal;

    function __construct(){
        parent::__construct();
        $this->ramal = "000";
    }

    public function getRamal(){
        return $this->ramal;
    }
}

echo "Entrou assistente <hr>";
