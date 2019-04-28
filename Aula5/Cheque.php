<?php

abstract class Cheque
{
    public $Valor;
    public $Tipo;

    public function __construct($Valor, $Tipo)
    {
        $this->Valor = $Valor;
        $this->Tipo = $Tipo;
    }

    abstract function CalcularJuros();

    public function verValor()
    {
        return "Valor do cheque {$this->Tipo}: R$ {$this->real($this->Valor)} <hr>";

    }

    public function real($Valor)
    {
        return number_format($Valor, '2', ',', '.');
    }

}
