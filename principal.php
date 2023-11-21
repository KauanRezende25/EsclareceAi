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
  <link rel="stylesheet" href="/styles/principal.css">
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
  <!--Cabeçalho-->
  <!--Usamos o botstrap para fazer um cabeçalho e além disso usamos o style dentro do css para fazer poder personalizar nosso cabeçalho-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid links_navbar" style="background-color: #0279C9;">
      <img class="logo" src="/assets/EsclareceAi__3_-removebg-preview.png" width="200" height="200">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav links_links_navbar me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link" href="/login.html" style="color: white">Entrar</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/principal.html" style="color: white;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sobrenos.html" style="color: white">Sobre nós</a>
          </li>

          <li class="nav-item-pergunta">
            <a class="nav-link" href="/fazerPergunta.html" style="color: white">Fazer sua pergunta</a>
          </li>

        </ul>

          <form class="d-flex pesquisa" role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisar Resposta" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" style="border: #4FAFFF; background-color: #4FAFFF; color: white;">Pesquisar</button>
          </form>


    </div>
  </nav>

  
  <!--Fim do cabeçalho-->

  <!--Barras de disciplinas-->
  <!--Usamos uma nav e uma ul para fazer a barra das disciplinas e usamos o botstrap icon para colocar os icones referentes a cada materia-->
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
    <div class="rodape">
      <div class="empresa">
        <div class="info_empresa_element">
          <p class="info_empresa">MK-Tech</p>
        </div>
        <p>Seu Parceiro Virtual
          <br>Busca por Conhecimento
        </p>
      </div>
      <div class="suporte">
        <div class="info_empresa_element">
          <p class="info_empresa">Suporte</p>
        </div>
        <div class="elementos">
          <a class="elementos_suporte" href="#">Reportar Bugs</a>
        </div>
        <div class="elementos">
          <a class="elementos_suporte" href="#">Central de Ajuda</a>
        </div>
        <div class="elementos">
          <a class="elementos_suporte" href="#">Acessiblidade</a>
        </div>
      </div>
      <div class="links">
        <div class="info_links_element">
          <p class="info_empresa">Links Úteis</p>
        </div>
        <div class="elementos">
          <a class="elementos_suporte" href="#">Pagina Inicial</a>
        </div>
        <div class="elementos">
          <a class="elementos_suporte" href="#">Termo de Uso</a>
        </div>
        <div class="elementos">
          <a class="elementos_suporte" href="#">Politíca de Privacidade</a>
        </div>
      </div>
      <div class="contatos">
        <div class="info_empresa_element">
          <p class="info_empresa"> Contatos</p>
        </div>
        <div class="info_contatos">
          <div class="elementos">
            <i class="bi bi-envelope"></i>
            <p>kauanrezende146@gmail.com</p>
          </div>
          <div class="elementos">
            <i class="bi bi-envelope"></i>
            <p>miquelitomaria@gmail.com</p>
          </div>
          <div class="elementos">
            <i class="bi bi-telephone"></i>
            <p>+55 32 99983-0653</p>
          </div>
          <div class="elementos">
            <i class="bi bi-telephone"></i>
            <p>+55 32 99981-2804</p>
          </div>
        </div>
      </div>
    </div>
    <div class="rodape_element">
      <div class="rodape_element_info">
        <p> 2023 </p>
        <i class="bi bi-c-circle"></i>
        <p> Desenvolvido pela MK-Tech | Projeto sem fins comerciais </p>
      </div>
    </div>
  </footer>
  <!--Fim do rodape-->

  <script src="https://kit.fontawesome.com/4a850b78df.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="principal.js"></script>
</body>

</html>