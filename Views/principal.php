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
    <?php include_once('/xampp/htdocs/Projeto_EsclareceAi/Templates/Header/header.php') ?>
  </header>

  <div class="elementos_perguntas">
    <div class="menu_lateral">

      <nav class="navegacao_menu_lateral">
        <ul class="menu_lateral_conteudo">
          <p class="titulo-menu">Disciplinas</p>
          <a class="menu_lateral_links" href=""><i class="bi bi-flag"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Inglês</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-type-h2"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Química</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-calculator-fill"
              style="margin-right: 1rem; font-size: 1.3rem;"></i>Matemática</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-virus"
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
          <a class="menu_lateral_links" href=""><i class="bi bi-lightbulb-fill"
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
          <a class="menu_lateral_links" href=""><i class="bi bi-robot"
              style="margin-right: 0.8rem; font-size: 1.3rem"></i>Engenharia de Controle e Automação</a>
          <a class="menu_lateral_links" href=""><i class="bi bi-pc-display-horizontal"
              style="margin-right: 0.8rem; font-size: 1.3rem;"></i>Engenharia da Computação</a>
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
        <?php
          include ('/xampp/htdocs/Projeto_EsclareceAi/Model/CRUDPerguntas.php');
        ?>
    </main>
  </div>
  <!--Fim da área de perguntas-->

  <!--Incio do rodape-->
  <!--Também usamos o botstrap icon para colocar alguns elementos na parte de contatos-->
  <footer>
    <?php
      include("/xampp/htdocs/Projeto_EsclareceAi/Templates/Footer/footer.php");
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