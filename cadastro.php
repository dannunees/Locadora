<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/cadastro.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>






    <header style="display: flex; justify-content: space-around;">
            <img style="    width: 25%;
            height: 100%;" class="logo" src="./image/logotipo.png">
            <nav>
                <ul>
                    <li><a href="veiculos.html">Veiculos</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li> 
                      <a href="cadastro.php#paralogin">Login</a>
                    </li>
                    <li><a href="testemail.html">Contato</a></li>
                    <li><a href="index.php">Lista Veiculos</a></li>
                </ul>
            </nav>
        </header>

        
<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <!-- Login -->
    <div class="content">      
      <div id="login">
        <form method="post" action="autenticar.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="digite seu e-mail"/>
          </p>
          
          <p> 
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="digite sua senha" /> 
          </p>
          
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
          
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
          
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>

      <!-- Cadastro -->
      <div id="cadastro">
        <form method="post" action="processar.php"> 
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="digite seu nome" />
          </p>
          
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="digite seu e-mail"/> 
          </p>
          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="digite sua senha"/>
          </p>
          
          <p> 
            <input style="background=black" type="submit" name="cadastrar" value="Cadastrar"/> 
          </p>
          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div> 

  





    </body>

</html>