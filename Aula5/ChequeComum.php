<?php

class ChequeComum extends Cheque
{
    public function CalcularJuros()
    {
        $this->Valor = $this->Valor * 1.25;

       return "Valor do cheque {$this->Tipo}: R$ {$this->Valor} <hr>";
    }
   
}
