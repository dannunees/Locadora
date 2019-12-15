<?php

    session_start();

    if(!isset($_SESSION['email']) && (is_null($_SESSION['email']))) {
      header("Location: cadastro.php#paralogin");
    }

    $email = $_SESSION['email'];
    $nome = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li class="msg">
                      Bem vindo, <?php echo $nome; ?> !
                    </li>
                    <li><a href="veiculos.html">Veiculos</a></li>
                    <li><a href="testemail.com">Contato</a></li>
                    <li> 
                      <a href="logout.php">Logout</a>
                    </li>
                   
                </ul>
            </nav>
            
        </header>
        
       <div class="carousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item item-1 active">
              <h1>ENCONTRE OS MELHORES VEICULOS DO MERCADO</h1>
              <p>Na OVIDIOS CAR você encontra as melhores marcas de veiculos para locação comp preços completamente acessíveis!</p>
            </div>
            <div class="carousel-item item-2">
              <h1>SEM CONSULTA AO SPFC E SERASA</h1>
              <p>Alugue seu veículo sem burocracias e sem consultas ao SPFC e SERASA</p>
            </div>
            <div class="carousel-item item-3">
              <h1>SAIA COM A OPÇÃO DESEJADA</h1>
              <p>Trabalhamos com todas as marcas disponiveis no mercado para atender a todo tipo de público</p>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <section>
        
          <div class="slides">
              
            <div class="slide1">
              <img src="./image/COMP.png">
            </div>

            <div class="slide2">
              <img src="./image/CRUF.png">
            </div>

            <div class="slide3">
              <img src="./image/XC40.png">
            </div>
            
          </div>
      </section>
        
        
      <footer>

<div class="footer2">

  <div class="col1">
    <h1>Fale conosco</h1>
    <p>Ovidios Car</p>
    <p>ovidio@ovidio</p>
  </div>

  <div class="col1">
    <h1>Junte-se a nós</h1>
    <p>Ovidios Car</p>
    <p>ovidio@ovidio</p>
  </div>

  <div class="col1">
    <h1>Fique de olho</h1>
    <p>Ovidios Car</p>
    <p>ovidio@ovidio</p>
  </div>
</div>
  


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>