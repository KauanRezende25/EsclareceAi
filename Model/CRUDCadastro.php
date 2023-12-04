<?php
    #CRUD
    include ("/xampp/htdocs/Projeto_EsclareceAi/Model/Banco.php");
    include ('/xampp/htdocs/Projeto_EsclareceAi/Controller/OOCadastro.php');
    
    if(isset($_POST['nome']))
    {   
        $sql = $pdo->prepare("select count(e_mail) from aluno where e_mail=?;");
        $sql->execute(array($_POST['email']));
        $qnt = $sql->fetchColumn();
        if($qnt===0)
        {
            $user = new user($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['curso'], $_POST['user'],$_POST['serie']);
            $sql = $pdo->prepare("insert into aluno values (?,?,null,?,?,?,?)");
            $sql->execute(array($user->getNome(), $user->getEmail(), $user->getSenha(), $user->getCurso(), $user->getUser(), $user->getSerie()));
            header('Location: http://localhost/Projeto_EsclareceAi/Views/login.php');
        }
        else
        {
            echo "<script> alert('E-mail já cadastrado') </script>";
        }
    }
?>