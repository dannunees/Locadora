
   <html>
    <head>
      <title>Ovidios Car</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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

    </html>

<?php

    $response_list_one = null;
    
    if( !isset($_GET['id']) || $_GET['id'] == '' || !is_numeric($_GET['id']) ) {
        echo "Informe um código válido para continuar. <br/> <br/>";
        
        return;
    }
    
    try {
        $codigo = $_GET['id'];
        
        require_once 'connection.php';
        
        # Listará o produto especifico da tabela, pois TEM a clausula SQL WHERE(filtro)
        $sql = "SELECT 
                    produto_id
                    , produto_desc 
                FROM 
                    abc_produtos 
                WHERE 
                    produto_id = :codigo_produto
                ORDER BY 
                    produto_desc ";
        
        $ps = $instance->prepare($sql); #Prepara a instrucao SQL para ser feita no Banco de Dados:
        $ps->bindValue(':codigo_produto', $codigo, PDO::PARAM_INT);
        
        $ps->execute();
        
        #$response_list_one = $ps->fetchAll(PDO::FETCH_ASSOC);
        $response_list_one = $ps->fetchAll();

        #echo "Teste de impressao";
        /*
        echo "<pre>";
        var_dump($response_list_one); //imprimir informacoes tecnicas da variavel [DESENVOLVIMENTO]
        echo "</pre>";
        */

        if($response_list_one == null){
            echo "<b>Produto não encontrado!</b> <br/>";
        }
        else {
            echo "<b>CÓDIGO DO PRODUTO:</b> ".$response_list_one[0]['produto_id']." <br/> ".
                 "<b>DESCRIÇÃO DO PRODUTO:</b> ".$response_list_one[0]['produto_desc']."<br/><br/>

                <form action='produto_update.php?id=".$response_list_one[0]['produto_id']."' method='post'>
                    <input type='text' name='produto_descricao' id='produto_descricao' />

                    <input type='submit' value='Atualizar informação' />
                </form>";
        }
        
    } catch(\Exception $e) {
        var_dump($e->getMessage());
    }

    echo "<a href='index.php'> <b>Voltar</b> </a>";
    
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload de arquivos</title>

	<script>	
	function atualizarFoto(arq){
			var f = document.getElementById("foto");
			f.src = URL.createObjectURL(arq.files[0]);		
	}		
	</script>

</head>

<body>
    <form method="post" enctype="multipart/form-data" action="recebeUpload.php">
       Selecione uma imagem: <input name="arquivo" type="file" onchange="atualizarFoto(this)"/>
	   <br/><br/>
	   <img id="foto" style="width:80px;height:80px;" src="https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_960_720.png"/><br><br>
       <input type="submit" value="Salvar" />
    </form>
</body>
</html>

