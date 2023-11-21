<!--
    *** Integrantes ***
    Maria Clara Campos Miquelito
    Kauan Ferreira Rezende
    2° informática
-->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>

    <link rel="stylesheet" href="/styles/SobreNos.css">
    <link rel="icon" type="image/png" href="/assets/icon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Pesquisar Resposta" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" style="border: #4FAFFF; background-color: #4FAFFF; color: white;">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>
  <!--fim do cabeçalho-->
  
  <!--Fizemos aqui as informações do projeto e dos desenvolvedores, também usamos o botstrap icon para colocar o icone das redes sociais-->
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
                <img class ="imagem" src="/assets/Kauan.jpg" width="210" height="200">
                <img class ="imagem" src="/assets/Maria.png" width="210" height="200">
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
    <!--Fim das informações e do projeto-->

    <!--Incio do rodape-->
    <!--Também usamos o botstrap icon para colocar alguns elementos na parte de contatos-->
    <footer>
        <div class="rodape">
          <div class="empresa">
            <div class="info_empresa_element">
              <p class="info_empresa">MK-Tech</p>
            </div>
            <p>Seu Parceiro Virtual
            <br>Busca por Conhecimento</p>
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
                  <i class="bi bi-telephone" ></i>
                  <p>+55 32 99983-0653</p> 
                </div>
                <div class="elementos">
                  <i class="bi bi-telephone" ></i>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>