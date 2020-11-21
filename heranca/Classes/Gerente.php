<?php

namespace Classes;

class Gerente extends Funcionario
{
    private $project;

    public function __construct($nome, $salario, $projeto)
    {
        parent::__construct($nome, $salario);
        $this->projeto = $projeto;
    }

    public function relatorioFunc()
    {
        parent::relatorioFunc();
        echo "<p><b>Projeto</b>: {$this->projeto}</p>";
    }


    /**
     * Get the value of project
     */ 
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set the value of project
     *
     * @return  self
     */ 
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

}