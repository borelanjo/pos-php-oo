<?php

namespace Classes;

class Funcionario
{
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function relatorioFunc()
    {
        echo "<h3>Relatório do Funcionário</h3>";
        echo "<p><b>Nome</b>: {$this->nome}</p>";
        echo "<p><b>Salário</b>: {$this->salario}</p>";
    }


    /**
     * Pega o nome do funcionário
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Define o nome do funcionário
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Pega o salário do funcionário
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Define o salário do funcionário
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}