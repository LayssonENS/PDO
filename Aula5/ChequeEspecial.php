<?php

class ChequeEspecial extends Cheque
{
    public function CalcularJuros()
    {
        $this->Valor = $this->Valor * 1.80;

        return "Valor do cheque {$this->Tipo}: R$ {$this->Valor} <hr>";
    }
}
