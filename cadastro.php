<!--
    *** Integrantes ***
    Maria Clara Campos Miquelito
    Kauan Ferreira Rezende
    2° Informática
-->

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro </title>
    <link rel="icon" type="image/png" href="/assets/Logo_sem_escrito_sem_fundo.png">
    <link rel="icon" type="image/png" href="/assets/icon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/styles/login.css">

</head>

<body>

    <?php include "Banco.php" ?>

    <main class="apresentacao">

        <div class="total_cadastro"> <!--Div que engloba todos os elementos dentro do formulário-->

            <img class="Logo" src="/assets/EsclareceAi__3_-removebg-preview.png" width="250" height="250"> 
            <form action = "/login.html"> <!--Action direciona para a tela de login ao clicar no botão do formulário-->

                <div class="conteudo_login"> <!--Div que engloba todos os Campos do input-->
                    
                    <div class="input_icone">
                        <div class="campo_input_icone_email">
                            <i class="bi bi-person-fill" style="font-size:2.4rem; margin-left: 0.4em;"></i>
                        </div>
                        <input class="campo_login" type="text" id="icone_nome" placeholder="Nome completo" required>
                    </div> 

                    <div class="input_icone">
                        <div class="campo_input_icone_email">
                            <i class="bi bi-person-fill" style="font-size:2.4rem; margin-left: 0.4em;"></i>
                        </div>
                        <input class="campo_login" type="text" id="icone_nome" placeholder="Nome de usuário" required>
                    </div> 
                            
                    <div class="input_icone">
                        <div class="campo_input_icone_email">
                            <i class="bi bi-envelope-fill" style="font-size:2.1rem; margin-left: 0.5em;"></i>
                        </div>
                        <input class="campo_login" type="email" id="icone_email" placeholder="E-mail" required>
                    </div>


                    <div class="input_icone">
                            <div class="campo_input_icone_senha">
                                <i class="bi bi-lock-fill" style="font-size:0.85em; margin-left: 0.5em;"></i>
                            </div>
                            <div class="mostrar_senha">   
                                <input maxlength="16" minlength="8" class ="campo_login" type="password" name="senha" size="15" placeholder ="Senha" id = "icone_senha" required onchange='confereSenha()'>                                
                                <i class="bi bi-eye-fill olhinho" id="btn-senha" onclick="mostrarSenha()"></i>
                            </div>
                    </div>

                    <div class="input_icone">
                        <div class="campo_input_icone_senha">
                            <i class="bi bi-lock-fill" style="font-size:0.85em; margin-left: 0.5em;"></i>
                        </div>
                        <div class="mostrar_senha">   
                            <input maxlength="16" minlength="8" class ="campo_login" type="password" name="confirma" size="15" placeholder ="Confirmação de senha" id = "icone_senha" required onchange='confereSenha()'>                                
                            <i class="bi bi-eye-fill olhinho" id="btn-senha2" onclick="mostrarSenha2()"></i>
                        </div>
                </div>

                </div><!--conteudo_login-->
            
            <!--Botão de login-->
            <button class="botao" type="submit"> Criar conta </button>

            <!--Opção de fazer login no site-->
            <div class="campo_cadastro">
                <a class="cadastro" href="/login.html">Já tem um conta? Clique aqui</a>
            </div>

            </form>            
        </div>

    </main>

    <div class="Rodape-Cadastro">
        <!--<footer class="rodape">
            <p>Desenvolvido por MK-Tech</p>
        </footer>-->
    </div>

    <script src="/Login.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
