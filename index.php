<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Ovidios Car </title>

    <style>
        .formCadastro {
            width:50%; 
            height:170px; 
            background-color:rgba(255, 156, 36, 0.47);
        }
    </style>

    <link rel="stylesheet" href="./css/meuEstilo.css">
</head>

<body>
<header style="display: flex; justify-content: space-around;">
            <img style="    width: 25%;
            height: 100%;" class="logo" src="./image/logotipo.png">
            <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="cadastro.html#paralogin">Login</a></li>
                    <li><a href="testemail.html">Contato</a></li>
                </ul>
            </nav>
            
        </header>
    
    <style>
        body{
            margin:0px;
        }

    </style>
    <div>
        

        
        <div style="display:flex;">
            
            
            <div class="formCadastro">
                <form action="produto_create.php" method="post">
                    <div style="margin:15px;">
                        <label for="produto_desc">Nome do Produto:</label>
                        <br/>
                        <input type="text" id="produto_desc" name="produto_desc" style="font-size:20px;" maxlength="45" placeholder="Max 45 Chars" />
                    </div>
                    
                    <div style="margin:15px;">
                        <input type="submit" value="Salvar" />
                    </div>
                </form>
            </div>
            
        
            <div style="width:50%; height:170px; background-color:rgba(168, 184, 235, 0.62);">
                
                <form action="produtos_list_one.php" method="get">
                    <div style="margin:15px;">
                        <label for="id">Código:</label>
                        <br/>
                        <input type="number" id="id" name="id" style="font-size:20px;" />
                    </div>
                    
                    <div style="margin:15px;">
                        <input type="submit" value="Ver detalhes" />
                    </div>
                </form>
            </div>
        </div>
        
        <hr/>
        
    
        <div>
            <div class="formListAll">
                <?php
                    require_once 'produtos_list.php';
                    
                    echo    "<div style='margin:15px; border-bottom:1px solid #ccc;'>
                                Total: <b>".sizeof($response_list)."</b>
                            </div>";
                    
                    if($response_list != null) {
                  

                        foreach($response_list as $produto) {
                            echo    "<div style='margin:15px;'> > 
                                        <a href='produtos_list_one.php?id=".$produto['produto_id']."' title='Ver detalhes desse produto.'>".$produto['produto_id']." - ".ucfirst($produto['produto_desc'])."</a> 

                                        | <a href='produto_delete.php?id=".$produto['produto_id']."'> <button>Remover</button> </a>
                                    </div>";
                        }
                    }
                    else{
                        echo "<b style='color:red; font-size:20px;'>Listagem vazia</b>";
                    }
                ?>
            </div>
        </div>
    </div>

    <footer>

<div class="footer2">

  <div class="col1">
    <h1>Ovidio's Car</h1>
    <p style="display: flex; align-items: center; justify-content: center;"><img src="./image/map.png">Rua dos Desenvolvedores,nº400</p>

  </div>

  <div class="col1">
    <h1>Siga-nos</h1>
    <p style="display: flex; align-items: center; justify-content: center;"><img src="./image/linkedin.png">www.linkedin.com/ovidioscar</p>
    <p style="display: flex; align-items: center; justify-content: center;"><img src="./image/facebook.png">www.facebook.cpm/ovidioscar</p>
    <p style="display: flex; align-items: center; justify-content: center;"><img src="./image/instagram.png">@locadoraovidioscar</p>
  </div>

  <div class="col1">
    <h1>Fale Conosco</h1>
    <p style="display: flex; align-items: center; justify-content: center;"><img src="./image/whatsapp.png"> (11) 94321-9876  </p>
    <p style="display: flex; align-items: center; justify-content: center;"><img src="./image/phone.png"> (11) 4321-9876</p>
    <p style="display: flex; align-items: center; justify-content: center;"><img src="./image/email.png">projetolocadorauni9@gmail.com</p> 
  </div>
</div>
  


</footer>  

    
</body>

</html>

