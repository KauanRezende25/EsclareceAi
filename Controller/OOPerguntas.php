<?php

class pergunta
{
    private $hora;
    private $data;
    private $aluno;
    private $disciplinas;
    private $conteudo;

    public function __construct($aluno,$disciplinas,$conteudo) 
    {
        date_default_timezone_set('America/Sao_Paulo');
        $this->hora = date('H:i:s');
        $this->data = date('d/m/y');
        $this->disciplinas = $disciplinas;
        $this->aluno = $aluno;
        $this->conteudo = $conteudo;

    }

    public function getData()
    {
        return $this->data;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function getDisciplina()
    {
        return $this->disciplinas;
    }

    public function getAluno()
    {
        return $this->aluno;
    }
    
    public function getconteudo()
    {
        return $this->conteudo;
    }
}
?>