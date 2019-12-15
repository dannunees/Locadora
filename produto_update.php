<?php

    if( !isset($_GET['id']) || $_GET['id'] == '' || !is_numeric($_GET['id']) ) {
        echo "Informe um produto para continuar.";
        return;
    }
    

    
    try {

        $produto_id = $_GET['id'];
        
        $produto_desc = $_POST['produto_descricao'];

        require_once 'connection.php';
        
        $sql = "UPDATE 
                    abc_produtos 
                SET 
                    produto_desc = :produto_descricao 
                WHERE produto_id = :id ";
        
        $ps = $instance->prepare($sql); 
        $ps->bindValue(':produto_descricao', $produto_desc, PDO::PARAM_STR);
        $ps->bindValue(':id', $produto_id, PDO::PARAM_INT);

        $ps->execute();
        
        echo "Produto alterado com sucesso! <br><br>";
        echo "<a href='index.php'> <b>Voltar</b> </a>";
        
    } catch (\Exception $e) {
        print $e->getMessage();
    }
    
    