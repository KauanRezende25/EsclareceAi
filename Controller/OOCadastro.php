<?php #Orientação a Objeto

class user
{
    private $nome;
    private $email;
    private $senha;
    private $curso;
    private $user;
    private $serie;

    public function __construct($nome, $email, $senha, $curso, $user, $serie)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        $this->setCurso($curso);
        $this->user = $user;
        $this->serie = $serie;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getSerie()
    {
        return $this->serie;
    }

    public function setNome($nome)
    {
        $this->nome=$nome;
    }

    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function setSenha($senha)
    {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function setCurso($curso)
    {
        $this->curso=$curso;
    }

    public function setUser($user)
    {
        $this->user=$user;
    }

    public function setSerie($serie)
    {
        $this->serie=$serie;
    }
}
