<?php
    include('/xampp/htdocs/Projeto_EsclareceAi/Model/Banco.php');
    
    if(isset($_POST['email']))
    {   
        $senha=$_POST['senha'];
        $email=$_POST['email'];   

        $sql = $pdo->prepare("select senha from aluno where e_mail=? limit 1");
        $sql->execute(array($email));
        $resul = $sql->fetchColumn(); // fetch column pega apenas um valor 

        if(password_verify($senha,$resul))
        {
            header('Location: http://localhost/Projeto_EsclareceAi/Views/principal.php'); // redireciona para outra paginha
        }
        else
        {
            echo ("<script> alert('Usuário ou senha inválida') </script>");
        }
    }
?>