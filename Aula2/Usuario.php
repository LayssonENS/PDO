<?php

class Usuario {
    public $Nome;
    public $Email;
    public $Prova;
    public $Trabalho;
    


    public function getEmail()
    {
        return $this->Email;
    }
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }


    public function getNome()
    {
        return "$this->Nome <br>";
    }
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }


    public function getProva()
    {
        return $this->Prova;
    }
    public function setProva($Prova)
    {
        $this->Prova = $Prova;
    }

  
    public function getTrabalho()
    {
        return $this->Trabalho;
    }
    public function setTrabalho($Trabalho)
    {
        $this->Trabalho = $Trabalho;
    }
}
?>

