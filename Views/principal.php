<!--
    *** Integrantes ***
    Maria Clara Campos Miquelito
    Kauan Ferreira Rezende
    2Â° informática

    METAS:
    - nova tela
    - ícones bootstrap
    - lembrar senha
    - java script
    - figma
  -->

<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="http://localhost/Projeto_EsclareceAi/styles/principal.css">
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
    <?php include_once('C:\xampp\htdocs\Projeto_EsclareceAi\Temples/Header/header.php') ?>
  </header>

  <div class="elementos_perguntas">
    <div class="menu_lateral">

      <nav class="navegacao_menu_lateral">
        <ul class="menu_lateral_conteudo">
          <p class="titulo-menu">Disciplinas</p>
          <a class="menu_lateral_links" href=""><i class="fa-solid fa-flag-usa"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Inglês</a>
          <a class="menu_lateral_links" href=""><i class="fa-solid fa-flask-vial"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Química</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-calculator-fill"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Matemática</a>
          <a class="menu_lateral_links" href=""><i class="fa-solid fa-dna"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Biologia</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-magnet-fill"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Física</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-journal-bookmark"
              style="margin-right: 1rem; font-size: 1.3rem"></i>Português</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-pen"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Redação</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-globe-americas"
              style="margin-right: 1rem; font-size: 1.3rem"></i>Geografia</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-bank"
              style="margin-right: 1rem; font-size: 1.3rem"></i>História</a>
          <a class="menu_lateral_links" href=""><i class="fa-solid fa-brain"
              style="margin-right: 1rem; font-size: 1.3rem"></i>Filosofia</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-people"
              style="margin-right: 1rem; font-size: 1.3rem"></i>Sociologia</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-pc-display"
              style="margin-right: 1rem; font-size: 1.3rem"></i>Informática</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-lightning-fill"
              style="margin-right: 1rem; font-size: 1.3rem"></i>Eletrotécnica</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-gear"
              style="margin-right: 1rem; font-size: 1.3rem"></i>Mecânica</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-cpu"
              style="margin-right: 0.8rem; font-size: 1.3rem"></i>Eletromecânica</a>
        </ul>
      </nav>
    </div>
    <!--fim da barra lateral-->

    <!--Dentro da main fizemos a área onde os alunos irão fazer as perguntas-->
      <main>   
  
      <div class="campo_perguntas">

        <div>
          <p class="titulo">PERGUNTAS MAIS RECENTES</p><br>
        </div>
        <div class="conteudo_pergunta">
          <div class="perguntas_informacoes">

            <div class="info_nome_user">
              <i class="bi bi-person-circle" style="font-size: 50px;"></i>              
              <p class="nome_user">KarlaComK</p>
            </div>
            <div class="info_informacoes">
              <p class="informacoes"><i class="bi bi-globe-americas" style="margin-right: .5rem;"></i>Geografia. Há 4 horas</p>
              
            </div>

          </div>
          <p class="texto_pergunta">Como podemos relacionar formas do relevo e ocupação humana? 
            Quais as formas de relevo em que há maior ocupação da sociedade? Quais são os problemas mais comuns das áreas urbanas?</p>
          <div class="alinhamento_resp">
            <a class="Resposta" href="#">Responder</a>
            <ul class="rating">
              <li class="star-icon ativo" data-avaliacao="1"></li>
              <li class="star-icon" data-avaliacao="2"></li>
              <li class="star-icon" data-avaliacao="3"></li>
              <li class="star-icon" data-avaliacao="4"></li>
              <li class="star-icon" data-avaliacao="5"></li>
            </ul>
          </div>
        </div>

        <div class="conteudo_pergunta">
          <div class="perguntas_informacoes">

            <div class="info_nome_user">
              <i class="bi bi-person-circle" style="font-size: 50px;"></i>              
              <p class="nome_user">Laís moranguinho</p>
            </div>

            <div class="info_informacoes">
              <p class="informacoes"><i class="bi bi-calculator-fill" style="margin-right: .5rem;"></i>Matemática. Há 1 dia</p>
            </div>

          </div>
          <p class="texto_pergunta">Os quartos são valores que dividem o conjunto de dados ordenados (rol) em 4 partes iguais 
            (em cada uma das quatro partes tem-se 25% dos dados). Qual destes quartos é o valores situado na série de dados á 
            direita da mediana de tal modo que 75% das observações são menores que ele e 25% são maiores?</p>
            <div class="alinhamento_resp">
              <a class="Resposta" href="#">Responder</a>
              <ul class="rating">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
              </ul>
            </div>
        </div>

        <div class="conteudo_pergunta">
          <div class="perguntas_informacoes">

            <div class="info_nome_user">
              <i class="bi bi-person-circle" style="font-size: 50px;"></i>              
              <p class="nome_user">NandinhaPVP2023</p>
            </div>

            <div class="info_informacoes">
              <p class="informacoes"><i class="bi bi-journal-bookmark" style="margin-right: .5rem;"></i>Português. Há 3 dias</p>
              
            </div>

          </div><!--fim pergunta_informacao-->
          <p class="texto_pergunta">As funções da linguagem estão diretamente ligadas aos elementos essenciais do processo de 
            comunicação, e uma delas é definida como uma conversa “de elevador”, “de fila do banco”, aquela rápida e que fazemos por educação no dia a dia. É a função:</p>
            <div class="alinhamento_resp">
              <a class="Resposta" href="#">Responder</a>
              <ul class="rating">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
              </ul>
            </div>


      </div>
    </main>
  </div>
  <!--Fim da área de perguntas-->

  <!--Incio do rodape-->
  <!--Também usamos o botstrap icon para colocar alguns elementos na parte de contatos-->
  <footer>
    <?php
      include_once('C:\xampp\htdocs\Projeto_EsclareceAi\Temples/Footer/footer.php')
    ?>
  </footer>
  <!--Fim do rodape-->

  <script src="https://kit.fontawesome.com/4a850b78df.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="http://localhost/Projeto_EsclareceAi/js/principal.js"></script>
</body>

</html>