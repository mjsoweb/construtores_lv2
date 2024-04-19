<?php
class Empregado
{
    private $nome;
    private $salario;

    //o metodo construtor

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->setSalario($salario);
    }

    //modifica o estado do atributo

    public function setNome($nome)
    {
        $this->$nome;
    }
    //acessa o atributo
    public function getNome()
    {
        return $this->nome;
    }
    public function setSalario($salario)
    {
        if ($salario < 1412.00) {
            echo "\nSalário inválido";
        } else {
            $this->salario = $salario;
        }

    }
    public function getSalario()
    {
        return $this->salario;
    }

    public function toString()
    {
        return "\nNome:{$this->getNome()} e \nSalário:{$this->getSalario()}";
    }



}


?>