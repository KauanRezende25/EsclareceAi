<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer pergunta</title>
    <link rel="stylesheet" href="http://localhost/Projeto_EsclareceAi/styles/fazerPergunta.css">
    <link rel="icon" type="image/png" href="http://localhost/Projeto_EsclareceAi/assets/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="apresentacao">
    <main class="principal">     

        <div class="campo_total_fazer_pergunta">

            <div class="cabecalho_pergunta">               
    
                <div class="voltar">
                    <a href="http://localhost/Projeto_EsclareceAi/Views/principal.php"><i class="bi bi-arrow-left-short" style="font-size: 2rem; color: black;" ></i></a>
                </div>
                <p class="titulo_campo_pergunta">Adicionar uma pergunta</p>

                <div class="botao_escolher_disciplina">
                    <button class="escolher_disciplina">Escolher disciplina</button>
                    <i class="bi bi-caret-down-fill setinha"></i>
                </div>
            </div>

            <div class="orientacoes">
                <ul> 
                    <p class="titulo_orientacoes">Dicas para obter boas respostas rapidamente: </p>
                    <li>Certifique-se de que a sua pergunta não foi feita anteriormente</li>
                    <li>Mantenha a sua pergunta curta e vá direto ao ponto</li>
                    <li>Verifique bem a gramática e a ortografia</li>
                </ul>
            </div>
            
            <input class="campo_pergunta" type="text" placeholder="Digite sua dúvida...">

            <div class="rodape_perguntas">
                <div>
                    <div class="campo_botao_pergunta">
                        <a class="botao_pergunta" href="http://localhost/Projeto_EsclareceAi/Views/fazerPergunta.php">Publicar</a>
                    </div>
                </div>

                <div class="campo_logo">
                        <img class="logo" src="http://localhost/Projeto_EsclareceAi/assets/EsclareceAi__3_-removebg-preview.png">
                </div>
            </div>
            
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>