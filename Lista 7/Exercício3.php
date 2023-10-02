<?php

abstract class Telefone {
    protected $ddd;
    protected $numero;

    abstract public function calculaCusto($tempoLigacao);

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDDD() {
        return $this->ddd;
    }

    public function getNumero() {
        return $this->numero;
    }
}

// Classe Fixo derivada de Telefone
class Fixo extends Telefone {
    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempoLigacao) {
        return $tempoLigacao * $this->custoPorMinuto;
    }
}

// Classe abstrata Celular derivada de Telefone
abstract class Celular extends Telefone {
    protected $custoMinutoBase;
    protected $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }
}

// Classe PrePago derivada de Celular
class PrePago extends Celular {
    public function calculaCusto($tempoLigacao) {
        $custoTotal = $tempoLigacao * ($this->custoMinutoBase * 1.4);
        return $custoTotal;
    }
}

// Classe PosPago derivada de Celular
class PosPago extends Celular {
    public function calculaCusto($tempoLigacao) {
        $custoTotal = $tempoLigacao * ($this->custoMinutoBase * 0.9);
        return $custoTotal;
    }
}


$telefonePrePago = new PrePago("21", "987654321", 0.3, "Vivo");
$telefonePosPago = new PosPago("31", "555555555", 0.2, "Claro");

$tempoLigacao = 10; 

echo "Custo da ligação para o telefone fixo: " . $telefoneFixo->calculaCusto($tempoLigacao) . " reais\n";
echo "Custo da ligação para o telefone pré-pago: " . $telefonePrePago->calculaCusto($tempoLigacao) . " reais\n";
echo "Custo da ligação para o telefone pós-pago: " . $telefonePosPago->calculaCusto($tempoLigacao) . " reais\n";

?>
