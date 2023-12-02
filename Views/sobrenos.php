<!--
    *** Integrantes ***
    Maria Clara Campos Miquelito
    Kauan Ferreira Rezende
    2° informática
-->

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="http://localhost/Projeto_EsclareceAi/styles/principal.css">
    <link rel="stylesheet" href="http://localhost/Projeto_EsclareceAi/styles/sobrenos.css">
    <link rel="icon" type="image/png" href="assets/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Krona+One&family=Montserrat:wght@100;400&family=Roboto&display=swap"
      rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

  <header>
    <?php include_once('/xampp/htdocs/Projeto_EsclareceAi/Templates/Header/header.php') ?>
  </header>
   
    <main class="apresentacao"> 
        <div class="texto_apresentacao">
            <p class = "paragrafo">A partir de um trabalho proposto em conjunto das disciplinas de Desenvolvimento de Aplicações WEB e Banco de Dados, 
            os alunos do segundo ano de informática do CEFET Leopoldina (Campus 3) foram encarregados de desenvolver uma ideia para um site e 
            elaborá-lo, de forma a aprimorá-lo ao longo do ano letivo.</p><br><br><br>

            <p class = "paragrafo">A proposta da dupla formada pelos alunos Kauan Ferreira Rezende e Maria Clara Campos Miquelito foi o site 
              "EsclareceAi". O objetivo é criar um ambiente digital aberto para os estudantes dos cursos técnicos do CEFET-MG do campus 3 
              (diurno e noturno), que visa à comunicação direta entre eles, a fim de tirar dúvidas e questionamentos sobre os conteúdos dados nas 
              aulas da Instituição. A ideia é que os alunos consigam postar suas dúvidas no site, e os outros conseguirem ajudá-los, criando assim 
              uma interação rápida e acessível para todo o corpo discente.</p>
        </div>

        <div class="adicionais">
            <p class="titulo_adicionais">Desenvolvedores do site:</p>
            <div class = "imagens_adicionais">
                <img class ="imagem" src="http://localhost/Projeto_EsclareceAi/assets/Kauan.jpg" width="210" height="200">
                <img class ="imagem" src="http://localhost/Projeto_EsclareceAi/assets/Maria.png" width="210" height="200">
            </div>

            <p class="titulo_adicionais">Contatos:</p>

            <div>
                <nav class="navegacao_adicionais">
                        
                    <div class="icon_redes">
                        <div class="icon-instagram">
                            <i class="bi bi-instagram" style="font-size: 1.3rem; color:#ffffff;"></i>
                        </div>
                        <a class="adicionais_links" href="https://www.instagram.com/kauan_.rz/">Instagram</a>
                    </div>
    
                    <div class="icon_redes">
                        <div class="icon-instagram">
                            <i class="bi bi-instagram" style="font-size: 1.3rem; color:#ffffff;"></i>
                        </div>
                        <a class="adicionais_links" href="https://www.instagram.com/mariaclaramiquelito/">Instagram</a>
                    </div>
    
                    <div class="icon_redes">
                        <div class="icon-twitter">
                            <i class="bi bi-twitter" style="font-size: 1.3rem; color:#ffffff;"></i>
                        </div>
                        <a class="adicionais_links" href="https://twitter.com/LIXS4TURN">Twitter</a>
                    </div>
                    <div class="icon_redes">
                        <div class="icon-twitter">
                            <i class="bi bi-twitter" style="font-size: 1.3rem; color:#ffffff;"></i>
                        </div>
                        <a class="adicionais_links" href="">Twitter</a>
                    </div>
                </nav>
            </div>
        </div>
    </main>

    <footer>
    <?php
      include_once('/xampp/htdocs/Projeto_EsclareceAi/Templates/Footer/footer.php')
    ?>
    </footer>
       

    <script src="https://kit.fontawesome.com/4a850b78df.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>