<!--
    *** Integrantes ***
    Maria Clara Campos Miquelito
    Kauan Ferreira Rezende
    2° Informática
-->

<?php
    include_once("/xampp/htdocs/Projeto_EsclareceAi/Model/CRUDlogin.php");
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="icon" type="image/png" href="http://localhost/Projeto_EsclareceAi/assets/icon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="http://localhost/Projeto_EsclareceAi/styles/login.css">

</head>

<body>

    <main class="apresentacao">
        <div class="total"> <!--Div que engloba todos os elementos da main-->

            <img class="Logo" src="http://localhost/Projeto_EsclareceAi/assets/EsclareceAi__3_-removebg-preview.png" width="250" height="250"> <!--Logo do site-->

            <form method="post"> <!--Action direciona para a tela principal ao clicar no botão do formulário-->

                <div class="login_total"><!--Div que engloba todos os elementos dentro do formulário-->
                    <div class="conteudo_login"><!--Div que engloba todos os Campos do input-->

                        <div class="input_icone">
                            <div class="campo_input_icone_email">
                                <i class="bi bi-envelope-fill" style="font-size:2.2rem; margin-left: 0.4em;"></i>
                            </div>
                            <input class="campo_login" type="email" id="icone_email" placeholder="E-mail" name="email" required>
                        </div>

                        <div class="input_icone">
                            <div class="campo_input_icone_senha">
                                <i class="bi bi-lock-fill" style="font-size:0.8em; margin-left: 0.7rem; "></i>
                            </div>
                            <div class="mostrar_senha">   
                                <input maxlength="16" minlength="8" class="campo_login" type="password" id="icone_senha" placeholder = "Senha"  name="senha" required>
                                <i class="bi bi-eye-fill olhinho" id="btn-senha" onclick="mostrarSenha()"></i>
                            </div>
                        </div>
                    </div>

                    </div>

                    <!--Div que engloba o Lembrar senha e o esqueceu sua senha-->
                    <div class="info_login">
                        <div class="lembrar_senha">
                            <input class="lembrar_senha_check" type="checkbox" id="guardar_senha">
                            <label class="lembrar_senha_conteudo" for="guardar_senha">Lembrar minha senha</label>
                        </div>

                        <div class="campo_registro">
                            <a class="Registro" href=""> Esqueceu a senha?</a>
                        </div>
                    </div>

                    <!--Botão de login-->
                    <button class="botao" type="submit"> Login </button>

                    <!--Opção de cadastrar-se no site-->
                    <div class="campo_cadastro">
                        <a class="cadastro" href="http://localhost/Projeto_EsclareceAi/Views/cadastro.php">Cadastre-se aqui</a>
                    </div>

                </div>
            </form>
        </div>
    </main>

    <script src="http://localhost/Projeto_EsclareceAi/js/Login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

