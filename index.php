<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Maratona</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.light_green-green.min.css" />
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
    <!-- MDL navigation container -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title of the Header -->
                <span class="mdl-layout-title">Maratona IFSP</span>
                <!-- Spacer, to align items to right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation links, hidden on smaller displays -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">Inico</a>
                    <a class="mdl-navigation__link" href="#maratona">A Maratona</a>
                    <a class="mdl-navigation__link" href="#regras">Regras</a>
                    <a class="mdl-navigation__link" href="#cadastro">Cadastro</a>
                    <a class="mdl-navigation__link" href="#local">Local</a>
                </nav>
            </div>
        </header>

        <!-- Drawer container -->
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <span class="mdl-layout-title">Menu</span>
            <!-- navigation Container, with links -->
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Inico</a>
                <a class="mdl-navigation__link" href="#maratona">A Maratona</a>
                <a class="mdl-navigation__link" href="#regras">Regras</a>
                <a class="mdl-navigation__link" href="#cadastro">Cadastro</a>
                <a class="mdl-navigation__link" href="#local">Local</a>
            </nav>
        </div>


        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="parallax" id="itemA">
                  <img src="img/Im_2.3.png" alt="">
                </div>
            </div>
            <div class="mdl-grid parallax" id="itemB">
              <div class="mdl-cell mdl-cell--12-col" id="maratona">
                  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                      <div class="mdl-card__title">
                          <h2 class="mdl-card__title-text">A maratona:</h2>
                      </div>
                      <div class="mdl-card__supporting-text">
                          <p>
                           A Maratona de Programação é um evento que será realizado pelo IFSP campus Araraquara criado neste ano de 2016 em prol  de destinar aos alunos de computação a busca de desenvolver habilidades que abrangem soluções de problemas, capacidade de trabalho em equipe, trabalhar sob pressão. Os times serão compostos de até 3 integrantes.
                          </p>
                      </div>
                  </div>
              </div>
                <div class="mdl-cell mdl-cell--12-col" id="regras">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Regras:</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <ol>
                              <li>Quem chegar após as 09:00 não poderá participar</li>
                              <li>Permitido grupo de até três pessoas</li>
                              <li>Internet permitida apenas para uso da plataforma com a penalidade de desclassificação</li>
                              <li>Permitido o uso de livros e anotações</li>
                              <li>Proibido interação com outros grupos durante a maratona</li>
                              <li>Caso haja empate, a solução submetida primeiro será a vencedora</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col" id="cadastro">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Cadastro:</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>
                              Para se cadastrar acesse o <a href="#" rel="nofollow" target="_blank">Link</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col" id="local">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Local:</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                          <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.905640181395!2d-48.21314978559742!3d-21.783912685594174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8f190344c700b%3A0x1f5498764d246f3!2sInstituto+Federal+de+Educa%C3%A7%C3%A3o%2C+Ci%C3%AAncia+e+Tecnologia+de+S%C3%A3o+Paulo%2C+Campus+Araraquara!5e0!3m2!1spt-BR!2sbr!4v1472961185651" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>

    </div>
</body>
</html>
