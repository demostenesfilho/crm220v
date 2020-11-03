<?php

?>


<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>220V Elétrica</title>
    </head>

    <body>

      <nav class="blue">
        <div class="nav-wrapper">

          <a href="#" class="sidenav-trigger show-on-large" data-target="menu-side">
            <i class="material-icons">menu</i>
          </a>

          <a href="index.php" class="brand-logo center">220V Soluções elétricas</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#"><i class="material-icons">notifications</i></a></li>
          </ul>
        </div>
      </nav>

      <div class="container section">


        <ul class="sidenav" id="menu-side">
          <li>
            <div class="user-view">
              <div class="background">
                <img src="imagens/background-sidenav.jpg" alt="background" />
              </div>
              <a href="#">
                <img src="imagens/user.jpg" alt="usuario" class="circle" />
              </a>
              <a href="">
                <span class="name white-text">Nome do usuário</span>
              </a>
              <a href="">
                <span class="email white-text">usuario@email.com</span>
              </a>
            </div>
          </li>
          <li>
            <a href="">
              <i class="material-icons">home</i>
              Início
            </a>
          </li>
          <li class="no-padding">
            <a class='dropdown-trigger coverTrigger' href='#' data-target='dropdown1'><i class="material-icons right">arrow_drop_down</i>Etapas</a>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#!">three</a></li>
            <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
            <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  
                      </ul>
                    </div>
                  </li>
              </ul>

          </li>
        </ul>

      </div>



      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.sidenav');
          var instances = M.Sidenav.init(elems);
        });
      </script>
      <script>
          document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();
      </script>
    </body>
  </html>