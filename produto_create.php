
   <html>
    <head>
      <title>Ovidios Car</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <header>
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

    </html>



<?php
   
    if( !isset($_POST['produto_desc']) || $_POST['produto_desc'] == '' ) {
        echo "Informe um produto para continuar.";
        return;
    }
    
    
    try {

        $descricao_produto = $_POST['produto_desc'];
        
    
        require_once 'connection.php'; 
        
        $sql = "INSERT INTO 
                    abc_produtos (produto_desc) 
                VALUES (:descricao_produto) ";
        
        $ps = $instance->prepare($sql); 

        $ps->bindValue(':descricao_produto', $descricao_produto, PDO::PARAM_STR);
        
        $ps->execute();
        
        
        echo "Produto <i style='color:blue;'>$descricao_produto</i> salvo com sucesso! <br><br>";
        echo "<a href='index.php'> <b>Voltar</b> </a>";
        
    } catch (\Exception $e) {
        print $e->getMessage();
    }
    
    ?>